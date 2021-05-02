<?php

use App\Http\Controllers\CartController;

Route::post('/addtocart', [CartController::class, 'addtocart']);
Route::get('/deleteCartItem/{id}', [CartController::class, 'deleteCartItem']);
Route::get('getCartItems', [CartController::class, 'getCartItems'])->name('get.Cart.Items');
Route::post('/updateCartitem', [CartController::class, 'updateCartItem']);
Route::get('/im', [CartController::class, 'get']);