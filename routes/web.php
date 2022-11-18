<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CategoryController;

//backend routes are applicable here
Route::get('/admin_login',[AdminController::class,'index'])->name('admin.login');
Route::get('/dashboard',[SuperAdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/logout',[SuperAdminController::class,'destroy'])->name('admin.logout');
Route::post('/show_dashboard',[AdminController::class,'show_dashboard'])->name('show.dashboard');

//category routes
Route::resource('/categories/',CategoryController::class);

//frontend routes are applicable here
Route::get('/',[HomeController::class,'index'])->name('home');
