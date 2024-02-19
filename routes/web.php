<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

//Routes untuk menangani controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/reportproduct', [HomeController::class, 'reportproduct']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/create{id}', [ProductController::class,'edit']);
Route::delete('/product/{id}', [ProductController::class,'destroy']);
Route::resource('/product',ProductController::class);
