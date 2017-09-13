<?php

namespace App\Http\Controllers;

use App\IncomeSource;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
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
        return view('family.index')->with(compact('families'));
        //test
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::get();
        $current_date = Carbon::now();
        $current_year = $current_date->year;
        return view('family.create')->with(compact('states','current_year'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->except('income_source','abuse','ina_date','referral_id');
//        dd($request->ina_date);
        $family = new Family();
        $family->fill($data);
        $family->ina_date = implode("-", $request->ina_date);
//        dd($family);
        $family->save();
        $income_sources = $request->income_source;
        foreach ($income_sources as $income_source) {
            $family->incomeSources()->attach($income_source);
        }
        $abuses = $request->abuse;
        foreach ($abuses as $abuse) {
            $family->abuses()->attach($abuse);
        }

        return redirect('family/question/' . $family->id);
//        dd($request->income_source);
//        $family->save();

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
        $all_abuses = Abuse::get();
        $incomeSources = $family->incomeSources;
        $incomeRange = $family->incomeRange;
        $caregivers = $family->caregivers;
        $children = $family->children;
        $referral = $family->referral;
        $abuses = $family->abuses;
        $reabuses = $family->reabuses;
        $closeReasons = $family->closeReasons;
//        dd($reabuses);
        return view('family.show')->with(compact('family','incomeSources','incomeRange','caregivers',
            'children','caregivers','referral','abuses','all_abuses','reabuses','closeReasons','current_year'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $current_date = Carbon::now();
        $current_year = $current_date->year;
        $family = Family::find($id);
        $family->year = substr($family->ina_date, 0,4);
        $family->month = substr($family->ina_date, 5,2);
        $family->day = substr($family->ina_date, 8,2);
//        dd($family->incomeSources);
        return view('family.edit')->with(compact('family'));
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
        $referral = $family->referral;
        $abuses = $family->abuses;
        $reabuses = $family->reabuses;
        $ncfases = $family->ncfases;
        $preAapi = $family->preAapi;
        $postAapi = $family->postAapi;
//        dd($reabuses);
//        foreach ($ncfases as $ncfas)
//            dd($ncfas->subCategory);
        return view('family.view_all')->with(compact('family','incomeSources','incomeRange','caregivers',
            'children','caregivers','referral','abuses','all_abuses','reabuses','preAapi','postAapi','ncfases'));
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
        $closeReasons = $request->close_reasons;
        $family = Family::find($family_id);
        $family->visits = $request->visits;
        $family->closed_notes = $request->closed_notes;
        $family->close_date = implode("-", $request->close_date);
        $family->closed = 1;
        $family->save();
        foreach ($closeReasons as $closeReason) {
            $family->closeReasons()->attach($closeReason);
        }
//        $family->fill($data);

//        dd($closeReasons);
        return redirect('family/'. $family_id);
    }

    public function printFamily($id)
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
//        dd($reabuses);
//        foreach ($ncfases as $ncfas)
//            dd($ncfas->subCategory);
        return view('family.print')->with(compact('family','incomeSources','incomeRange','caregivers',
            'children','caregivers','referral','abuses','all_abuses','reabuses','preAapi','postAapi','ncfases'));
    }
}
