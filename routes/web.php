<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get('/',[HomeController::class,'Index']);
Route::get('/login',[HomeController::class,'Login']);
Route::get('/register',[HomeController::class,'Register']);
Route::get('/detailproduct/{id}',[HomeController::class,'DetailProduct'])->name('detailproduct');
Route::get('/dashboard',[AdminController::class,'Index']);



