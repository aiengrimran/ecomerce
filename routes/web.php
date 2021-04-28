<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('landing');
});

Route::post('/pay', [MyPaymentController::class,'paymentprocess']);
Route::get('/stripe', [BedController::class, 'tryStripe']);
Route::get('/carttotal', [BedController::class, 'CartTotal']);
Route::post('/updateCartitem', [BedController::class, 'update']);
Route::get('/deleteCartItem/{id}', [BedController::class, 'deleteCartItem']);
Route::get('/delete', [BedController::class, 'destroy']);
Route::get('/getbeds', [BedController::class, 'index'])->name('getbeds');
Route::post('/addtocart', [BedController::class, 'addtocart']);
Route::get('/add', [BedController::class, 'try']);
Route::get('/add', [BedController::class, 'try']);
Route::get('/get', [BedController::class, 'get'])->name('get');
// getting chair and updaing etc
Route::get('/getchairs', [ChairController::class, 'index']);


// Route::get('/delete', [ChairController::class, 'removealldata']);
// Route::get('/delete', [BedController::class, 'removealldata']);
// CRUD BEDS Routes

Route::get('/shop', function () {
    return view('Checkout');
});


Route::get('/all', function(){
    return Bed::all();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('stripe', 'MyPaymentController@stripe');

Route::view('checkout',[BedController::class, 'get']);
Route::post('/stripe', [MyPaymentController::class,'stripePost'])->name('stripe.post');

	

Route::get('search', function() {
    $query = ''; // <-- Change the query for testing.

    $articles = Bed::search($query)->get();

    return $articles;
});
