<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PizzaSize extends Model
{
    // change primary key
    protected $primaryKey = 'size_name';

    // turn of incrementing
    public $incrementing = false;
    protected $fillable = [
        'size_name', 'size_value'
    ];

    public function pizzas()
    {
        return $this->belongsToMany('App\Pizza', 'pizzas_pizza_sizes')->withPivot('pizza_size_price');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'ingredients_pizza_sizes')->withPivot('ingredient_size_price');
    }
}
