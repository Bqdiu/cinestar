<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Showinfor;
use Illuminate\Http\Request;

class ShowInforController extends Controller
{
    public function ShowInforIndex()
    {
        $show_infor = Showinfor::select('*')->leftJoin('cinema_hall','cinema_hall.CinemaHallID','=','showinfor.CinemaHallID')
                        ->leftJoin('movie','movie.MovieID','=','showinfor.MovieID')->get();
        return view('admin.showinfor.index',compact('show_infor'));
    }
}
