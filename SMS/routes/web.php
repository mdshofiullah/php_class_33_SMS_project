<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\StudentDashboardController;

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

//================>Home page routes goes here<=========================
Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/course-detail/{id}', [WebController::class, 'detail'])->name('course-detail');
Route::get('/enroll-now/{id}', [WebController::class, 'enroll'])->name('enroll-now');

Route::post('/new-enroll/{id}', [WebController::class, 'newEnroll'])->name('new-enroll');

Route::get('/user-login', [AuthController::class, 'login'])->name('user-login');
Route::get('/user-register', [AuthController::class, 'register'])->name('user-register');

Route::get('/teacher-dashboard', [TeacherDashboardController::class, 'index'])->name('teacher-dashboard'); //teacher dashboard
Route::get('/student-dashboard', [StudentDashboardController::class, 'index'])->name('student-dashboard'); //student dashboard

Route::post('/new-login', [AuthController::class, 'newLogin'])->name('new-login'); // teacher or student login
Route::post('/user-logout', [AuthController::class, 'logout'])->name('user-logout'); // teacher
Route::post('/student-logout', [AuthController::class, 'studentLogout'])->name('student-logout'); // student logout
// subject or course add, manage, create
Route::get('/add-subject', [SubjectController::class, 'index'])->name('add-subject');
Route::get('/manage-subject', [SubjectController::class, 'manage'])->name('manage-subject');

Route::post('/new-subject', [SubjectController::class, 'create'])->name('new-subject');



//================>Home page routes Ends here<=========================

//================>Admin page routes starts here<======================
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//User Get method
Route::middleware(['auth:sanctum', 'verified','superAdmin'])->get('/add-user', [UserController::class, 'index'])->name('add-user');
Route::middleware(['auth:sanctum', 'verified', 'superAdmin'])->get('/manage-user', [UserController::class, 'manage'])->name('manage-user');
Route::middleware(['auth:sanctum', 'verified', 'superAdmin'])->get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
Route::middleware(['auth:sanctum', 'verified', 'superAdmin'])->get('/delete-user/{id}', [UserController::class, 'delete'])->name('delete-user');

//User Post method
Route::middleware(['auth:sanctum', 'verified', 'superAdmin'])->post('/new-user', [UserController::class, 'create'])->name('new-user');
Route::middleware(['auth:sanctum', 'verified', 'superAdmin'])->post('/update-user{id}', [UserController::class, 'update'])->name('update-user');

//Teacher Get method
Route::middleware(['auth:sanctum', 'verified'])->get('/add-teacher', [TeacherController::class, 'index'])->name('add-teacher');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage-teacher', [TeacherController::class, 'manage'])->name('manage-teacher');
Route::middleware(['auth:sanctum', 'verified', 'superAdmin'])->get('/edit-teacher/{id}', [TeacherController::class, 'edit'])->name('edit-teacher');
Route::middleware(['auth:sanctum', 'verified', 'superAdmin'])->get('/delete-teacher/{id}', [TeacherController::class, 'delete'])->name('delete-teacher');
//Teacher Post method
Route::middleware(['auth:sanctum', 'verified'])->post('/new-teacher', [TeacherController::class, 'create'])->name('new-teacher');
Route::middleware(['auth:sanctum', 'verified'])->post('/update-teacher{id}', [TeacherController::class, 'update'])->name('update-teacher');
//manage course
Route::middleware(['auth:sanctum', 'verified'])->get('/manage-course', [AdminCourseController::class, 'manage'])->name('manage-course');
Route::middleware(['auth:sanctum', 'verified'])->get('/view-detail/{id}', [AdminCourseController::class, 'details'])->name('view-detail');
Route::middleware(['auth:sanctum', 'verified'])->get('/update-status/{id}', [AdminCourseController::class, 'updateStatus'])->name('update-status');


//================>Admin page routes Ends here<=========================

//================>Student page routes Starts here<=====================



//================>Student page routes Ends here<=======================
//================>Teacher page routes Starts here<=====================


//================>Teacher page routes Ends here<=======================


