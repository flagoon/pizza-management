<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
        'pizza-name', 'pizza-description'
    ];

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'ingredients_pizzas');
    }

    public function pizzaSizes()
    {
        return $this->belongsTomany('App\PizzaSize', 'pizzas_pizza_size')->withPivot('pizza_size_price');
    }
}
