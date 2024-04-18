<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfor extends Model
{
    use HasFactory;
    protected $table = 'userinfor';
    protected $primaryKey = 'UserID ';
    public $timestamps = true;
    protected $fillable = ['UserID', 'Name', 'BirthDay', 'Username', 'CCCD', 'Password', 'Email', 'Phone']; 
}
