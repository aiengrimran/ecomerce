<?php

use Algolia\AlgoliaSearch\Algolia;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
Route::get('admin/allproducts', [AdminController::class, 'allproducts'])->name('allProducts');
Route::get('admin/dashboard', [ProductsController::class, 'admin']);
Route::post('admin/createProduct', [ProductsController::class, 'createproduct']);
Route::get('admin/createProduct', [ProductsController::class, 'createproduct']);
Route::post('/searchProduct', [ProductsController::class, 'searchProduct']);
