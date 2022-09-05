<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminLogin;
use App\Http\Middleware\AdminLogout;
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


Route::view('/', 'home')->middleware('adminlogin');

Route::post('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);

Route::middleware(AdminLogout::class)->group(function () {

    Route::get('dashboard', function () {
        return view('dashboard.dashboard');
    });

    Route::view('add-student', 'students.add_student');
    Route::post('students', [StudentController::class, 'store'])->name('students');
});


























 // Route::view('sidebar', 'Dashboard.sidebar');
 // Route::view('navbar', 'navbar');
 // Route::view('signup', 'admin_signup');
 // Route::view('login', 'login');
 
 //birthday
 // Route::get('bDay', [operationController::class, 'find_bDay']);
 
 //addmission form
 // Route::post('add_student', [admisssion_form::class, 'operation']);
 // Route::get('admission_form', [operationController::class, 'course_show']);
 
 // course
 // Route::post('add_course', [operationController::class, 'course']);
 
 
 // Route::view('course', 'course_category');
 // display route
 // Route::get('admin_dashboard', [operationController::class, 'show']);
 //admin_login with signUP
 // Route::post('admin_signup', [AdminController::class, 'admin_login']);
 // Route::post('admin_login', [AdminController::class, 'login']);
 // Route::get('admin_logout', [logout::class, 'admin_logout']);
 
 // update route
 // Route::get('edit/{id}', [operationController::class, 'edit']);
 // Route::put('edit/{id}', [operationController::class, 'update']);
 
 // delete route
 // Route::get('delete/{id}', [operationController::class, 'destroy']);
 
 // Payment
 // Route::post('add_payment', [payment::class, 'add_fees']);