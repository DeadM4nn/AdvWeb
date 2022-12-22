<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\studentControl;
use App\Http\Controllers\lectControl;
use App\Http\Controllers\projectControl;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

//Students
Route::get('/student/register', [studentControl::class, "registerForm"]);
Route::post('/student/register/process', [studentControl::class, "registerProcess"]);
Route::get('/student', [studentControl::class, "showList"]);
Route::get('/student/delete/{id}', [studentControl::class, "deleteStudent"]);
Route::get('/student/update/{id}', [studentControl::class, "updateForm"]);
Route::post('/student/update/{id}/process', [studentControl::class, "updateProcess"]);

//Lecturers
Route::get('/lect/register', [lectControl::class, "registerForm"]);
Route::get('/lect', [lectControl::class, "showList"]);
Route::post('/lect/register/process', [lectControl::class, "registerProcess"]);
Route::get('/lect/update/{id}', [lectControl::class, "updateForm"]);
Route::post('/lect/update/process', [lectControl::class, "updateProcess"]);
Route::get('/lect/delete/{id}', [lectControl::class, "deleteLect"]);
Route::get('/lect/reset/{id}', [lectControl::class, "resetForm"]);
Route::post('/lect/reset/process', [lectControl::class, "updateProcess"]);


//Project
Route::get('/project/register/{id}', [projectControl::class, "registerForm"]);
Route::post('/project/register/process', [projectControl::class, "registerProcess"]);
Route::get('/project', [projectControl::class, "showList"]);
Route::get('/project/view/{id}', [projectControl::class, "showDetail"]);

Route::get('/project/view/assign/supervisor/{id}', [projectControl::class, "assignSupervisorForm"]);
Route::post('/project/assign/supervisor/process', [projectControl::class, "assign"]);
Route::get('/project/view/assign/examinerone/{id}', [projectControl::class, "assignExaminerOneForm"]);
Route::get('/project/view/assign/examinertwo/{id}', [projectControl::class, "assignExaminerTwoForm"]);

Route::get('/project/delete/{id}', [projectControl::class, "delete"]);
Route::get('project/update/{id}/', [projectControl::class, "updateForm"]);
Route::post('project/update/process/', [projectControl::class, "updateProcess"]);

//User based page
Route::get("/supervising", [projectControl::class, "showProjectIndividual"]);
Route::get("/project/supervising/update/{id}", [projectControl::class, "supervisingUpdate"]);
Route::post('project/supervising/update/process/', [projectControl::class, "SupervisingUpdateProcess"]);

Route::view("/home", "home");
});

Route::get("/", function(){
    return redirect("/login");
});