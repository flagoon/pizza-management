<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SideDishType extends Model
{
    protected $fillable = [
        'side_dish_name'
    ];
    public function side_dishes()
    {
        return $this->hasMany(SideDish::class);
    }
}
