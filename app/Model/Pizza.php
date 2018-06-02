<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredients_pizzas');
    }
}
