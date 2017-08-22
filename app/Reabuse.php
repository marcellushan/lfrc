<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reabuse extends Model
{
    protected $fillable = ['date', 'outcome_id','notes','abuse_id','family_id'];

    public function Abuse()
    {
        return $this->belongsTo('App\Abuse');
    }
}
