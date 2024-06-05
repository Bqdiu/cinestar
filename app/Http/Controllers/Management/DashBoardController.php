<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\DeleteBooking;
use App\Models\Booking;
use App\Models\Movie;
use App\Models\ShowSeat;
use App\Models\TypeTicketBookingList;
use App\Models\UserInfor;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;

class DashBoardController extends Controller
{
    public function Index()
    {
        $year = Booking::selectRaw('YEAR(createdAt) as year')
            ->orderBy('year', 'asc')
            ->first();
        $year1 = Booking::selectRaw('YEAR(createdAt) as year')
            ->orderBy('year', 'desc')
            ->first();
        return view('admin.dashboard', ['year_old' => $year, 'year_new' => $year1]);
    }
    public function getDataOption()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }
    public function FilterByYearAndMovie($year, $movie_id)
    {
        $bookings = Booking::selectRaw('MONTH(createdAt) as month, SUM(TotalPrice) as total')
            ->join('showinfor', 'booking.ShowID', '=', 'showinfor.ShowID')
            ->join('movie', 'movie.MovieID', '=', 'showinfor.MovieID')
            ->where('movie.MovieID', '=', $movie_id)
            ->where('Status', '=', 'Đã Thanh Toán')
            ->whereYear('createdAt', $year)
            ->groupBy('month')
            ->get();

        return response()->json($bookings);
    }

    // public function FilterByCustomer()
    // {
    //     $customers = Booking::selectRaw('booking.UserID,Name, SUM(TotalPrice) as total')
    //         ->join('userinfor','userinfor.UserID','=', 'booking.UserID')
    //         ->where('Status', '=', 'Đã Thanh Toán')
    //         ->groupBy('booking.UserID')
    //         ->get();
    //     return response()->json($customers);

    // }

    public function FilterByCustomer()
    {
        $customers = Booking::selectRaw('booking.UserID, userinfor.Name, SUM(TotalPrice) as total')
            ->join('userinfor', 'userinfor.UserID', '=', 'booking.UserID')
            ->where('Status', '=', 'Đã Thanh Toán')
            ->groupBy('booking.UserID', 'userinfor.Name')
            ->get();
        return response()->json($customers);
    }

}
