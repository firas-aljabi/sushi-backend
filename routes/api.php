<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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


Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']); 
    Route::put('update_user/{id}', [AuthController::class, 'update']);
    Route::post('delete_user/{id}', [AuthController::class, 'destroy']);  
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/show_category/{id}', [CategoryController::class, 'show']);
Route::post('/store_category', [CategoryController::class, 'store']);
Route::put('/update_category/{id}', [CategoryController::class, 'update']);
Route::post('/delete_category/{id}', [CategoryController::class, 'destroy']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/show_product/{id}', [ProductController::class, 'show']);
Route::post('/store_product', [ProductController::class, 'store']);
Route::put('/update_product/{id}', [ProductController::class, 'update']);
Route::post('/delete_product/{id}', [ProductController::class, 'destroy']);
