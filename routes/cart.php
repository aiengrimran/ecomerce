<?php

use App\Http\Controllers\CartController;

Route::get('/addToCart/{id}', [CartController::class, 'addToCart']);
Route::get('/deleteCartItem/{id}', [CartController::class, 'deleteCartItem']);
Route::get('getCartItems', [CartController::class, 'getCartItems'])->name('get.Cart.Items');
Route::post('/updateCartitem', [CartController::class, 'updateCartItem']);
Route::post('/addToCartFromProductDetails', [CartController::class, 'addToCartPost']);

Route::get('/addToCartFavorite/{id}', [CartController::class, 'addToCartFavorite']);