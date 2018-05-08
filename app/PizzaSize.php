<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaSize extends Model
{
    protected $fillable = [
        'size-name', 'size-value'
    ];

    public function pizzas()
    {
        return $this->belongsToMany('App\Pizza', 'pizzas_pizza_sizes');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'ingredients_pizza_sizes');
    }
}
