<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gara extends Model
{
    public function tempi()
    {
        return $this->hasMany(Tempo::class);
    }
}
