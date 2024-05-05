<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserInforController;
use App\Http\Controllers\LoginController;
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
Route::get('/login',[UserInforController::class,'Login']);
Route::post('/loginSubmit',[UserInforController::class,'LoginPost']);
Route::get('/logout',[UserInforController::class,'Logout']);
Route::get('/register',[UserInforController::class,'Register']);
Route::post('/registerSubmit',[UserInforController::class,'PostRegister']);
Route::get('/detailmovie/{id}',[HomeController::class,'DetailMovie'])->name('detailmovie');
Route::get('/movie',[HomeController::class,'Movie']);
Route::get('/movie/showing',[HomeController::class,'Showing']);
Route::get('/movie/upcoming',[HomeController::class,'Upcoming']);
Route::post('/search',[HomeController::class,'Search'])->name('search');
Route::get('/book-tickets/{id}',[HomeController::class,'BookTickets']);
Route::get('/booktickets-partial/{idRap}/{idStatus}',[HomeController::class,'bookTicketsPartial']);

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']); 
Route::get('/admin/logout', [AdminController::class, 'Logout']);    
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'Index']);
});