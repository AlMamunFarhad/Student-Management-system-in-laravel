<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TecherController;
use Illuminate\Support\Facades\Route;



Route::get('/', [StudentController::class, 'index'])->name('home');
Route::resource('students', StudentController::class);
Route::resource('/techers', TecherController::class);
Route::get('/techers', [TecherController::class, 'index'])->name('techer');
Route::resource('/course', CourseController::class);
Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::resource('/enrollment',EnrollmentController::class);
Route::get('/enrollment', [EnrollmentController::class, 'index'])->name('enrollment');
Route::get('/payments', [PaymentController::class, 'index'])->name('payments');
