<?php

use App\Http\Controllers\BedController;




Route::post('/createBedsProduct', [BedController::class, 'createBedProduct']);
Route::get('getBedEditView/{id}', [BedController::class, 'edit']);
Route::patch('/editBedProduct', [BedController::class, 'update']);
Route::delete('deleteBedProduct', [BedController::class, 'delete']);
Route::get('/getbeds', [BedController::class, 'index'])->name('getbeds');

