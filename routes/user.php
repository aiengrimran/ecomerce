<?php

use App\Http\Controllers\RegisterCustomerController;
Route::get('userDashboard', [RegisterCustomerController::class, 'userDashboard']);