<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    //Eloquent: Relationships (One To Many (Inverse)
    public function season()
    {
        return $this->belongsTo('App\Season');
    }
}
