<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'ingredient-name', 'ingredient-description'
    ];

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class, 'ingredients_pizzas');
    }

    public function pizzaSizes()
    {
        return $this->belongsToMany(PizzaSize::class, 'ingredients_pizza_sizes')->withPivot('ingredient_size_price');
    }
}
