<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order-item-name', 'order-item-size', 'order-item-price', 'user-id'
    ];

    public function users()
    {
        return $this->belongsTo('App\User', 'user-id');
    }
}
