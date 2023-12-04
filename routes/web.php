<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])
    ->name('tasks.index');

Route::post('/', [TaskController::class, 'store'])
    ->name('tasks.store');

Route::delete('/clear', [TaskController::class, 'clear'])
    ->name('tasks.clear');

Route::get('/{task}/edit', [TaskController::class, 'edit'])
    ->name('tasks.edit');

Route::put('/{task}/complete', [TaskController::class, 'complete'])
    ->name('tasks.complete');

Route::get('/{task}', [TaskController::class, 'show'])
    ->name('tasks.show');

Route::put('/{task}', [TaskController::class, 'update'])
    ->name('tasks.update');
    
Route::delete('/{task}', [TaskController::class, 'destroy'])
    ->name('tasks.destroy');
