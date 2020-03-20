<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    //Eloquent: Relationships (One To Many (Inverse)
    //public function season()
    //{
        //return $this->belongsTo('App\Season');
    //}

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}
