<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Room extends Model
{
    //
   
    protected $fillable = [

    'name',
    'description',
    'type',
    'capacity'
       
    ];
     public function room() {
        return $this->belongsTo('App\Models\Reservation');
    }
}
