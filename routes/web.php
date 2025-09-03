<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controlls\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudentController::class);
