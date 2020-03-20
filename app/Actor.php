<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Actor extends Model
{
    public function episodes()
    {
        return $this->belongsToMany(Episode::class);
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

    public function favorite_movie()
    {
        return $this->belongsTo(Movie::class, 'favorite_movie_id');
    }
}
