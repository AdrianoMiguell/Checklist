<?php

use App\Http\Controllers\Checklist\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checklist\ChecklistController;
use App\Http\Controllers\Checklist\TaskController;

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

Route::get('/dashboard', [ChecklistController::class, 'view_dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/view', [ChecklistController::class, 'view_dashboard'])->name('checklist.view');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::controller(ChecklistController::class)->group(function () {
        Route::post('/create', 'create')->name('checklist.create');
        Route::put('/edit', 'edit')->name('checklist.edit');
        Route::delete('/delete', 'delete')->name('checklist.delete');
        Route::get('/view_task', 'view_task')->name('task.view');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::post('/create_category', 'create_category')->name('category.create');
        Route::post('/edit_category', 'edit_category')->name('category.edit');
        Route::post('/delete_category', 'delete_category')->name('category.delete');
    });

    Route::controller(TaskController::class)->group(function () {
        Route::post('/new_task', 'create')->name('task.create');
        Route::put('/task_edit', 'task_edit')->name('task.edit');
        Route::delete('/task_delete', 'task_delete')->name('task.delete');
        Route::delete('/task_delete_all', 'task_delete_all')->name('task.delete_all');
        Route::post('/task_status', 'task_status')->name('task.status');
        Route::post('/create_many_tasks', 'create_many_tasks')->name('task.createManyTasks');
    });
});

require __DIR__ . '/auth.php';
