<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin';
    protected $primaryKey = 'username';
    public $timestamps = false;
    protected $fillable = ['username','password'];

    public function getAuthPassword()
    {
        return $this->password;
    }
}