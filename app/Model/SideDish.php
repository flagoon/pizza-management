<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SideDish extends Model
{
    protected $fillable = [
        'side_dish_name', 'side_dish_type_id', 'side_dish_volume', 'side_dish_description', 'side_dish_price'
    ];

    public function sideDishType()
    {
        return $this->belongsTo(SideDishType::class);
    }
}
