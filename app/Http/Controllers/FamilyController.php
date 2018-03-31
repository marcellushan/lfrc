<?php

namespace App\Http\Controllers;

use App\IncomeSource;
use App\Referral;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Family;
use App\ParentAide;
use App\Abuse;
use App\State;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $families = Family::orderBy('name')->paginate(30);
        $list_families =Family::orderBy('name')->get();
        $case_ids =Family::orderBy('case_id')->get();
//        foreach ($families as $family)
//        dd($family->name);
        return view('family.index')->with(compact('families','list_families','case_ids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_aides = ParentAide::get();
        $states = State::get();
        $current_date = Carbon::now();
        $current_year = $current_date->year;
        return view('family.create')->with(compact('parent_aides','states','current_year'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->except('income_source','abuse','ina_date','referral_id','referral_date');
        $family = new Family();
        $family->fill($data);
        $family->ina_date = implode("-", $request->ina_date);
        $family->save();
        $referral = new Referral();
        $referral->referral_type_id = $request->referral_type_id;
        $referral->referral_date = implode("-", $request->referral_date);
        $referral->family_id = $family->id;
        $referral->save();
        return redirect('family/question/' . $family->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $current_date = Carbon::now();
        $current_year = $current_date->year;
        $family = Family::find($id);
        $referrals = Referral::where('family_id', '=', $family->id)->get();
        $all_abuses = Abuse::get();
//        $incomeSources = $family->incomeSources;
        $incomeRange = $family->incomeRange;
        $caregivers = $family->caregivers;
        $children = $family->children;
//        $referral = $family->referral;
//        $abuses = $family->abuses;
        $reabuses = $family->reabuses;
        $closeReasons = $family->closeReasons;
//        dd($referrals);
        return view('family.show')->with(compact('family','incomeRange','caregivers',
            'children','caregivers','referrals','all_abuses','reabuses','closeReasons','current_year'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent_aides = ParentAide::get();
        $current_date = Carbon::now();
        $current_year = $current_date->year;
        $family = Family::find($id);
        $referrals = $family->referrals;
//        dd($referral);
        $family->year = substr($family->ina_date, 0,4);
        $family->month = substr($family->ina_date, 5,2);
        $family->day = substr($family->ina_date, 8,2);
//        dd($family->incomeSources);
        return view('family.edit')->with(compact('parent_aides','family','referrals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $family = Family::find($id);
       $data = $request->except('_token','_method');
       $family->fill($data);
       $family->save();
//       dd($family);
       return redirect('family/' . $family->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Family::destroy($id);
//        dd($deleted);
        return redirect('family');
    }

    public function viewAll($id)
    {
        $family = Family::find($id);
        $all_abuses = Abuse::get();
        session(['family_id' => $id]);
        $incomeSources = $family->incomeSources;
        $incomeRange = $family->incomeRange;
        $caregivers = $family->caregivers;
        $children = $family->children;
        $referrals = $family->referrals;
        $abuses = $family->abuses;
        $reabuses = $family->reabuses;
        $ncfases = $family->ncfases;
        $preAapi = $family->preAapi;
        $postAapi = $family->postAapi;
//        dd($reabuses);
//        foreach ($ncfases as $ncfas)
//            dd($ncfas->subCategory);
        return view('family.view_all')->with(compact('family','incomeSources','incomeRange','caregivers',
            'children','caregivers','referrals','abuses','all_abuses','reabuses','preAapi','postAapi','ncfases'));
    }

    public function delete($id)
    {
        $family = Family::find($id);
        $all_abuses = Abuse::get();
        session(['family_id' => $id]);
        $incomeSources = $family->incomeSources;
        $incomeRange = $family->incomeRange;
        $caregivers = $family->caregivers;
        $children = $family->children;
        $referral = $family->referral;
        $abuses = $family->abuses;
        $reabuses = $family->reabuses;
        $ncfases = $family->ncfases;
        $preAapi = $family->preAapi;
        $postAapi = $family->postAapi;
//        dd($postAapi);
//        foreach ($ncfases as $ncfas)
//            dd($ncfas->subCategory);
        return view('family.delete')->with(compact('family','incomeSources','incomeRange','caregivers',
            'children','caregivers','referral','abuses','all_abuses','reabuses','preAapi','postAapi','ncfases'));
    }

    public function question($id)
    {
        $family_id = $id;
        $family = Family::find($id);
        return view('family.question')->with(compact('family'));
    }

    public function close(Request $request)
    {
        $family_id = $request->id;
//        $closeReasons = $request->close_reasons;
        $family = Family::find($family_id);
        $data = $request->except('id','_token','close_date');
//        dd($data);
        $family->fill($data);
//        $family->closed_notes = $request->closed_notes;
        $family->close_date = implode("-", $request->close_date);
        $family->closed = 1;
//        dd($family);
        $family->save();
//        foreach ($closeReasons as $closeReason) {
//            $family->closeReasons()->attach($closeReason);
//        }
//        $family->fill($data);

//        dd($closeReasons);
        return redirect('family/'. $family_id);
    }

    public function printFamily($id)
    {
        $family = Family::find($id);
        $all_abuses = Abuse::get();
        session(['family_id' => $id]);
//        $incomeSources = $family->incomeSources;
        $incomeRange = $family->incomeRange;
        $caregivers = $family->caregivers;
        $children = $family->children;
        $referrals = $family->referrals;
        $abuses = $family->abuses;
        $reabuses = $family->reabuses;
        $ncfases = $family->ncfases;
        $preAapi = $family->preAapi;
        $postAapi = $family->postAapi;
//        dd($reabuses);
//        foreach ($ncfases as $ncfas)
//            dd($ncfas->subCategory);
        return view('family.print')->with(compact('family','incomeSources','incomeRange','caregivers',
            'children','caregivers','referrals','abuses','all_abuses','reabuses','preAapi','postAapi','ncfases'));
    }
}
