<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SizesController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;

//backend routes are applicable here
Route::get('/admin_login', [AdminController::class, 'index'])->name('admin.login');
Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/logout', [SuperAdminController::class, 'destroy'])->name('admin.logout');
Route::post('/show_dashboard', [AdminController::class, 'show_dashboard'])->name('show.dashboard');

//category routes
Route::resource('/categories', CategoryController::class);
Route::get('/cat-status/{category}', [CategoryController::class, 'cat_change'])->name('catStatus');

//Subcategory routes
Route::resource('/subcategories', SubCategoryController::class);
Route::get('/subcat_status/{subCategory}', [SubCategoryController::class, 'status'])->name('subcatstatus');
Route::get('/subcategory/{id}/edit', [SubCategoryController::class, 'edit'])->name('sub.edit');
Route::put('/subcategory/{id}/update', [SubCategoryController::class, 'update'])->name('sub.update');
Route::delete('/subcategory/{id}/delete', [SubCategoryController::class, 'destroy'])->name('sub.delid');

//Brand routes
Route::get('/brand/{id}/status', [BrandController::class, 'status'])->name('brand.status');

Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
Route::get('/brand/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');
Route::put('/brand/{id}/update', [BrandController::class, 'update'])->name('brand.update');
Route::delete('/brand/{id}/delete', [BrandController::class, 'destroy'])->name('brand.delete');

//Unit routes
Route::get('/unit/{id}/status', [UnitController::class, 'status'])->name('unit.status');

Route::get('/unit', [UnitController::class, 'index'])->name('unit.index');
Route::get('/unit/create', [UnitController::class, 'create'])->name('unit.create');
Route::post('/unit/store', [UnitController::class, 'store'])->name('unit.store');
Route::get('/unit/{id}/edit', [UnitController::class, 'edit'])->name('unit.edit');
Route::put('/unit/{id}/update', [UnitController::class, 'update'])->name('unit.update');
Route::delete('/unit/{id}/delete', [UnitController::class, 'destroy'])->name('unit.delete');

//Size routes
Route::resource('/size', SizesController::class);
Route::get('/size-status/{sizes}', [SizesController::class, 'size_change'])->name('size.status');

//color routes
Route::resource('/color', ColorController::class);
Route::get('/color-status/{color}', [ColorController::class, 'color_change'])->name('color.status');

//product routes
Route::resource('/product', ProductController::class);
Route::get('/product-status/{product}', [ProductController::class, 'product_change'])->name('product.status');



//frontend routes are applicable here
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/details/{id}', [HomeController::class, 'ProductDetails'])->name('product.details');
