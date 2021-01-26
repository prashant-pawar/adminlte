<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stud extends Model
{
    protected $fillable = ['name','enrollment_no','roll_no','mobile','email','city'];
}
