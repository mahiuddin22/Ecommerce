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
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;

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
Route::get('category/{id}', [HomeController::class, 'productCategory'])->name('product.category');
Route::get('subcategory/product/{id}', [HomeController::class, 'subcategoryProduct'])->name('productBySubcat');
Route::get('brand/product/{id}', [HomeController::class, 'brandProduct'])->name('productByBrand');


//Cart
Route::post('add-to-cart/{id}', [CartController::class, 'AddToCart'])->name('addToCart');
Route::get('delete-cart/{id}', [CartController::class, 'destroy'])->name('delete-cart');


//checkout
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('login/check', [CheckoutController::class, 'checklogin'])->name('login');
//login before checkout
Route::get('cart/table', [CheckoutController::class, 'viewCart'])->name('view.cart');

//Customer login
Route::post('customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::get('customer/logout', [CustomerController::class, 'logout'])->name('customer.logout');
Route::post('customer/registration', [CustomerController::class, 'registration'])->name('customer.registration');


//Shipping info
Route::post('shipping/information', [CheckoutController::class, 'shippingInfo'])->name('shipping.info');
Route::get('payment/information', [CheckoutController::class, 'paymentInfo'])->name('payment.info');

//Place Order
Route::post('order/place', [CheckoutController::class, 'placeOrder'])->name('place.order');
