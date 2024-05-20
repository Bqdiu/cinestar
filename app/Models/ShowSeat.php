<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowSeat extends Model
{
    use HasFactory;
    protected $table = 'show_seat';
    protected $primaryKey = 'ShowSeatID';
    public $timestamps = false;
    protected $fillable = ['Status', 'CinemaSeatID', 'ShowID', 'BookingID'];

    public function cinema_seat()
    {
        return self::belongsTo(CinemaSeat::class, "CinemaSeatID", "CinemaSeatID");
    }
    public function show_infor()
    {
        return self::belongsTo(Showinfor::class, "ShowID", "ShowID");
    }
    public function booking()
    {
        return self::belongsTo(Booking::class, "BookingID", "BookingID");
    }
}
