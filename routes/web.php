<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checklist\ChecklistController;
use App\Http\Controllers\Checklist\TaskController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ChecklistController::class, 'view'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/view', [ChecklistController::class, 'view'])->name('checklist.view');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::controller(TaskController::class)->group(function () {
        Route::post('/new_task', 'create')->name('newTask.create');
        Route::put('/task_edit', 'task_edit')->name('task.edit');
        Route::delete('/task_delete', 'task_delete')->name('task.delete');
        Route::post('/task_status', 'task_status')->name('task.status');
    });
    
    Route::controller(ChecklistController::class)->group(function () {
        Route::post('/create', 'create')->name('checklist.create');
        Route::put('/edit', 'edit')->name('checklist.edit');
        Route::delete('/delete', 'delete')->name('checklist.delete');
        Route::get('/create_task', 'create_task')->name('task.create');
    });
});

require __DIR__ . '/auth.php';
