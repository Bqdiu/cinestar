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
        return view('admin.dashboard');
    }

    // public function FilterByDate($start, $end, $movie_id)
    // {
    //     $bookings = Booking::selectRaw('MONTH(createdAt) as month, SUM(TotalPrice) as total')
    //         ->join('showinfor', 'booking.ShowID', '=', 'showinfor.ShowID')
    //         ->join('movie', 'movie.MovieID', '=', 'showinfor.MovieID')
    //         ->where('movie.MovieID', '=', $movie_id)
    //         ->where('Status', '=', 'Đã Thanh Toán')
    //         ->whereBetween('createdAt', [$start, $end])
    //         ->groupBy('month')
    //         ->get();

    //     return response()->json($bookings);
    // }

    public function FilterByDate($year, $movie_id)
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
    public function getDataOption()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

}
