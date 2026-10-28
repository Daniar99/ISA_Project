<?php

namespace App\Http\Resources;

use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Assignment
 */
class AssignmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'course_code' => strtoupper((string) $this->course_code),
            'description' => $this->description,
            'due_date' => $this->due_date?->format('Y-m-d'),
            'priority' => $this->priority,
            'status' => $this->status,
            'grade' => $this->grade,
            'created_at' => $this->created_at?->toIso8601String(),
        ];
    }
}
