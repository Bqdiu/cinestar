<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Jobs\DeleteBooking;
use App\Models\Booking;
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

    public function FilterByDate($start, $end)
    {
        $bookings = Booking::where('Status','=','Đã Thanh Toán')
                    ->whereBetween('createdAt',[$start,$end])->get();
        return response()->json($bookings);
    }
}
