<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Momo extends Model
{
    use HasFactory;
    protected $table = 'momo';
    protected $primaryKey = 'MomoPaymentID';
    public $timestamps = false;
    protected $fillable = ['partnerCode', 'orderId', 'requestId', 'orderInfo', 'orderType', 'transId', 'resultCode', 'message', 'payType', 'responseTime', 'extraData', 'signature', 'paymentOption', 'BookingID'];
    public function booking()
    {
        return self::belongsTo(Booking::class, 'BookingID', 'BookingID');
    }
}
