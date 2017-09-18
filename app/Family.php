<?php

namespace App;

use App\Http\Requests\Request;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = ['case_id', 'name','street','city','state','zip','income_range_id','full_time','part_time','ss','ssi',
        'child_support','food_stamps','tanf','family_members','retirement','income_source_other','income_source_other_text',
        'physical','emotional','sexual','neglect','high_risk','abuse_other','create_date','referral_id','ina_date','close_date'];

//    public function incomeSources()
//    {
//        return $this->belongsToMany('App\IncomeSource');
//    }

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

    public function referrals()
    {
        return $this->hasMany('App\Referral');
    }

    public function reabuses()
    {
        return $this->hasMany('App\Reabuse');
    }

//    public function abuses()
//    {
//        return $this->belongsToMany('App\Abuse');
//    }

//    public function referrals()
//    {
//        return $this->belongsToMany('App\Referral');
//    }

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
