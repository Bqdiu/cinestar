<?php

namespace App\Http\Controllers;

use App\Events\reserveSeat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StatusMovie;
use App\Models\Movie;
use App\Models\Cinema;
use App\Models\CinemaHall;
use App\Models\CinemaSeat;
use App\Models\Showinfor;
use App\Models\City;
use App\Models\TicketPrice;
use App\Models\Booking;
use App\Models\Momo;
use App\Models\SeatType;
use App\Models\ShowSeat;
use App\Models\TypeTicketBookingList;
use App\Models\VNPay;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{

    //Home
    public function Index()
    {
        $Phim = Movie::getAllMovieWithAgeRegulation();
        $Status = StatusMovie::getAllStatusMovie();
        return view('client/home/index', compact('Status', 'Phim'));
    }

    //Movie
    public function Movie()
    {
        $Phim = Movie::getAllMovieWithAgeRegulation();
        $Status = StatusMovie::getAllStatusMovie();
        return view('client/home/movie', compact('Status', 'Phim'));
    }
    public function Showing()
    {
        $Phim = Movie::where('IDStatus', '=', 1)->paginate(8);
        return view('client/home/showing', compact('Phim'))->with('i', (request()->input('page', 1) - 1) * 8);
    }
    public function Upcoming()
    {
        $Phim = Movie::where('IDStatus', '=', 2)->paginate(8);
        return view('client/home/upcoming', compact('Phim'))->with('i', (request()->input('page', 1) - 1) * 8);;
    }

    //Detail Movie
    public function DetailMovie($id)
    {
        $PhimItem = Movie::getMovie($id);
        $City = City::all();
        $ShowInfor = Showinfor::select("ShowDate")->where('MovieID', $id)->distinct()->get();
        $TicketPrice = TicketPrice::all();
        return view('client/home/detailmovie', ['PhimItem' => $PhimItem, 'City' => $City, 'ShowInfor' => $ShowInfor, "MovieID" => $id, "TicketPrice" => $TicketPrice]);
    }

    public function CinemaListPartial($CityID, $date, $movieID)
    {
        $Cinema = Cinema::where("CityID", $CityID)->get();
        $ShowTimes = [];
        foreach ($Cinema as $key => $cinema) {

            $ShowTimes[$cinema->CinemaID] = Showinfor::getStartTimeOFShow($cinema->CinemaID, $date, $movieID);

            // Thực hiện xử lý với $ShowInfor nếu cần
        }


        return view('client/home/detail-movie/cinemalistPartial', ["Cinema" => $Cinema, "ShowTime" => $ShowTimes]);
    }
    public function SeatPartial($ShowID)
    {
        $Showinfor = Showinfor::find($ShowID);
        $CinemaSeat = CinemaSeat::where("CinemaHallID", $Showinfor->CinemaHallID)->orderByDesc("ColumnPosition")->get();
        $RowPos = CinemaSeat::select("RowPosition")->where("CinemaHallID", $Showinfor->CinemaHallID)->distinct()->get();
        return view('client/home/detail-movie/seatPartial', ["ShowInfor" => $Showinfor, "Seat" => $CinemaSeat, "RowPos" => $RowPos]);
    }
    //Search
    public function Search(Request $request)
    {
        $keySearch = "%$request->key%";
        $Phim = Movie::searchMovie($keySearch);
        return view('client/home/search', ['key' => $request->key, 'Phim' => $Phim]);
    }

    //Cinema

    public function BookTickets($id)
    {

        $RapTheoID = Cinema::getCinemaByID($id);
        return view('client/home/booktickets', compact('RapTheoID'));
    }

    public function bookTicketsPartial($idRap, $idStatus)
    {
        $PhimTheoRap = null;
        $count = null;
        if ($idStatus == 2) {
            $PhimTheoRap = Movie::getMovieByStatusID($idStatus);
            $count = $PhimTheoRap->count();
        } else {
            $PhimTheoRap = Movie::getMovieByCinema($idRap, $idStatus);
            $count = Movie::countMovieByCinema($idRap, $idStatus);
        }


        $Title = StatusMovie::getStatusByID($idStatus);

        return view('client/home/bookticketsPartial', ['CountPhim' => $count, 'Title' => $Title, 'idRap' => $idRap, 'idStatus' => $idStatus, 'PhimTheoRap' => $PhimTheoRap]);
    }
    public function priceOfTicketPartial()
    {
        return view('client/home/priceOfTicketPartial');
    }
    public function PromotionPage()
    {
        return view('client/event/promotion');
    }

    public function AboutUsPage()
    {
        return view('client/event/aboutus');
    }

    public function Services()
    {
        return view('client/event/services');
    }
    //Check out and Payment

    public function CheckOut(Request $request)
    {

        if (!isset($request->BookingID)) {
            return redirect()->route('movie');
        }
        if (session("BookingID", null) == null) {
            session(["BookingID" => $request->BookingID]);
        }
        if (session("BookingID") != null) {
            session(["BookingID" => $request->BookingID]);
        }


        $booking = Booking::where('BookingID', '=', $request->BookingID)->first();
        $remainingTime = $request->RemainingTime;
        $TypeTicketList = TypeTicketBookingList::where('BookingID', '=', $request->BookingID)->get();

        $Ticket = ShowSeat::where('BookingID', '=', $booking->BookingID)->get();
        $TicketType = [];
        foreach ($Ticket as $v) {
            $seatTypeID = $v->cinema_seat->SeatTypeID;

            if (!isset($TicketType[$booking->BookingID])) {
                $TicketType[$booking->BookingID] = [];
            }

            if (!isset($TicketType[$booking->BookingID][$seatTypeID])) {
                $seatType = SeatType::find($seatTypeID);
                if ($seatType) {
                    $TicketType[$booking->BookingID][$seatTypeID] = $seatType;
                }
            }
        }

        return view('client/home/checkout', ["Booking" => $booking, "RemainingTime" => $remainingTime, 'TypeTicketList' => $TypeTicketList, "TicketType" => $TicketType, "Ticket" => $Ticket]);
    }
    public function FormCusPartial(Request $request)
    {
        $bookingId = $request->query('BookingID');
        $booking = Booking::find($bookingId);
        $view = View::make('client/home/cart/formCus', ["Booking" => $booking])->render();
        return response()->json(['view' => $view]);
    }
    public function FormPaymentPartial()
    {
        $view = View::make('client/home/cart/formPayment')->render();
        return response()->json(['view' => $view]);
    }
    public function FormThank(Request $request)
    {

        $bookingID = intval(session('BookingID'));


        $Message = null;
        $booking = Booking::find($bookingID);
        if (!$booking) {
            return redirect()->route('index');
        }
        if ($booking->Status == "Chưa thanh toán") {

            if ($request->message == "Successful.") {
                $booking->Status = "Đã Thanh Toán";
                $Message = $request->message;

                $booking->PaymentID = $request->PaymentID;
                Momo::create([
                    'partnerCode' => $request->partnerCode,
                    'orderId' => $request->orderId,
                    'requestId' => $request->requestId,
                    'orderInfo' => $request->orderInfo,
                    'orderType' => $request->orderType,
                    'transId' => $request->transId,
                    'resultCode' => $request->resultCode,
                    'message' => $request->message,
                    'payType' => $request->payType,
                    'responseTime' => $request->responseTime,
                    'extraData' => $request->extraData,
                    'signature' => $request->signature,
                    'paymentOption' => $request->paymentOption,
                    'BookingID' => $booking->BookingID
                ]);
                $ShowSeat = ShowSeat::where('BookingID', '=', $booking->BookingID)->get();
                foreach ($ShowSeat as $s) {
                    $s->Status = "Ghế đã được đặt";
                    $s->save();
                }

                $booking->save();
                broadcast(new reserveSeat($ShowSeat))->toOthers();
            } else if ($request->vnp_ResponseCode == "00") {
                $booking->Status = "Đã Thanh Toán";
                $Message = $request->vnp_ResponseCode;
                $booking->PaymentID = $request->PaymentID;
                VNPay::create([
                    'vnp_BankCode' => $request->vnp_BankCode,
                    'vnp_BankTranNo' => $request->vnp_BankTranNo,
                    'vnp_CardType' => $request->vnp_CardType,
                    'vnp_OrderInfo' => $request->vnp_OrderInfo,
                    'vnp_PayDate' => $request->vnp_PayDate,
                    'vnp_ResponseCode' => $request->vnp_ResponseCode,
                    'vnp_TmnCode' => $request->vnp_TmnCode,
                    'vnp_TransactionNo' => $request->vnp_TransactionNo,
                    'vnp_TransactionStatus' => $request->vnp_TransactionStatus,
                    'vnp_TxnRef	' => $request->vnp_TxnRef,
                    'vnp_SecureHash' => $request->vnp_SecureHash,
                    'BookingID' => $booking->BookingID
                ]);
                $ShowSeat = ShowSeat::where('BookingID', '=', $booking->BookingID)->get();
                foreach ($ShowSeat as $s) {
                    $s->Status = "Ghế đã được đặt";
                    $s->save();
                }

                $booking->save();
                broadcast(new reserveSeat($ShowSeat))->toOthers();
            } else {
                $Message = "Error";
            }
        }
        $TypeTicketList = TypeTicketBookingList::where('BookingID', '=', $booking->BookingID)->get();;

        $Ticket = ShowSeat::where('BookingID', '=', $booking->BookingID)->get();
        $TicketType = [];
        foreach ($Ticket as $v) {
            $seatTypeID = $v->cinema_seat->SeatTypeID;

            if (!isset($TicketType[$booking->BookingID])) {
                $TicketType[$booking->BookingID] = [];
            }

            if (!isset($TicketType[$booking->BookingID][$seatTypeID])) {
                $seatType = SeatType::find($seatTypeID);
                if ($seatType) {
                    $TicketType[$booking->BookingID][$seatTypeID] = $seatType;
                }
            }
        }

        return view('client/home/cart/formThank', ["Booking" => $booking, "Message" => $Message, 'TypeTicketList' => $TypeTicketList, "TicketType" => $TicketType, "Ticket" => $Ticket]);
    }
    public function BookingMovieDetail(Request $request)
    {
        $booking = Booking::where('BookingID', '=', $request->BookingID)->first();
        $TypeTicketList = TypeTicketBookingList::where('BookingID', '=', $booking->BookingID)->get();

        $Ticket = ShowSeat::where('BookingID', '=', $request->BookingID)->get();
        $TicketType = [];
        foreach ($Ticket as $v) {
            $seatTypeID = $v->cinema_seat->SeatTypeID;

            if (!isset($TicketType[$request->BookingID])) {
                $TicketType[$request->BookingID] = [];
            }

            if (!isset($TicketType[$request->BookingID][$seatTypeID])) {
                $seatType = SeatType::find($seatTypeID);
                if ($seatType) {
                    $TicketType[$request->BookingID][$seatTypeID] = $seatType;
                }
            }
        }
        return view('client/home/cart/bookingMovieDetail', ["Booking" => $booking, 'TypeTicketList' => $TypeTicketList, "TicketType" => $TicketType, "Ticket" => $Ticket]);
    }
}
