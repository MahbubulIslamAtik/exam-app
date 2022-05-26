<?php

use App\Http\Controllers\Exam\StudentExamController;
use App\Http\Controllers\StartExamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//__ Exam Routes __//
Route::get('/add-question', [StudentExamController::class, 'create'])->name('question');
Route::get('/manage-question', [StudentExamController::class, 'show'])->name('show');
Route::post('/store', [StudentExamController::class, 'store'])->name('store');
Route::get('/edit/{id}', [StudentExamController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [StudentExamController::class, 'updateData'])->name('update');
Route::get('/delete/{id}', [StudentExamController::class, 'destroy'])->name('destroy');

//__ Fronend Exam Question Route __//
Route::get('exam-form', [StartExamController::class, 'create'])->name('start');
Route::post('/next-question', [StartExamController::class, 'submitAnswer'])->name('submitans');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
