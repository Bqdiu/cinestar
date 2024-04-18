<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
 
    //Home
    public function Index(){
        $Phim = DB::select('select movie.*,age_regulation.* from movie,age_regulation where movie.RegulationID = age_regulation.RegulationID');
        $Status = DB::select('select * from status_movie');
        return view('client/home/index',compact('Status','Phim'));
    }
 
   //Movie
    public function Movie(){
        $Phim = DB::select('select movie.*,age_regulation.* from movie,age_regulation where movie.RegulationID = age_regulation.RegulationID');
        $Status = DB::select('select * from status_movie');
        return view('client/home/movie',compact('Status','Phim'));
    }
    public function Showing(){
        $Phim = DB::select('select movie.*,age_regulation.* from movie,age_regulation where movie.RegulationID = age_regulation.RegulationID and movie.IDStatus = 1');
        return view('client/home/showing',compact('Phim'));
    }
    public function Upcoming(){
        $Phim = DB::select('select movie.*,age_regulation.* from movie,age_regulation where movie.RegulationID = age_regulation.RegulationID and movie.IDStatus = 2');
        return view('client/home/upcoming',compact('Phim'));
    }
    public function DetailMovie($id){
        $PhimItem = DB::table('movie')->join('age_regulation','movie.RegulationID','=','age_regulation.RegulationID')
                        ->select('movie.*','age_regulation.*')
                        ->where('movie.MovieID',$id)
                        ->first();
        return view('client/home/detailmovie',['PhimItem' => $PhimItem]);
    }
    public function Search(Request $request){
        $keySearch = "%$request->key%";
        $Phim = DB::select('select movie.*,age_regulation.* from movie,age_regulation where movie.RegulationID = age_regulation.RegulationID and movie.Title like ?',[$keySearch]);
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
                        ->select('movie.*','age_regulation.Content')->distinct()
                        ->where('cinema.CinemaID',$idRap)
                        ->where('movie.IDStatus',$idStatus);
        return view('client/home/bookticketsPartial',compact('PhimTheoRap'));
    }
    //Login-Register
    public function Login(){
        return view('client/user/login');
    }
}
