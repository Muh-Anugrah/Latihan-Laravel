<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [studentController::class, 'index'])->name('student.index');
Route::get('/student/create', [studentController::class, 'create'])->name('student.create');
Route::post('/student/store', [studentController::class, 'store'])->name('student.store');

