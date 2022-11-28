<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/',[HomeController::class,'dashboard'])->name('dashboard')->middleware(['auth']);

// Route::get('/', [HomeController::class,'index'])->middleware(['auth']);


Route::get('/login',[HomeController::class,'login'])->name('login');

Route::get('/signup',[HomeController::class,'signup'])->name('signup');

Route::post('/login',[UserController::class,'login'])->name('login');

Route::post('/signup',[UserController::class,'signupUser'])->name('signupUser');

Route::post('/save-todo',[HomeController::class,'saveTodo'])->name('saveTodo');

Route::get('/edit/{id}',[HomeController::class,'editTodo'])->name('editTodo');

Route::post('/edit',[HomeController::class,'updateTodo'])->name('updateTodo');

Route::get('/delete/{id}',[HomeController::class,'deleteTodo']);

Route::get('/logout',[UserController::class,'logout'])->name('logout');



