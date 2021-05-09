<?php

use App\Models\Bed;

use App\Models\Good;
use App\Models\Chair;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\SocailController;
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

require('admin.php');
require('cart.php');

Route::get('/', function () {
    return view('landing');
});


Route::post('/pay', [MyPaymentController::class,'paymentprocess']);


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


Route::view('vue', 'vue');

Route::get('/getProductDetails/{id}', [ProductsController::class ,'getProductDetails']);

Route::get('/checkoutForm', [MyPaymentController::class, 'checkout']);
Route::view('/gg', 'showProducts.productDetails');
// Route::get('/google', function () {
//     return Socialite::driver('facebook')->redirect();
// });
Route::get('/auth/facebook', [SocailController::class, 'redirect']);
Route::get('/login/facebook', [SocailController::class, 'callback']);

Route::view('/', 'landing');

Route::view('/checkoutStripe', 'checkout');
Route::post('/savePaymentDetails', [MyPaymentController::class, 'savePaymentDetails']);

Route::get('/getProductsCategoreis', [ProductsController::class, 'index']);
Route::get('/getProducts/{id}', [ProductsController::class, 'show']);

Route::get('goods', function(){
    return Good::get();
});