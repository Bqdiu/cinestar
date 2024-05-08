<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMovie extends Model
{
    use HasFactory;
    protected $table = 'status_movie';
    protected $primaryKey = 'IDStatus';
    public $timestamps = false;
    protected $fillable = ['StatusName'];

    public function movie(){
        return $this->hasMany(Movie::class,'IDStatus','IDStatus');
    }   

    public static function getAllStatusMovie(){
        return self::all();
    }
    public static function getStatusByID($idStatus){
        return self::select('*')
        ->where('IDStatus',$idStatus)
        ->first();
    }
}