<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mainnews extends Model
{
    protected $fillable = ['id', 'title', 'description', 'image', 'sec-img','editor'];
}
