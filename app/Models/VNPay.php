<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VNPay extends Model
{
    use HasFactory;
    protected $table = 'vnpay';
    protected $primaryKey = 'VNPPaymentID';
    public $timestamps = false;
    protected $fillable = [
        'vnp_BankCode', 'vnp_BankTranNo', 'vnp_CardType', 'vnp_OrderInfo', 'vnp_PayDate', 'vnp_ResponseCode', 'vnp_TmnCode', 'vnp_TransactionNo', 'vnp_TransactionStatus', 'vnp_TxnRef', 'vnp_SecureHash', 'BookingID'
    ];
    public function booking()
    {
        return self::belongsTo(Booking::class, 'BookingID', 'BookingID');
    }
}
