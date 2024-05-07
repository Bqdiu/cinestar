<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StatusMovie;
use App\Models\Movie;
use App\Models\Cinema;
use App\Models\Showinfor;
class HomeController extends Controller
{
 
    //Home
    public function Index(){
        $Phim = Movie::getAllMovieWithAgeRegulation();
        $Status = StatusMovie::getAllStatusMovie();
        return view('client/home/index',compact('Status','Phim'));
    }
 
   //Movie
    public function Movie(){
        $Phim = Movie::getAllMovieWithAgeRegulation();
        $Status = StatusMovie::getAllStatusMovie();
        return view('client/home/movie',compact('Status','Phim'));
    }
    public function Showing(){
        $Phim = Movie::getAllMovieWithAgeRegulation()->where("IDStatus",1);
        return view('client/home/showing',compact('Phim'));
    }
    public function Upcoming(){
        $Phim = Movie::getAllMovieWithAgeRegulation()->where("IDStatus",2);
        return view('client/home/upcoming',compact('Phim'));
    }
    public function DetailMovie($id){
        $PhimItem = Movie::getMovie($id);
        return view('client/home/detailmovie',['PhimItem' => $PhimItem]);
    }
    public function Search(Request $request){
        $keySearch = "%$request->key%";
        $Phim = Movie::searchMovie($keySearch);
        return view('client/home/search',['key'=>$request->key,'Phim' => $Phim]);
    }

    //Cinema

    public function BookTickets($id){
        
        $RapTheoID = Cinema::getCinemaByID($id);
        return view('client/home/booktickets',compact('RapTheoID'));
    }
   
    public function bookTicketsPartial($idRap,$idStatus){
        $PhimTheoRap = Movie::getMovieByCinema($idRap,$idStatus);            
        $count = Movie::countMovieByCinema($idRap,$idStatus); 
        $Title = StatusMovie::getStatusByID($idStatus);
        
        return view('client/home/bookticketsPartial',['CountPhim'=>$count,'Title'=>$Title,'idRap' => $idRap,'idStatus'=>$idStatus,'PhimTheoRap'=> $PhimTheoRap]);
    }
   
}
