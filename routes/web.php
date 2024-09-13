<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/',[LoginController::class,'index'])->name('login');

Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'registerDataSave']);