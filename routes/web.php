<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [studentController::class, 'index'])->name('student.index');
Route::get('/student', [studentController::class, 'index'])->name('student.index');
Route::get('/student/create', [studentController::class, 'create'])->name('student.create');
Route::post('/student/store', [studentController::class, 'store'])->name('student.store');
Route::get('/student/{student}/edit', [studentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}', [studentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}', [studentController::class, 'destroy'])->name('student.destroy');

Route::resource('departement', DepartementController::class);
Route::resource('lecturer', LecturerController::class);