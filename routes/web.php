<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Repositories\ProjectRepository;
use App\Repositories\TaskRepository;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;
use App\Repositories\BaseRepository;

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
    return view('Home');
})->name('index');

Route::resource('tasks', TaskController::class);
Route::resource('projects', ProjectController::class);
Route::get('task/{id}', [TaskController::class, 'index'])->name('task');

// Route::fallback(function () {
//     return view('Layouts.Error404');
// });

// Tist Unit

// Test return Json
Route::get('category/index', [CategoryController::class, 'index']);

/*
    Test Design pattern Repository
    Class: BaseRepository

    This class serves as the base repository for handling CRUD operations.

    Method: index
    Method: create
    Method: update
    Method: delete
*/
Route::post('task/store', [TaskController::class, 'store'])->name('store');
// Route::post('create', [BaseRepository::class, 'create']);
// Route::put('update', [BaseRepository::class, 'update']);
// Route::delete('delete', [BaseRepository::class, 'delete']);
// Route::get('searchAndFilter', [BaseRepository::class, 'searchAndFilter']);