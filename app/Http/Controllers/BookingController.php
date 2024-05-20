<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ShowSeat;
use App\Models\UserInfor;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BookingController extends Controller
{
    public function Booking(Request $request)
    {

        $User = UserInfor::find($request->UserID);
        if (!$User) {
            // Handle the case where the user is not found
            return redirect()->back()->withErrors(['User not found']);
        }
        $Seats = json_decode($request->Seats, true);
        $TypeTicketQuantity = json_decode($request->TypeTicketQuantity);
        if ($User->UserID == 43) {
            try {
                $booking = Booking::create([
                    'NumberOfSeats' => count($Seats),
                    'Status' => 'Chưa thanh toán',
                    'UserID' => $User->UserID,
                    'ShowID' => $request->ShowID,
                    'FullName' => "",
                    'PhoneNumber' => "",
                    'Email' => "",
                    'TotalPrice' => $request->TotalPrice,
                    'createdAt' => now(),
                    'updatedAt' => now()
                ]);
            } catch (QueryException $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062)
                    return redirect()->back()->withErrors(['error' => "Ghế đã được đặt trong suất chiếu này"]);
                else
                    return redirect()->back()->withErrors(['error' => 'Lỗi khi đặt ghế']);
            }
        } else {
            try {
                $booking = Booking::create(
                    [
                        'NumberOfSeats' => count($Seats),
                        'Status' => 'Chưa thanh toán',
                        'UserID' => $User->UserID,
                        'ShowID' => $request->ShowID,
                        'FullName' => $User->Name,
                        'PhoneNumber' => $User->Phone,
                        'Email' => $User->Email,
                        'TotalPrice' => $request->TotalPrice,
                        'createdAt' => now(),
                        'updatedAt' => now()

                    ]

                );
            } catch (QueryException $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062)
                    return redirect()->back()->withErrors(['error' => "Ghế đã được đặt trong suất chiếu này"]);
                else
                    return redirect()->back()->withErrors(['error' => 'Lỗi khi đặt ghế']);
            }
        }


        foreach ($Seats as  $v) {
            ShowSeat::create(
                [
                    'Status' => 'Ghế đã được đặt',
                    'CinemaSeatID' => $v["SeatID"],
                    'ShowID' => $request->ShowID,
                    'BookingID' => $booking->BookingID
                ]

            );
        }


        return response()->json([
            'redirectUrl' => route('checkout', ['BookingID' => $booking->BookingID, 'RemainingTime' => $request->RemainingTime, 'TypeTicketList' => $TypeTicketQuantity])
        ]);
    }
    public function UpdateInformationOfBooking(Request $request)
    {
        $Booking = Booking::where('UserID', 43)->where('BookingID', $request->BookingID)->first();

        // Check if booking record exists
        if (!$Booking) {
            return response()->json(['error' => 'Booking not found'], 404);
        }

        // Update booking information
        $Booking->FullName = $request->input('FullName');
        $Booking->PhoneNumber = $request->input('PhoneNumber');
        $Booking->Email = $request->input('Email');
        $Booking->save();
        if ($Booking && !empty($Booking->FullName) && !empty($Booking->PhoneNumber) && !empty($Booking->Email)) {
            $view = View::make('client/home/cart/formPayment')->render();
            // Return a response with the updated view

        }
        return response()->json(['view' => $view]);
    }
}
