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

    public function regulation(){
        return $this->belongsTo(Regulation::class,"RegulationID","RegulationID");
    }
    public static function getAllMovieWithAgeRegulation(){
        return self::with('regulation')->get();
    }
    public static function getMovie($id){
        return self::with('regulation')->find($id);
    }
    public static function searchMovie($name){
        return self::with('regulation')->where('Title','like',$name)->get();
    }
}