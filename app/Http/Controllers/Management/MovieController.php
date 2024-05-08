<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\StatusMovie;
use App\Models\Regulation;
class MovieController extends Controller
{
    public function MovieIndex()
    {
        $movie = Movie::all();
        return view('admin.movie.index',compact('movie'));
    }

    public function getMovie($MovieID)
    {
        $movie = Movie::select('*')->leftJoin('status_movie','status_movie.IDStatus','=','movie.IDStatus')
                                    ->leftJoin('age_regulation','age_regulation.RegulationID','=','movie.RegulationID')
                                    ->where('movie.MovieID','=',$MovieID)->first();
        $movie_status = StatusMovie::all();
        $age_regulation = Regulation::all();
        return response()->json([$movie, $age_regulation, $movie_status]);
    }

    public function editMovie(Request $request)
    {
        // try{
        //     $movie = Movie::find($request->MovieID);
        // }catch(\Illuminate\Database\QueryException $e)
        // {

        // }
    }
}
