<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PizzaSize extends Model
{
    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class, 'pizzas_pizza_sizes')->withPivot('pizza_size_price');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredients_pizza_sizes')->withPivot('ingredient_size_price');
    }
}
