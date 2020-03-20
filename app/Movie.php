<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'awards', 'release_date', 'length', 'genre_id', 'rating'];

    public function genre() 
    {
        return $this->belongsTo(Genre::class);
    }

    public function actor()
    {
        return $this->belongsToMany(Actor::class);
    }
}
