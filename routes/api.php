<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\SexController;
use App\Http\Controllers\SizeProductController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('product', ProductController::class);
Route::resource('account', AccountController::class);
Route::resource('adminaccount', AdminAccountController::class);
Route::resource('feedback', FeedBackController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('producttype', ProductTypeController::class);
Route::resource('sex', SexController::class);
Route::resource('size', SizeProductController::class);