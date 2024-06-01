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
    public $timestamps = true;
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';

    protected $fillable = [
        'Name',
        'Username',
        'Password',
        'BirthDay',
        'CCCD',
        'Email',
        'role_id',
        'google_id',
        'facebook_id',
        'Phone'
    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];
    public function role()
    {
        return self::belongsTo(Role::class, "role_id", "role_id");
    }
    public function getAuthPassword()
    {
        return $this->Password;
    }

    public function isAdmin()
    {
        return $this->role_id === 1;
    }

    public function isManager()
    {
        return $this->role_id === 2;
    }

    public function isStaff()
    {
        return $this->role_id === 3;
    }
}
