<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserInforController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Management\MovieController;
use App\Http\Controllers\Management\StatusMovieController;
use App\Http\Controllers\Management\CinemaController;
use Illuminate\Http\Request;


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
//Client
//Index
Route::get('/', [HomeController::class, 'Index']);

Route::get('/login', [UserInforController::class, 'Login'])->name('login');
Route::post('/loginSubmit', [UserInforController::class, 'LoginPost']);

//Logout
Route::get('/logout', [UserInforController::class, 'Logout']);

//Register
Route::get('/register', [UserInforController::class, 'Register']);
Route::post('/registerSubmit', [UserInforController::class, 'PostRegister']);

//Detail Movie
Route::get('/detailmovie/{MovieID}', [HomeController::class, 'DetailMovie'])->name('detailmovie');
Route::get('/cinemalist-partial/{Cityid}/{date}/{movieID}', [HomeController::class, 'CinemaListPartial']);

//Movie
Route::get('/movie', [HomeController::class, 'Movie'])->name("movie");
Route::get('/movie/showing', [HomeController::class, 'Showing']);
Route::get('/movie/upcoming', [HomeController::class, 'Upcoming']);

//Search Movie
Route::post('/search', [HomeController::class, 'Search'])->name('search');

//Book-Ticket
Route::get('/book-tickets/{id}', [HomeController::class, 'BookTickets']);
Route::get('/booktickets-partial/{idRap}/{idStatus}', [HomeController::class, 'bookTicketsPartial']);
Route::get('/seat-partial/{id}', [HomeController::class, 'seatPartial']);
Route::post('/reserve-seat', function (Request $request) {
    broadcast(new \App\Events\reserveSeat($request->input('seatID')));
});

//CheckOut
Route::get("/checkout", [HomeController::class, "CheckOut"]);
Route::get("/formCusPartial", [HomeController::class, 'FormCusPartial'])->name("formCus");
Route::get("/formPaymentPartial", [HomeController::class, 'FormPaymentPartial'])->name("formPayment");
Route::get("/formDetailShow/{id}", [HomeController::class, 'FormDetailShow'])->name("formDetailShow");

//Another
Route::get('/promotion', [HomeController::class, 'PromotionPage'])->name('promotion');
Route::get('/aboutus', [HomeController::class, 'AboutUsPage'])->name('aboutus');
Route::get("/price-of-ticket", [HomeController::class, "priceOfTicketPartial"]);




//Admin
Route::get('/admin', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'Logout']);
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'Index']);
    // movie status
    Route::get('/admin/moviestatus/index', [StatusMovieController::class, 'StatusMovieIndex']);
    Route::post('/admin/moviestatus/delete-movie-status', [StatusMovieController::class, 'deleteMovieStatus'])->name('deleteMovieStatus');
    Route::get('/admin/moviestatus/getMovieStatus/{IDStatus}', [StatusMovieController::class, 'getMovieStatus'])->name('getMovieStatus');
    Route::post('/admin/moviestatus/editMovieStatus', [StatusMovieController::class, 'editMovieStatus'])->name('editMovieStatus');
    Route::get('/admin/moviestatus/searchMovieStatus/{term}', [StatusMovieController::class, 'searchMovieStatus'])->name('searchMovieStatus');

    // movie
    Route::get('/admin/movie/index', [Moviecontroller::class, 'MovieIndex']);
    Route::get('/admin/movie/getMovie/{MovieID}', [Moviecontroller::class, 'getMovie'])->name('getMovie');
    Route::post('/admin/movie/editMovie', [Moviecontroller::class, 'editMovie'])->name('editMovie');
    Route::post('/admin/movie/delete-movie', [MovieController::class, 'deleteMovie'])->name('deleteMovie');
    Route::get('/admin/movie/searchMovie/{term}', [MovieController::class, 'searchMovie'])->name('searchMovie');
    Route::post('/admin/movie/add-movie', [MovieController::class, 'addMovie'])->name('addMovie');
    Route::get('/admin/movie/getDataOption', [Moviecontroller::class, 'getDataOption']);

    // cinema
    Route::get('/admin/cinema/index', [CinemaController::class, 'CinemaIndex']);
    Route::get('/admin/cinema/getDataOption', [CinemaController::class, 'getDataOption']);
    Route::post('/admin/cinema/add-cinema', [CinemaController::class, 'addCinema'])->name('addCinema');
    Route::post('/admin/cinema/delete-cinema', [CinemaController::class, 'deleteCinema'])->name('deleteCinema');
    Route::get('/admin/cinema/getCinema/{CinemaID}', [CinemaController::class, 'getCinema'])->name('getCinema');
    Route::post('/admin/cinema/editCinema', [CinemaController::class, 'editCinema'])->name('editCinema');

    // userinfo
    Route::get('/admin/userinfor/index', [UserInforController::class, 'UserInforIndex']);
    Route::get('/admin/userinfor/getUserInfor/{UserID}', [UserInforController::class, 'getUserInfor'])->name('getUserInfor');
    Route::post('/admin/userinfor/editUserInfor', [UserInforController::class, 'editUserInfor'])->name('editUserInfor');
});

Route::group(['middleware' => 'manager'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'Index']);
});

Route::group(['middleware' => 'staff'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'Index']);
});
// login/ register google
Route::get('auth/google', [UserInforController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [UserInforController::class, 'callBackGoogle']);


// reset password
Route::get('/forget-password', [UserInforController::class, 'forgetPassword'])->name('forgetPassword');
Route::post('/forget-password', [UserInforController::class, 'forgetPassowrdPost'])->name('forgetPassowrdPost');
Route::get('/reset-password/{token}', [UserInforController::class, 'resetPassword'])->name('resetPassword');
Route::post('/reset-password', [UserInforController::class, 'resetPasswordPost'])->name('resetPasswordPost');
