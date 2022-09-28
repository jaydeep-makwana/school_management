<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminLogin;
use App\Http\Middleware\AdminLogout;
use App\Models\Fees;
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

    Route::get('dashboard', [DashboardController::class, 'index']);
    
    Route::get('birthdays', [CourseController::class, 'index'])->name('birthdays.index');

    Route::prefix('courses')->group(function () {
        Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
        Route::get('add-course', [CourseController::class, 'create'])->name('courses.create');
        Route::post('add-course', [CourseController::class, 'store'])->name('courses.store');
        Route::get('edit-course/{id}', [CourseController::class, 'edit'])->name('courses.edit');
        Route::put('update-course/{id}', [CourseController::class, 'update'])->name('courses.update');
    });

    Route::prefix('students')->group(function () {
        Route::get('students', [StudentController::class, 'index'])->name('students.index');
        Route::get('add-student', [StudentController::class, 'create'])->name('students.create');
        Route::post('students', [StudentController::class, 'store'])->name('students.store');
        Route::get('student-profile/{id}', [StudentController::class, 'show'])->name('students.show');
        Route::get('edit-student/{id}', [StudentController::class, 'edit'])->name('students.edit');
        Route::put('update-student/{id}', [StudentController::class, 'update'])->name('students.update');
        Route::get('delete-student/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
        Route::get('students-search/{value}', [StudentController::class, 'searchStudent']);
    });

    Route::prefix('fees')->group(function () {
        Route::get('fees', [FeesController::class, 'index'])->name('fees.index');
        Route::get('pay-fees/{id}', [FeesController::class, 'create'])->name('fees.create');
        Route::post('pay-fees/{id}', [FeesController::class, 'store'])->name('fees.store');
        Route::get('transactions', [FeesController::class, 'show'])->name('fees.show');
    });
});
