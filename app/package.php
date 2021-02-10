<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $fillable = ['destination_id', 'title', 'image', 'brief', 'description', 'duration', 'itinerary', 'price', 'priceinclude'];

    public function package(){
    	return $this->belongsTo('App\destination');
    }
}

