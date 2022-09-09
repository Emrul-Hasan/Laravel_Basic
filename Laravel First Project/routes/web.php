<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;   
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
Route::get('/index',[PagesController::class,'index'] ) ;
Route::get('/login',[PagesController::class,'login']);
Route::get('/register',[PagesController::class,'register']);

Route::get('/student/create',[StudentController::class,'create']);
Route::get('/student/edit',[StudentController::class,'edit']);
Route::get('/student/get/{id}',[StudentController::class,'get']);
   