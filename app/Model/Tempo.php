<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tempo extends Model
{
    public function gara()
    {
        return $this->belongsTo(Gara::class);
    }
}
