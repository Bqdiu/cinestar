<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    protected $table = 'cinema';
    protected $primaryKey = 'CinemaID';
    public $timestamps = false;
    protected $fillable = ['Name','Thumbnail','Address','TotalCinemaHalls'];

    public static function getCinemaByID($id){
        return self::select('*')
        ->where('cinemaID',$id)
        ->first();
    }
}
