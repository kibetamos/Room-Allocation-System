<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    //
    protected $fillable = [
'department',
'staff' ,
'start' ,
'end',
'purpose'
    ];

    public function room() {
        return $this->belongsTo('App\Models\Room');
    }
}
