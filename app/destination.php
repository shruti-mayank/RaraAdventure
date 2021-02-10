<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    protected $fillable = ['title', 'image', 'brief', 'description', 'duration', 'itinerary', 'price', 'priceinclude', 'banner','gallery','nav'];

     public function destination(){
    	return $this->hasMany('App\package');
    }
}

