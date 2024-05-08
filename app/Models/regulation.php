<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;
    protected $table = 'age_regulation';
    protected $primaryKey = 'RegulationID';
    public $timestamps = false;
    protected $fillable = ['AgeRegulationName','Content','Object'];

    public function movie()
    {
        return $this->hasMany(Movie::class,'RegulationID','RegulationID');
    }
    
}