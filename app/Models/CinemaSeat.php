<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemaSeat extends Model
{
    use HasFactory;
    protected $table = 'cinema_seat';
    protected $primaryKey = 'CinemaSeatID';
    public $timestamps = false;
    protected $fillable = ['RowPosition', 'ColumnPosition', 'SeatTypeID', 'CinemaHallID'];
    public function typeOfSeat()
    {
        return self::belongsTo(SeatType::class, "SeatTypeID", "SeatTypeID");
    }
    public function cinemaHall()
    {
        return self::belongsTo(CinemaHall::class, "CinemaHallID", "CinemaHallID");
    }
}
