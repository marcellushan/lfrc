<?php

namespace App\Http\Controllers;

use App\IncomeSource;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use App\Abuse;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $families = Family::orderBy('name')->get();
        return view('family.index')->with(compact('families'));
        dd($families);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('family.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->except('income_source','abuse');
        $family = new Family();
        $family->fill($data);
        $family->save();
        $income_sources = $request->income_source;
        foreach ($income_sources as $income_source) {
            $family->incomeSources()->attach($income_source);
        }
        $abuses = $request->abuse;
        foreach ($abuses as $abuse) {
            $family->abuses()->attach($abuse);
        }

        return redirect('family/' . $family->id);
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
//        dd($reabuses->abuse);
//        foreach ($reabuses as $reabuse) {
//            dd($reabuse->abuse);
//
//        }
        return view('family.show')->with(compact('family','incomeSources','incomeRange','caregivers',
            'children','caregivers','referral','abuses','all_abuses','reabuses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
//        dd($ncfases->phase);
//        foreach ($ncfases as $ncfas)
//            dd($ncfas->subCategory);
        return view('family.view_all')->with(compact('family','incomeSources','incomeRange','caregivers',
            'children','caregivers','referral','abuses','all_abuses','reabuses','ncfases'));
    }
}
