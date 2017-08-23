<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ncfas extends Model
{
    protected $fillable = ['sub_category_id','phase_id','score_id','family_id'];

    public function phase()
    {
        return $this->belongsTo('App\Phase');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function subCategory()
    {
        return $this->belongsTo('App\subCategory');
    }

    public function score()
    {
        return $this->belongsTo('App\Score');
    }
}
