<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::post('/product', [App\Http\Controllers\ProductsController::class, 'store']);
Route::get('/product/{prod_id}', [App\Http\Controllers\ProductsController::class, 'show']);
Route::put('/product/{prod_id}', [App\Http\Controllers\ProductsController::class, 'update']);
Route::delete('product/{prod_id}', [App\Http\Controllers\ProductsController::class, 'destroy']);
