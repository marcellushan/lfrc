<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = ['case_id', 'name','street','city','state','zip','income_range','create_date','referral','ina_date','close_date'];

    public function children()
    {
        return $this->hasMany('App\Child');
    }

    public function caregivers()
    {
        return $this->hasMany('App\Caregiver');
    }

//    public function abuses()
//    {
//        return $this->hasMany('App\Abuse');
//    }

    public function incomeSources()
    {
        return $this->belongsToMany('App\IncomeSource');
    }

    public function abuses()
    {
        return $this->belongsToMany('App\Abuse');
    }
}
