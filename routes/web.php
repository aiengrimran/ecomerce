<?php

use App\Models\Bed;

use App\Models\Chair;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MyPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require('bedsRoute.php');
require('admin.php');
require('cart.php');

Route::get('/', function () {
    return view('landing');
});


Route::post('/pay', [MyPaymentController::class,'paymentprocess']);

Route::get('/add', [BedController::class, 'try']);
Route::get('/add', [BedController::class, 'try']);
Route::get('/get', [BedController::class, 'get'])->name('get');
// getting chair and updaing etc
Route::get('/getChairsProducts', [ChairController::class, 'index']);

Route::get('/shop', function () {
    return view('Checkout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('checkout',[BedController::class, 'get']);
Route::post('/stripe', [MyPaymentController::class,'stripePost'])->name('stripe.post');

	
Route::get('searchScout', function(){
   return Bed::search('Cremin')->get();
});

Route::view('checkClient', 'adminSection.orders');

Route::view('/shopView', 'showProducts.shop');
Route::view('vue', 'vue');

Route::get('/getProductDetails/{id}', [ProductsController::class ,'getProductDetails']);

Route::get('/checkout', [MyPaymentController::class, 'checkout']);
Route::view('/gg', 'showProducts.productDetails');
