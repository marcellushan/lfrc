<?php

namespace App\Http\Controllers;

use App\IncomeSource;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
//        dd($family->incomeSources);
        foreach ($family->incomeSources as $incomeSource) {
            echo $incomeSource->name;
        }

//        dd($income_sources);
//        return view('family.show')->with(compact('family'));
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
}
