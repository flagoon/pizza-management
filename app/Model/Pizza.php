<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // Builds relation with ingredients model
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredients_pizzas');
    }

    // Build relation with category model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
