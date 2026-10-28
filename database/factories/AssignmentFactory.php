<?php

namespace Database\Factories;

use App\Models\Assignment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'course_code' => fake()->randomElement(['CS302', 'DB201', 'SE310', 'NET102']),
            'description' => fake()->paragraph(),
            'due_date' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'priority' => fake()->randomElement(['low', 'medium', 'high']),
            'status' => fake()->randomElement(['pending', 'in_progress', 'submitted', 'graded']),
            'grade' => null,
        ];
    }

    /**
     * Indicate that the assignment is graded.
     */
    public function graded(?int $grade = null): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'graded',
            'grade' => $grade ?? fake()->numberBetween(70, 100),
        ]);
    }
}
