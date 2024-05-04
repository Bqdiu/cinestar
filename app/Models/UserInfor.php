<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserInfor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'userinfor';
    protected $primaryKey = 'UserID';
    public $timestamps = false;

    protected $fillable = [
        'UserID',
        'Name',
        'Username',
        'Password',
        'BirthDay',
        'CCCD',
        'Email',
        'Phone'
    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->Password;
    }
}