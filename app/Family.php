<?php

namespace App;

use App\Http\Requests\Request;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = ['case_id', 'name','street','city','state','zip','income_range_id','create_date','referral_id','ina_date','close_date'];

    public function incomeSources()
    {
        return $this->belongsToMany('App\IncomeSource');
    }

    public function incomeRange()
    {
        return $this->belongsTo('App\IncomeRange');
    }

    public function caregivers()
    {
        return $this->hasMany('App\Caregiver');
    }

    public function children()
    {
        return $this->hasMany('App\Child');
    }

    public function referral()
    {
        return $this->belongsTo('App\Referral');
    }

    public function reabuses()
    {
        return $this->hasMany('App\Reabuse');
    }

    public function abuses()
    {
        return $this->belongsToMany('App\Abuse');
    }

    public function preAapi()
    {
        return $this->hasOne('App\PreAapi');
    }

    public function postAapi()
    {
        return $this->hasOne('App\PostAapi');
    }

    public function ncfases()
    {
        return $this->hasMany('App\Ncfas');
    }

    public function closeReasons()
    {
        return $this->belongsToMany('App\CloseReason');
    }

}
