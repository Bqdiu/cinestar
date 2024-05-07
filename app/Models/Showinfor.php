<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showinfor extends Model
{
    use HasFactory;
    protected $table = 'showinfor';
    protected $primaryKey = 'ShowID';
    public $timestamps = false;
    protected $fillable = ['ShowDate','StartTime','EndTime','CinemaHallID','MovieID'];

    public function cinemahall(){
        return $this->belongsTo(CinemaHall::class,'CinemaHallID','CinemaHallID');
    }
    public function movie(){
        return $this->belongsTo(Movie::class,'MovieID','MovieID');
    }
    public static function getDateOFShow($cinemaID,$movieID){
        $date = '2024-5-6';
        $nextDate = date('Y-m-d', strtotime($date . ' +1 day'));
        return self::with('cinemahall')
        ->where(function ($query) use ($date,$nextDate){
            $query->where('ShowDate',$date)
            ->orWhere('ShowDate',$nextDate);
        })
        ->whereHas('cinemahall', function ($query) use ($cinemaID) {
            $query->where('CinemaID', $cinemaID);
        })
        ->where('MovieID',$movieID)
        ->select('ShowDate')->distinct()
        ->get();
    }
    public static function getStartTimeOFShow($cinemaID,$date,$movieID){
        $nextDate = date('Y-m-d', strtotime($date . ' +1 day'));
        return self::with(['cinemahall','movie'])
        ->where("ShowDate",$date)
        ->whereHas('cinemahall',function ($query) use ($cinemaID){
            $query->where('CinemaID',$cinemaID);
        })
        ->where('MovieID',$movieID)
        ->orderBy('StartTime', 'asc')
        ->get();
    } 
}
