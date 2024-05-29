<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class,'index'])->name('home');
Route::get('/login', [MainController::class, 'loginindex'])->name('login');

Route::get('/upload-form', [DrugController::class, 'uploadForm']);
Route::post('/upload', [DrugController::class, 'upload']);

Route::get('/drugs', [DrugController::class, 'index'])->name('drugs.index');
Route::get('/drugs/create', [DrugController::class, 'create'])->name('drugs.create');
Route::post('/drugs', [DrugController::class, 'store'])->name('drugs.store');
// Route::get('/drugs/{drug}/edit', [DrugController::class, 'edit'])->name('drugs.edit');
Route::put('/drugs/{drug}', [DrugController::class, 'update'])->name('drugs.update');
Route::delete('/drugs/{drug}', [DrugController::class, 'destroy'])->name('drugs.destroy');
Route::post('/drugs/train-model', [DrugController::class, 'trainModel'])->name('drugs.trainModel');

Route::get('/create_model', [DrugController::class, 'createModelForm'])->name('create_model_form');
Route::post('/create_model', [DrugController::class, 'createModel'])->name('create_model');
Route::get('/predict-form', [DrugController::class, 'predictForm'])->name('predict_form');
Route::post('/predict', [DrugController::class, 'predict']);

Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/feature',[MainController::class,'feature'])->name('feature');
Route::get('/tim',[MainController::class,'tim'])->name('tim');


