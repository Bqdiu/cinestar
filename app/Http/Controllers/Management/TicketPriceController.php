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

    public function getTicketPrice($TicketPriceID)
    {
        $ticket_price = TicketPrice::find($TicketPriceID);
        return response()->json($ticket_price);
    }

    public function editTicketPrice(Request $request)
    {
        $request->validate([
            'TicketPrice' => 'required|numeric',
        ], [
            'TicketPrice.required' => 'Hãy nhập giá vé',
            'TicketPrice.numeric' => 'Giá vé phải là số',
        ]);
        try {
            $ticket_price = TicketPrice::find($request->editTicketPriceID);
            $ticket_price->TicketPrice = $request->TicketPrice;
            $ticket_price->save();
            return redirect()->back()->with('mess', 'Sửa giá vé thành công');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Sửa giá vé không thành công: ' . $e->getMessage());
        }
    }
}
