<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StatusMovie;
use App\Models\Movie;
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
        
        $RapTheoID = DB::table('cinema')
                ->select('*')
                ->where('cinemaID',$id)
                ->first();
        return view('client/home/booktickets',compact('RapTheoID'));
    }
   
    public function bookTicketsPartial($idRap,$idStatus){
        $PhimTheoRap = DB::table('movie')
                        ->join('age_regulation','movie.RegulationID','=','age_regulation.RegulationID')
                        ->join('showinfor','movie.MovieID','=','showinfor.MovieID')
                        ->join('cinema_hall','showinfor.CinemaHallID','=','cinema_hall.CinemaHallID')
                        ->join('cinema','cinema_hall.CinemaID','=','cinema.CinemaID')
                        ->select('movie.*','age_regulation.*')->distinct()
                        ->where('cinema.CinemaID',$idRap)
                        ->where('movie.IDStatus',$idStatus)
                        ->get();
        $CountPhim = DB::table('movie')
                        ->join('age_regulation', 'movie.RegulationID', '=', 'age_regulation.RegulationID')
                        ->join('showinfor', 'movie.MovieID', '=', 'showinfor.MovieID')
                        ->join('cinema_hall', 'showinfor.CinemaHallID', '=', 'cinema_hall.CinemaHallID')
                        ->join('cinema', 'cinema_hall.CinemaID', '=', 'cinema.CinemaID')
                        ->select(DB::raw('count(*) as count'))
                        ->where('cinema.CinemaID', $idRap)
                        ->where('movie.IDStatus', $idStatus)
                        ->first(); 
                    
        $count = $CountPhim->count; 
        $Title = DB::table('status_movie')
                    ->select('*')
                    ->where('IDStatus',$idStatus)
                    ->first();

        
        return view('client/home/bookticketsPartial',['CountPhim'=>$count,'Title'=>$Title,'idRap' => $idRap,'idStatus'=>$idStatus,'PhimTheoRap'=> $PhimTheoRap]);
    }
   
}
