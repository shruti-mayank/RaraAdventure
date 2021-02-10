<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['name','email','destination','number','phone','message'];
}
