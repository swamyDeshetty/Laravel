<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;

// crud routes..
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\EloquentController;






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

// it is use the get the view file of the laravel  urlname and blade file name..
Route::view('swamy','swamy'); #('urlname',"bladefilename")
// using the controller in the web.php
Route::get('hello',[HelloController::class,'hello']);
Route::get('User',[UserController::class,'loadview']);
Route::get('Fetch',[EmployeeController::class,'fetchData']);

// crud operations...
Route::get('index',[MemberController::class,'index']);
Route::get('add-student',[MemberController::class,'addStudent']);
Route::post('save-student',[MemberController::class,'Savestudent']);
Route::get('edit-student/{id}',[MemberController::class,'EditStudent']);
Route::post('update-student',[MemberController::class,'Updatestudent']);
Route::get('delete-student/{id}',[MemberController::class,'DeleteStudent']);

// login authentication system..
Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyloggedIn');
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyloggedIn');
Route::post('/register-user',[CustomAuthController::class,'RegisterUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('IsLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::get('/search', [MemberController::class, 'search'])->name('search');

//pdf generation..
Route::get('/pdf', [MemberController::class, 'generatePDF']);

// /eloquent model
Route::get('/eloquent', [EloquentController::class, 'eloquent']);













