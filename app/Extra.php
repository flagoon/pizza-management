<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $fillable = [
        'extra-name', 'extra-description', 'extra-price'
    ];
}
