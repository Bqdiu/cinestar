<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ShowSeat;
use App\Models\UserInfor;
use COM;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;

class BookingController extends Controller
{


    public function MomoPayment(Request $request)
    {
        header('Content-type: text/html; charset=utf-8');
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $request->TotalPrice;
        $orderId = time() . "";
        $redirectUrl = "http://cinestar.test/checkout";
        $ipnUrl = "http://cinestar.test/checkout";

        $extraData = "";


        $requestId = time() . "";
        $requestType = "payWithATM";
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash,  $secretKey);
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json

        //Just a example, please check more in there
        return response()->json(["payUrl" => $jsonResult['payUrl']]);
        // header('Location: ' . $jsonResult['payUrl']);
    }
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
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
        $view = View::make('client/home/cart/formPayment')->render();
        return response()->json(['view' => $view]);
    }

    public function Payment(Request $request)
    {
        $CheckoutPayment = $request->input('input-checkout-payment');
        switch ($CheckoutPayment) {
            case 'vnpay':
                return $this->MomoPayment($request);
            case 'momo':
                return $this->MomoPayment($request);
        }
    }
}
