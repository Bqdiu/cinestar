<?php

namespace App\Http\Controllers;

use App\Jobs\DeleteBooking;
use App\Models\Booking;
use App\Models\ShowSeat;
use App\Models\TypeTicketBookingList;
use App\Models\UserInfor;
use Carbon\Carbon;
use COM;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;

class BookingController extends Controller
{

    public function VnPayPayment(Request $request)
    {

        $code_cart = rand(00, 99);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://cinestar.test/thank?PaymentID=2";
        $vnp_TmnCode = "2ZM8THJS"; //Mã website tại VNPAY 
        $vnp_HashSecret = "1UHHYP23A0HOQMT3J7PI4WOFAAHDVOIJ"; //Chuỗi bí mật

        $vnp_TxnRef = $code_cart; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này 

        $vnp_OrderInfo = "Thanh toán hóa đơn";
        $vnp_OrderType = "Cinestar";
        $vnp_Amount = $request->TotalPrice * 100;
        $vnp_Locale = "VN";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        // if (isset($_POST['redirect'])) {
        //     header('Location: ' . $vnp_Url);
        //     die();
        // } else {
        //     echo json_encode($returnData);
        // }
        return response()->json(["payUrl" => $vnp_Url]);
    }

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
        $redirectUrl = "http://cinestar.test/thank?PaymentID=1";
        $ipnUrl = "http://cinestar.test/thank?PaymentID=1";

        $extraData =  "";


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
            'signature' => $signature,

        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json   

        // return $jsonResult;
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
        $booking = null;
        if (!$User) {
            // Handle the case where the user is not found
            return response()->json(['User not found']);
        }
        $Seats = json_decode($request->Seats, true);
        foreach ($Seats as $s) {
            $seatItem = ShowSeat::where('CinemaSeatID', '=', $s['SeatID'])->where('ShowID', '=', $request->ShowID)->first();
            if (isset($seatItem))
                return response()->json(['error' => 'Ghế này đã được đặt!.']);
        }

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
                    'updatedAt' => now(),
                    'PaymentID' => null
                ]);
            } catch (QueryException $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062)
                    return response()->json(['error' => "Ghế đã được đặt trong suất chiếu này"]);
                else
                    return response()->json(['error' => 'Lỗi khi đặt ghế']);
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
                        'updatedAt' => now(),
                        'PaymentID' => null

                    ]

                );
            } catch (QueryException $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062)
                    return response()->json(['error' => "Ghế đã được đặt trong suất chiếu này"]);
                else
                    return response()->json(['error' => 'Lỗi khi đặt ghế']);
            }
        }
        try {
            $TypeTicketQuantity = json_decode($request->TypeTicketQuantity, true);
            foreach ($TypeTicketQuantity as $t) {
                TypeTicketBookingList::create(
                    [
                        'TicketID' => $t['TicketTypeID'],
                        'Quantity' => $t['Quantity'],
                        'BookingID' => $booking->BookingID
                    ]
                );
            }
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062)
                return response()->json(['error' => "Ghế đã được đặt trong suất chiếu này"]);
            else
                return response()->json(['error' => 'Lỗi khi đặt ghế']);
        }

        foreach ($Seats as  $v) {
            ShowSeat::create(
                [
                    'Status' => 'Ghế đang được giữ',
                    'CinemaSeatID' => $v["SeatID"],
                    'ShowID' => $request->ShowID,
                    'BookingID' => $booking->BookingID
                ]

            );
        }

        DeleteBooking::dispatch($booking)->delay(Carbon::now()->addMinute(2));
        return response()->json([
            'redirectUrl' => route('checkout', ['BookingID' => $booking->BookingID])
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
                return $this->VnPayPayment($request);
            case 'momo':
                return $this->MomoPayment($request);
        }
    }
    public function UpdateSeat(Request $request)
    {
        $Seat = ShowSeat::where('ShowID', '=', $request->ShowID)->get();

        return response()->json(["Seat" => $Seat]);
    }
    public function BookingIndex()
    {
        $bookings = Booking::select('*')->paginate(8);
        return view('admin.booking.index',compact('bookings'));
    }

    public function searchBooking($term)
    {
        $bookings = Booking::where('BookingID', '=',$term)
            ->join('showinfor', 'booking.ShowID', '=', 'showinfor.ShowID')
            ->join('movie', 'movie.MovieID', '=', 'showinfor.MovieID')
            ->join('payment_method', 'booking.PaymentID', '=', 'payment_method.PaymentID')
            ->orWhere('FullName', 'like', '%' . $term . '%')
            ->orWhere('PhoneNumber', 'like', '%' . $term . '%')
            ->orWhere('Email', 'like', '%' . $term . '%')
            ->get();
        if ($bookings->isEmpty()) {
            $bookings = Booking::select('*')
                    ->join('showinfor', 'booking.ShowID', '=', 'showinfor.ShowID')
                    ->join('movie', 'movie.MovieID', '=', 'showinfor.MovieID')
                    ->join('payment_method', 'booking.PaymentID', '=', 'payment_method.PaymentID')
                    ->get();
            return response()->json($bookings);
        }
        return response()->json($bookings);
    }
}
