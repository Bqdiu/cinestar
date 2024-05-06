<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatusMovie;
class StatusMovieController extends Controller
{
    public function StatusMovieIndex()
    {
        $movie_status = StatusMovie::all();
        return view('admin.moviestatus.index',compact('movie_status'));
    }


}
