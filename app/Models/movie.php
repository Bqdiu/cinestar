<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movie';
    protected $primaryKey = 'MovieID';
    public $timestamps = false;
    protected $fillable = ['Title','Thumbnail','Description','Duration','Language','ReleaseDate','Country','Genre','trailer_url','Director','Actor','RegulationID','IDStatus'];

    public static function getAllMovieWithAgeRegulation(){
        return self::with('regulation')->get();
    }
    public static function getMovie($id){
        return self::with('regulation')->find($id);
    }
    public static function searchMovie($name){
        return self::with('regulation')->where('Title','like',$name)->get();
    }

    public static function getMovieByCinema($idCinema,$idStatus){
        return self::join('age_regulation','movie.RegulationID','=','age_regulation.RegulationID')
        ->join('showinfor','movie.MovieID','=','showinfor.MovieID')
        ->join('cinema_hall','showinfor.CinemaHallID','=','cinema_hall.CinemaHallID')
        ->join('cinema','cinema_hall.CinemaID','=','cinema.CinemaID')
        ->select('movie.*','age_regulation.*')->distinct()
        ->where('cinema.CinemaID',$idCinema)
        ->where('movie.IDStatus',$idStatus)
        ->get();
    }
    public static function countMovieByCinema($idCinema,$idStatus){
        return self::join('age_regulation', 'movie.RegulationID', '=', 'age_regulation.RegulationID')
        ->join('showinfor', 'movie.MovieID', '=', 'showinfor.MovieID')
        ->join('cinema_hall', 'showinfor.CinemaHallID', '=', 'cinema_hall.CinemaHallID')
        ->join('cinema', 'cinema_hall.CinemaID', '=', 'cinema.CinemaID')
        ->select(self::raw('count(*) as count'))
        ->where('cinema.CinemaID', $idCinema)
        ->where('movie.IDStatus', $idStatus)
        ->first()
        ->count;
    }
}