<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SideDishType extends Model
{
    protected $fillable = [
        'side_dish_type'
    ];
    public function SideDishes()
    {
        return $this->belongsTo(SideDish::class);
    }
}
