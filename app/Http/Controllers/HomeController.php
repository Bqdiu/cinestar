<?php

namespace App\Http\Controllers;

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
        $Phim = Movie::getAllMovieWithAgeRegulation()->where("IDStatus", 1);
        return view('client/home/showing', compact('Phim'));
    }
    public function Upcoming()
    {
        $Phim = Movie::getAllMovieWithAgeRegulation()->where("IDStatus", 2);
        return view('client/home/upcoming', compact('Phim'));
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
    public function PromotionPage()
    {
        return view('client/event/promotion');
    }

    public function AboutUsPage()
    {
        return view('client/event/aboutus');
    }
}
