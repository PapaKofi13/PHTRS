<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pothole extends Model
{

    protected $fillable = [
        'location',
        'street',
        'district',
        'size',
        'urgency',
        'status',
        'user_email',
    ];
}
