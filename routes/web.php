<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('students.index');
// });
Route::resource('students', StudentController::class);
Route::get('/', [StudentController::class, 'index']);
