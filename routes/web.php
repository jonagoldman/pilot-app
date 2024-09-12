<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CreditCardController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::post('register', [CreditCardController::class, 'register']);
    Route::post('payment', [CreditCardController::class, 'payment']);
});
