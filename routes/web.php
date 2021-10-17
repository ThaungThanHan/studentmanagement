<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

// Route::get('/', function () {
//     return view('students.students');
// });

Auth::routes();
// Route::resource('/students',StudentController::class);
// Route::resource('/teachers',TeacherController::class);

Route::get('/students',[App\Http\Controllers\StudentController::class,'index']);
Route::get('/students/create',[App\Http\Controllers\StudentController::class,'create']);
Route::get('/students/{id}',[App\Http\Controllers\StudentController::class,'show']);
Route::post('/students/',[App\Http\Controllers\StudentController::class,'store']);
Route::delete('/students/{id}',[App\Http\Controllers\StudentController::class,'destroy']);


Route::get('/teachers',[App\Http\Controllers\TeacherController::class,'index']);
Route::get('/teachers/create',[App\Http\Controllers\TeacherController::class,'create']);
Route::get('/teachers/{id}',[App\Http\Controllers\TeacherController::class,'show']);
Route::get('/teachers/{id}/edit',[App\Http\Controllers\TeacherController::class,'edit']);
Route::post('/teachers/',[App\Http\Controllers\TeacherController::class,'store']);
Route::post('/teachers/{id}',[App\Http\Controllers\TeacherController::class,'update']);
Route::delete('/teachers/{id}',[App\Http\Controllers\TeacherController::class,'destroy']);



Route::get('/programs',[App\Http\Controllers\ProgramController::class,'index']);
Route::get('/programs/create',[App\Http\Controllers\ProgramController::class,'create']);
Route::post('/programs',[App\Http\Controllers\ProgramController::class,'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index']);

Auth::routes();

Route::get('/attendance',[App\Http\Controllers\AttendanceController::class,'index']);
Route::get('/attendance/rollcall',[App\Http\Controllers\AttendanceController::class,'ChooseRollSheet']);
Route::get('/attendance/rollcall/rollsheet',[App\Http\Controllers\AttendanceController::class,'ShowRollSheet']);
Route::post('/attendance',[App\Http\Controllers\AttendanceController::class,'SetRollCall']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');