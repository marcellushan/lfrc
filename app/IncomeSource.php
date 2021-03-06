<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeSource extends Model
{
    public function families()
    {
        return $this->belongsToMany('App\Family');
    }
}
