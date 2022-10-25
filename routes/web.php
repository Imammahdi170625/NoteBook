<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/executed', [HomeController::class, 'getExecutedTasks'])->name('executed');

Route::get('/expired', [HomeController::class, 'getExpiredTasks'])->name('expired');

Route::get('/create_task', [TaskController::class, 'showCreateTaskForm'])->name('task.create');

Route::post('/task_post', [TaskController::class, 'saveTask'])->name('task.save');

Route::get('/delete_task/{id}', [TaskController::class, 'deleteTask'])->name('task.delete');

Route::get('/detail/{id}',[TaskController::class,'showTask'])->name('task.show');
