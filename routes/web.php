<?php

use App\Http\Controllers\RollsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;


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
//Route::('/user', [UserController::class, 'index'] );

Route::resource('/users', UserController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/product', ProductController::class);

Route::resource('/student', StudentController::class);
Route::resource('/rolls', RollsController::class);
////
//Route::get('students', [StudentController::class, 'index']);
//Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

