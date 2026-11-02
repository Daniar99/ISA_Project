<?php

use App\Http\Controllers\Api\AssignmentController;
use Illuminate\Support\Facades\Route;

Route::get('/assignments', [AssignmentController::class, 'index']);
Route::get('/assignments/{assignment}', [AssignmentController::class, 'show'])
    ->whereNumber('assignment');
Route::post('/assignments', [AssignmentController::class, 'store']);
Route::patch('/assignments/{assignment}', [AssignmentController::class, 'update'])
    ->whereNumber('assignment');
Route::delete('/assignments/{assignment}', [AssignmentController::class, 'destroy'])
    ->whereNumber('assignment');
