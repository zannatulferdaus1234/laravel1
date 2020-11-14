<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/student', [StudentController::class, 'create'])->name('student');
Route::get('/student-manage',       [StudentController::class, 'index'])->name('manage');
Route::post('/student-store',        [StudentController::class, 'store'])->name('store');
Route::get('/student-edit/{id}',    [StudentController::class, 'edit'])->name('edit');
Route::post('/student-update',       [StudentController::class, 'update'])->name('update');
Route::get('/student-delete/{id}',  [StudentController::class, 'delete'])->name('delete');

Route::get('/', function () {
    return view('welcome');
});
