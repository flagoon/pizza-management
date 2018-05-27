<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SideDish extends Model
{
    public function SideDishTypes()
    {
        return $this->hasOne(SideDishType::class);
    }
}
