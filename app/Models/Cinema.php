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
    protected $fillable = ['Name', 'Thumbnail', 'Address', 'TotalCinemaHalls', 'CityID'];

    public function city()
    {
        return self::belongsTo(City::class, 'CityID', 'CityID');
    }

    public static function getCinemaByID($id)
    {
        return self::select('*')
            ->where('cinemaID', $id)
            ->first();
    }
}
