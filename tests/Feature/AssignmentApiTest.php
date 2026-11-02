<?php

namespace Tests\Feature;

use App\Models\Assignment;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AssignmentApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_list_all_assignments_ordered_by_due_date_ascending(): void
    {
        $assignmentLater = Assignment::factory()->create([
            'due_date' => Carbon::now()->addDays(10)->toDateString(),
            'course_code' => 'cs302',
        ]);

        $assignmentEarlier = Assignment::factory()->create([
            'due_date' => Carbon::now()->addDays(2)->toDateString(),
            'course_code' => 'db201',
        ]);

        $response = $this->getJson('/api/assignments');

        $response->assertOk()
            ->assertJsonCount(2, 'data')
            ->assertJsonPath('data.0.id', $assignmentEarlier->id)
            ->assertJsonPath('data.0.course_code', 'DB201')
            ->assertJsonPath('data.1.id', $assignmentLater->id)
            ->assertJsonPath('data.1.course_code', 'CS302');
    }

    public function test_can_filter_assignments_by_status(): void
    {
        Assignment::factory()->create(['status' => 'pending']);
        Assignment::factory()->create(['status' => 'submitted']);

        $response = $this->getJson('/api/assignments?status=pending');

        $response->assertOk()
            ->assertJsonCount(1, 'data')
            ->assertJsonPath('data.0.status', 'pending');
    }

    public function test_can_create_new_assignment(): void
    {
        $payload = [
            'title' => 'Operating Systems Virtual Memory Lab',
            'course_code' => 'cs401',
            'description' => 'Implement page replacement algorithms.',
            'due_date' => Carbon::now()->addDays(7)->toDateString(),
            'priority' => 'high',
            'status' => 'pending',
        ];

        $response = $this->postJson('/api/assignments', $payload);

        $response->assertCreated()
            ->assertJsonPath('data.title', 'Operating Systems Virtual Memory Lab')
            ->assertJsonPath('data.course_code', 'CS401')
            ->assertJsonPath('data.priority', 'high');

        $this->assertDatabaseHas('assignments', [
            'title' => 'Operating Systems Virtual Memory Lab',
            'course_code' => 'cs401',
        ]);
    }

    public function test_create_response_contains_database_defaults(): void
    {
        $response = $this->postJson('/api/assignments', [
            'title' => 'Default Values',
            'course_code' => 'CS101',
            'due_date' => Carbon::tomorrow()->toDateString(),
        ]);

        $response->assertCreated()
            ->assertJsonPath('data.priority', 'medium')
            ->assertJsonPath('data.status', 'pending');

        $this->getJson('/api/assignments/'.$response->json('data.id'))
            ->assertOk()
            ->assertExactJson($response->json());
    }

    public function test_create_rejects_null_priority_and_status_without_saving(): void
    {
        $this->postJson('/api/assignments', [
            'title' => 'Invalid Defaults',
            'course_code' => 'CS101',
            'due_date' => Carbon::tomorrow()->toDateString(),
            'priority' => null,
            'status' => null,
        ])->assertUnprocessable()
            ->assertJsonValidationErrors(['priority', 'status']);

        $this->assertDatabaseCount('assignments', 0);
    }

    public function test_filter_rejects_unknown_status_and_array_input(): void
    {
        foreach (['status=unknown', 'status[]=pending'] as $query) {
            $this->getJson('/api/assignments?'.$query)
                ->assertUnprocessable()
                ->assertJsonValidationErrors('status');
        }
    }

    public function test_description_length_is_validated_on_create_and_update(): void
    {
        $this->postJson('/api/assignments', [
            'title' => 'Long Description',
            'course_code' => 'CS101',
            'due_date' => Carbon::tomorrow()->toDateString(),
            'description' => str_repeat('a', 5001),
        ])->assertUnprocessable()->assertJsonValidationErrors('description');

        $assignment = Assignment::factory()->create(['title' => 'Original Title']);

        $this->patchJson('/api/assignments/'.$assignment->id, [
            'title' => 'Must Not Be Saved',
            'description' => str_repeat('a', 5001),
        ])->assertUnprocessable()->assertJsonValidationErrors('description');

        $this->assertSame('Original Title', $assignment->fresh()->title);
    }

    public function test_invalid_update_does_not_change_the_record(): void
    {
        $assignment = Assignment::factory()->create(['title' => 'Original Title']);

        $this->patchJson('/api/assignments/'.$assignment->id, [
            'title' => 'Must Not Be Saved',
            'priority' => null,
            'status' => 'invalid',
            'grade' => 101,
        ])->assertUnprocessable()
            ->assertJsonValidationErrors(['priority', 'status', 'grade']);

        $this->assertSame('Original Title', $assignment->fresh()->title);
    }

    public function test_missing_records_and_unsupported_put_follow_the_lesson_routes(): void
    {
        $this->patchJson('/api/assignments/99999', ['status' => 'submitted'])->assertNotFound();
        $this->deleteJson('/api/assignments/99999')->assertNotFound();
        $this->getJson('/api/assignments/not-a-number')->assertNotFound();
        $this->putJson('/api/assignments/1', ['title' => 'Replacement'])->assertStatus(405);
    }

    public function test_store_validation_fails_when_required_fields_missing(): void
    {
        $response = $this->postJson('/api/assignments', []);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['title', 'course_code', 'due_date']);
    }

    public function test_store_validation_fails_for_past_due_date_or_invalid_enums(): void
    {
        $response = $this->postJson('/api/assignments', [
            'title' => 'Sample Assignment',
            'course_code' => 'CS101',
            'due_date' => Carbon::yesterday()->toDateString(),
            'priority' => 'critical',
            'status' => 'archived',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['due_date', 'priority', 'status']);
    }

    public function test_can_show_single_assignment(): void
    {
        $assignment = Assignment::factory()->create([
            'course_code' => 'se310',
        ]);

        $response = $this->getJson("/api/assignments/{$assignment->id}");

        $response->assertOk()
            ->assertJsonPath('data.id', $assignment->id)
            ->assertJsonPath('data.course_code', 'SE310');
    }

    public function test_show_returns_404_when_assignment_not_found(): void
    {
        $response = $this->getJson('/api/assignments/99999');

        $response->assertNotFound();
    }

    public function test_can_partially_update_assignment(): void
    {
        $assignment = Assignment::factory()->create([
            'status' => 'pending',
            'grade' => null,
        ]);

        $response = $this->patchJson("/api/assignments/{$assignment->id}", [
            'status' => 'graded',
            'grade' => 92,
        ]);

        $response->assertOk()
            ->assertJsonPath('data.status', 'graded')
            ->assertJsonPath('data.grade', 92);

        $this->assertDatabaseHas('assignments', [
            'id' => $assignment->id,
            'status' => 'graded',
            'grade' => 92,
        ]);
    }

    public function test_can_delete_assignment(): void
    {
        $assignment = Assignment::factory()->create();

        $response = $this->deleteJson("/api/assignments/{$assignment->id}");

        $response->assertNoContent(); // 204

        $this->assertDatabaseMissing('assignments', [
            'id' => $assignment->id,
        ]);
    }
}
