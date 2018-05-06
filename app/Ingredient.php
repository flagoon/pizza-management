<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'ingredient-name', 'ingredient-description'
    ];

    public function pizzas()
    {
        return $this->belongsToMany('App\Pizza', 'ingredients_pizzas');
    }

    public function pizzaSizes()
    {
        return $this->belongsToMany('App\PizzaSize', 'ingredients_pizza_sizes');
    }
}
