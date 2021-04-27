<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
Route::get('admin/allproducts', [AdminController::class, 'allproducts']);
Route::get('admin/dashboard', [ProductsController::class, 'admin']);
Route::post('admin/createProduct', [ProductsController::class, 'create']);
Route::get('admin/createProduct', [ProductsController::class, 'createproduct']);
