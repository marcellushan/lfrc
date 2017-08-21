<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = ['name','birth_date','gender_id','race_id','family_id'];

        public function race()
    {
        return $this->belongsTo('App\Race');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender');
    }
}
