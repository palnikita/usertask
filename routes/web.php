<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\Usercontroller;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/adduser', [Usercontroller::class, 'adduser'])->name('adduser');
Route::post('/users', [UserController::class, 'storeUser'])->name('userstore');
Route::get('/viewadduser', [UserController::class, 'viewadduser'])->name('viewadduser');
Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::post('/tasks', [TaskController::class, 'tasks'])->name('taskstore');
Route::get('/tasklist',[TaskController::class, 'tasklist'])->name('tasklist');
