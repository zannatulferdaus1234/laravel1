<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\OwnerInfoController;
use App\Http\Controllers\ArticleController;



Route::get('/student', [StudentController::class, 'create'])->name('student');
Route::get('/student-manage',       [StudentController::class, 'index'])->name('manage');
Route::post('/student-store',        [StudentController::class, 'store'])->name('store');
Route::get('/student-edit/{id}',    [StudentController::class, 'edit'])->name('edit');
Route::post('/student-update',       [StudentController::class, 'update'])->name('update');
Route::get('/student-delete/{id}',  [StudentController::class, 'delete'])->name('delete');

 Route::get('/', function () {
     return view('welcome');
});


Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/about', [ProductController::class, 'about'])->name('product.about');
Route::get('contact', [ProductController::class, 'contact'])->name('product.contact');

//owner
Route::get('/ownerInfo', [OwnerInfoController::class, 'index'])->name('ownerInfo.manage');
Route::post('/ownerInfo', [OwnerInfoController::class, 'store'])->name('ownerInfo.store');
Route::get('/ownerInfo/create', [OwnerInfoController::class, 'create'])->name('ownerInfo.create');
Route::get('/ownerInfo/{edit}/edit', [OwnerInfoController::class, 'edit'])->name('ownerInfo.edit');
Route::put('/ownerInfo/{id}', [OwnerInfoController::class, 'update'])->name('ownerInfo.update');
Route::get('/ownerInfo/{show}', [OwnerInfoController::class, 'show'])->name('ownerInfo.show');
Route::get('/ownerInfo/destroy', [OwnerInfoController::class, 'destroy'])->name('ownerInfo.destroy');

//article
Route::get('/article',        [ArticleController::class, 'index'])->  name('article.index');
Route::post('/article',             [ArticleController::class, 'store'])->  name('article.store');
Route::get('/article/create',       [ArticleController::class, 'create'])-> name('article.create');
Route::get('/article/{edit}/edit',  [ArticleController::class, 'edit'])->   name('article.edit');
Route::put('/article/{id}',         [ArticleController::class, 'update'])-> name('article.update');
Route::get('/article/{show}',       [ArticleController::class, 'show'])->   name('article.show');





//practice
Route::get('/practice', function () {
    $name = request('name');
    return view('practice.manage',[
        'name' => $name]);
});
Route::get('/practice/prac/{id}', [PracticeController::class, 'show']);
