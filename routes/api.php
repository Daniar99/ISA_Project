<?php

use App\Http\Controllers\Api\AssignmentController;
use Illuminate\Support\Facades\Route;

Route::apiResource('assignments', AssignmentController::class);
