<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/admin',[AdminController::class,'index'])->name('admin.login');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/',[HomeController::class,'index'])->name('home');
