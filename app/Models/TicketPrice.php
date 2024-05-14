<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPrice extends Model
{
    use HasFactory;
    protected $table = 'ticket_price';
    protected $primaryKey = 'TicketID';
    public $timestamps = false;
    protected $fillable = ['TicketName', 'TicketPrice', 'SeatTypeID'];
    public function typeOfSeat()
    {
        return self::belongsTo(SeatType::class, "SeatTypeID", "SeatTypeID");
    }
}
