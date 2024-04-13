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
    public function Search($key){
        return view('client/home/search');
    }

    //Login-Register
    public function Login(){
        return view('client/user/login');
    }
    public function Register(){
        return view('client/user/register');
    }
}
