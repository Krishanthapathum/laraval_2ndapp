<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard'); 
});

// Route::get('/admin', function () {
//     return view('adminDashboard');
// });

Route::get('/adminDashboard', [adminController::class,'GoToAdminDashboard']);

Route::get('/adminDashboard/adminGallery', [adminController::class, 'GoToAdminGallery'])->name('ADGroute');

Route::post('/dataRoute', [adminController::class, 'store'])->name('ADform');