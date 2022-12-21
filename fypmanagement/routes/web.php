<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentControl;
use App\Http\Controllers\lectControl;
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

//Students
Route::get('/student/register', [studentControl::class, "registerForm"]);
Route::post('/student/register/process', [studentControl::class, "registerProcess"]);
Route::get('/student', [studentControl::class, "showList"]);
Route::get('/student/delete/{id}', [studentControl::class, "deleteStudent"]);
Route::get('/student/update/{id}', [studentControl::class, "updateForm"]);
Route::post('/student/update/{id}/process', [studentControl::class, "updateProcess"]);

//Lecturers
Route::get('/lect/register', [lectControl::class, "registerForm"]);