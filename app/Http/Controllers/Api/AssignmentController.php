<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssignmentRequest;
use App\Http\Requests\UpdateAssignmentRequest;
use App\Http\Resources\AssignmentResource;
use App\Models\Assignment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class AssignmentController extends Controller
{
    /**
     * Display a listing of assignments.
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $query = Assignment::query();

        if ($request->filled('status')) {
            $query->where('status', $request->query('status'));
        }

        $assignments = $query->orderBy('due_date', 'asc')->get();

        return AssignmentResource::collection($assignments);
    }

    /**
     * Store a newly created assignment in storage.
     */
    public function store(StoreAssignmentRequest $request): JsonResponse
    {
        $assignment = Assignment::create($request->validated());

        return (new AssignmentResource($assignment))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified assignment.
     */
    public function show(Assignment $assignment): AssignmentResource
    {
        return new AssignmentResource($assignment);
    }

    /**
     * Update the specified assignment in storage.
     */
    public function update(UpdateAssignmentRequest $request, Assignment $assignment): AssignmentResource
    {
        $assignment->update($request->validated());

        return new AssignmentResource($assignment);
    }

    /**
     * Remove the specified assignment from storage.
     */
    public function destroy(Assignment $assignment): Response
    {
        $assignment->delete();

        return response()->noContent();
    }
}
