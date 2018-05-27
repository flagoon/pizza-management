<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SideDishType extends Model
{
    public function SideDish()
    {
        return $this->belongsTo($this->SideDish());
    }
}
