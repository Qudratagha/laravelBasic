<?php

use App\Http\Controllers\RollsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;



Auth::routes();

//Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/',[UserController::class, 'index']);
//Route::get('/', function () {
//    return view('login');
//});
//Route::('/user', [UserController::class, 'index'] );

Route::resource('/users', UserController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/product', ProductController::class);

Route::resource('/student', StudentController::class);
Route::resource('/rolls', RollsController::class);

////
//Route::get('students', [StudentController::class, 'index']);
//Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
