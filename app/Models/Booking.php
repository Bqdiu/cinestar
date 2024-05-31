<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $primaryKey = 'BookingID';
    public $timestamps = false;
    protected $fillable = ['NumberOfSeats', 'Status', 'UserID', 'ShowID', 'FullName', 'PhoneNumber', 'Email', 'TotalPrice', 'createdAt', 'updatedAt', 'PaymentID'];

    public function userinfor()
    {
        return self::belongsTo(UserInfor::class, "UserID", "UserID");
    }
    public function showinfor()
    {
        return self::belongsTo(Showinfor::class, "ShowID", "ShowID");
    }
    public function payment_method()
    {
        return self::belongsTo(PaymentMethod::class, "PaymentID", "PaymentID");
    }
}
