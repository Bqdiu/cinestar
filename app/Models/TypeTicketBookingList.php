<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTicketBookingList extends Model
{
    use HasFactory;
    protected $table = 'type_ticket_booking_list';
    protected $primaryKey = 'TypeTicketBookingID';
    public $timestamps = false;
    protected $fillable = ['TicketID', 'Quantity', 'BookingID'];
    public function ticket_price()
    {
        return self::belongsTo(TicketPrice::class, "TicketID", "TicketID");
    }
    public function booking()
    {
        return self::belongsTo(Booking::class, "BookingID", "BookingID");
    }
}
