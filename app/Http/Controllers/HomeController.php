<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function Index(){
        $Phim = DB::select('select movie.*,age_regulation.* from movie,age_regulation where movie.RegulationID = age_regulation.RegulationID');
        $Status = DB::select('select * from status_movie');
        return view('client/home/index',compact('Status','Phim'));
    }
    public function DetailProduct($id){
        $PhimItem = DB::table('movie')->join('age_regulation','movie.RegulationID','=','age_regulation.RegulationID')
                        ->select('movie.*','age_regulation.*')
                        ->where('movie.MovieID',$id)
                        ->first();
        return view('client/home/detailproduct',['PhimItem' => $PhimItem]);
    }
    public function Login(){
        return view('client/user/login');
    }
    public function Register(){
        return view('client/user/register');
    }
}
