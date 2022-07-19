<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = ['city', 'price', 'street', 'is_rent', 'free_from', 'rooms', 'surface'];
}
