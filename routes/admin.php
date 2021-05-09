<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
Route::get('admin/allproducts', [AdminController::class, 'allproducts'])->name('allProducts');
Route::get('admin/dashboard', [AdminController::class, 'admin']);
Route::post('admin/createProduct', [AdminController::class, 'store']);
Route::get('admin/createProduct', [AdminController::class, 'createproduct']);
Route::post('/searchProduct', [AdminController::class, 'searchProduct']);

Route::delete('/admin/deleteProduct', [AdminController::class, 'destroy']);
Route::get('/admin/editProduct/{id}', [AdminController::class, 'edit']);
Route::patch('/admin/editProduct', [AdminController::class, 'update']);
Route::post('/admin/createCategory', [AdminController::class, 'createCategory']);