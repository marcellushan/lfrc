<?php

namespace App\Http\Controllers;

use App\Family;
use App\Referral;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;

class ReferralController extends Controller
{
   public function create($id)
   {
       $current_date = Carbon::now();
       $current_year = $current_date->year;
       $family = Family::find($id);
       return view('referral.create')->with(compact('family','current_year'));
   }

   public function store(Request $request)
   {
       $referral = new Referral();
       $referral->referral_date = implode("-", $request->referral_date);
       $referral->referral_type_id = $request->referral_type_id;
       $referral->family_id = $request->id;
       if($request->referral_type_id == 10)
           $referral->referral_other = $request->referral_other;
        $referral->save();
       dd($referral);
   }
}
