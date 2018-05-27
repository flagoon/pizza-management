<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SideDish extends Model
{
    public function sideDishType()
    {
        return $this->belongsTo(SideDishType::class);
    }
}
