<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\studentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/students/all', function(){
//     return view('students.index');
// });

Route::get('/students/all', [studentController::class, 'viewStudent']) ->name('viewStudent');
Route::get('/students/create', [studentController::class, 'createStudent'])->name('createStudent');
Route::post('/students/store', [studentController::class, 'storeStudent'])->name('storeStudent');

// Route::get('/admin', function () {
//     return view('adminDashboard');
// });

Route::get('/adminDashboard', [adminController::class,'GoToAdminDashboard']);

Route::get('/adminDashboard/adminGallery', [adminController::class, 'GoToAdminGallery'])->name('ADGroute');

Route::post('/dataRoute', [adminController::class, 'store'])->name('ADform');
