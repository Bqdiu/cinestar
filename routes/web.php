<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserInforController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Management\MovieController;
use App\Http\Controllers\Management\StatusMovieController;
use App\Http\Controllers\Management\CinemaController;
use App\Http\Controllers\Management\TicketPriceController;
use App\Http\Controllers\Management\ShowInforController;
use Illuminate\Http\Request;
use App\Http\Controllers\QRCodeController;

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

//Profile
Route::get('/profile', [UserInforController::class, 'Profile'])->name('profile');
Route::post('/profile-partial', [UserInforController::class, 'ProfilePartial'])->name('profile-partial');
Route::post('/history-partial', [UserInforController::class, 'HistoryPartial'])->name('history-partial');
Route::post('/update-infor', [UserInforController::class, 'UpdateInformation'])->name('updateInfor');
Route::post('/change-pass', [UserInforController::class, 'ChangePassword']);
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
Route::post('/updateInforBooking', [BookingController::class, 'UpdateInformationOfBooking']);

//CheckOut
Route::post('/booking', [BookingController::class, "Booking"])->name('booking');
Route::get("/checkout", [HomeController::class, "CheckOut"])->name('checkout');
Route::post("/payment", [BookingController::class, "Payment"])->name("Payment");
Route::get("/formCusPartial", [HomeController::class, 'FormCusPartial'])->name("formCus");
Route::get("/formPaymentPartial", [HomeController::class, 'FormPaymentPartial'])->name("formPaymentPartial");
Route::get("/formDetailShow/{id}", [HomeController::class, 'FormDetailShow'])->name("formDetailShow");
Route::get("/thank", [HomeController::class, "FormThank"])->name("formThank");
Route::get('/booking-movie-detail', [HomeController::class, "BookingMovieDetail"]);
Route::get('/update-seat', [BookingController::class, "UpdateSeat"]);

//Another
Route::get('/promotion', [HomeController::class, 'PromotionPage'])->name('promotion');
Route::get('/aboutus', [HomeController::class, 'AboutUsPage'])->name('aboutus');
Route::get('/services', [HomeController::class, 'Services'])->name('services');
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
    Route::get('/admin/cinema/searchCinema/{searchText}', [CinemaController::class, 'searchCinema'])->name('searchCinema');

    // userinfo
    Route::get('/admin/userinfor/index', [UserInforController::class, 'UserInforIndex']);
    Route::get('/admin/userinfor/getUserInfor/{UserID}', [UserInforController::class, 'getUserInfor'])->name('getUserInfor');
    Route::post('/admin/userinfor/editUserInfor', [UserInforController::class, 'editUserInfor'])->name('editUserInfor');
    Route::post('/admin/userinfor/delete-user', [USerInforController::class, 'deleteUser'])->name('deleteUser');
    Route::get('/admin/userinfor/getDataOption', [UserInforController::class, 'getDataOption']);
    Route::post('/admin/userinfor/add-user', [UserInforController::class, 'addUser'])->name('addUser');
    Route::post('/admin/userinfor/reset-password-user', [UserInforController::class, 'resetPasswordAdmin'])->name('resetPasswordAdmin');

    // ticket price
    Route::get('/admin/ticketprice/index', [TicketPriceController::class, 'TicketPriceIndex']);
    Route::get('/admin/ticketprice/getTicketPrice/{TicketPriceID}', [TicketPriceController::class, 'getTicketPrice'])->name('getTicketPrice');
    Route::post('/admin/ticketprice/editTicketPrice', [TicketPriceController::class, 'editTicketPrice'])->name('editTicketPrice');
    
    // showinfor
    Route::get('/admin/showinfor/index', [ShowInforController::class, 'ShowInforIndex']);
    Route::get('/admin/showinfor/searchShow/{searchText}', [ShowInforController::class, 'searchShow'])->name('searchShow');
    Route::get('/admin/showinfor/getShowInfor/{ShowID}', [ShowInforController::class, 'getShowInfor'])->name('getShowInfor');
    Route::get('/admin/showinfor/getCinemaHallByCinema/{CinemaID}', [ShowInforController::class, 'getCinemaHallByCinema'])->name('getCinemaHallByCinema');
    Route::post('/admin/showinfor/editShow', [ShowInforController::class, 'editShow'])->name('editShow');
    Route::get('/admin/showinfor/getDataOption', [ShowInforController::class, 'getDataOption']);
    Route::post('/admin/showinfor/addShow', [ShowInforController::class, 'addShow'])->name('addShow');
    Route::post('/admin/showinfor/delete-show', [ShowInforController::class, 'deleteShow'])->name('deleteShow');


});

Route::group(['middleware' => 'manager'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'Index']);
       // movie
    Route::get('/admin/movie/index', [Moviecontroller::class, 'MovieIndex']);
    Route::get('/admin/movie/getMovie/{MovieID}', [Moviecontroller::class, 'getMovie'])->name('getMovie');
    Route::post('/admin/movie/editMovie', [Moviecontroller::class, 'editMovie'])->name('editMovie');
    Route::post('/admin/movie/delete-movie', [MovieController::class, 'deleteMovie'])->name('deleteMovie');
    Route::get('/admin/movie/searchMovie/{term}', [MovieController::class, 'searchMovie'])->name('searchMovie');
    Route::post('/admin/movie/add-movie', [MovieController::class, 'addMovie'])->name('addMovie');
    Route::get('/admin/movie/getDataOption', [Moviecontroller::class, 'getDataOption']);

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
