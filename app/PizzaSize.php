<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaSize extends Model
{
    protected $fillable = [
        'size-name', 'size-cm', 'size-inch'
    ];
}
