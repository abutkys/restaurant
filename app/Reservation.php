<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name','lastname','email','people_number','phone_number','date','time','message'];
}
