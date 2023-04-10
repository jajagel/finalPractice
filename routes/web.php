<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [CustomerController::class, 'index'])->middleware('auth');
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/logout',[UserController::class,'logout']);

Route::get('/customer',[CustomerController::class,'index']);
Route::post('/update/customer/{id}',[CustomerController::class,'update']);
Route::post('/store/customer',[CustomerController::class,'store']);
Route::get('/delete/{id}', [CustomerController::class, 'delete']);

Route::get('/product',[ProductController::Class,'index'])->middleware('auth');
Route::post('/update/product/{id}',[ProductController::class,'update']);
Route::post('/store/product',[ProductController::class,'store']);
Route::get('/delete/{id}', [ProductController::class, 'delete']);