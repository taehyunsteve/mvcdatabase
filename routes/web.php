<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; // 1. Panggil Controllernya

// 2. Ganti rute '/' yang tadinya nampilin 'welcome' jadi nampilin 'index' dari StudentController
Route::get('/', [StudentController::class, 'index']);

// 3. Biar fitur CRUD lainnya juga jalan
Route::resource('students', StudentController::class);