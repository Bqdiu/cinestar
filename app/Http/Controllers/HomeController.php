<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function Index(){
        $Phim = DB::select('select * from movie');
        $Status = DB::select('select * from status_movie');
        return view('client/home/index',compact('Status','Phim'));
    }
    public function DetailProduct($id){
        $PhimItem = DB::select('select * from movie where MovieID = ?',[$id]);
        return view('client/home/detailproduct',compact('PhimItem'));
    }
    public function Login(){
        return view('client/user/login');
    }
    public function Register(){
        return view('client/user/register');
    }
}
