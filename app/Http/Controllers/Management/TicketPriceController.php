<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TicketPrice;

class TicketPriceController extends Controller
{
    public function TicketPriceIndex()
    {
        $ticket_price = TicketPrice::select('*')->leftJoin('seat_type','ticket_price.SeatTypeID','=','seat_type.SeatTypeID')->get();
        return view('admin.ticketprice.index',compact('ticket_price'));
    }
}
