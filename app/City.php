<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='city_models';
    protected $fillable=['city'];
    public $timestamps=false;
}
