<?php

use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/todo/form', function () {
        return view('toDo.form');
    })->name('showForm');
    Route::get('/todo/{id}', [ToDoController::class, 'show'])->name('showTask');
    Route::get('/todo', [ToDoController::class, 'index'])->name('showTasks');
    Route::post('/todo/create', [ToDoController::class, 'create'])->name('createTask');
});

Route::redirect('/', '/home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
