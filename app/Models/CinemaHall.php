<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaHall extends Model
{
    use HasFactory;
    protected $table = 'cinema_hall';
    protected $primaryKey = 'CinemaHallID';
    public $timestamps = false;
    protected $fillable = ['Name', 'TotalSeats', 'CinemaID'];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class, 'CinemaID', 'CinemaID');
    }
}
