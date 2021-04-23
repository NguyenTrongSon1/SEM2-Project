<?php

use App\Http\Controllers\Front;
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


//// *** De kiem tra du lieu voi Model da chuan chua (JSON Formatter)
//Route::get('/', function () {
//    return \App\Models\Exam::find(1)->exam_type;
//});

Route::get('/', [Front\HomeController::class, 'index']);

Route::get('/courses', [Front\CourseController::class, 'course']);

Route::get('/about', [Front\CourseController::class, 'about']);

Route::get('/contact', [Front\CourseController::class, 'contact']);

// HIEU

Route::get('/faq', [Front\CourseController::class, 'faq']);

Route::get('/entrance_exam', [Front\CourseController::class, 'entrance_exam']);

Route::get('/search_exam', [Front\CourseController::class, 'search_exam']);

// DUC


Route::get('/admin', [Front\HomeController::class, 'admin']);

Route::get('/staff', [Front\HomeController::class, 'staff']);

Route::get('/student', [Front\HomeController::class, 'student']);

Route::get('/class', [Front\HomeController::class, 'class']);

Route::get('/addstudent', [Front\HomeController::class, 'addStudent']);

Route::get('/addcourse', [Front\HomeController::class, 'addCourse']);

Route::get('/addprofessor', [Front\HomeController::class, 'addProfessor']);

// AN

Route::get('/instructor', [Front\HomeController::class, 'instructor']);

Route::get('/students', [Front\HomeController::class, 'students']);

Route::get('/teacher', [Front\HomeController::class, 'teacher']);

Route::get('/training', [Front\HomeController::class, 'training']);

//login

Route::get('/login',[Front\loginController::class,'getLogin']);
Route::post('/login',[Front\loginController::class,'postLogin']);




