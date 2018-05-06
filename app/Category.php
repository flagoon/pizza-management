<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category-name', 'category-icon', 'category-description'
    ];

    public function pizzas()
    {
        return $this->belongsToMany('App\Pizza', 'categories_pizzas');
    }
}
