<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order-item-name', 'order-item-size', 'order-item-price', 'user-id'
    ];
}
