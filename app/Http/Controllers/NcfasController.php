<?php

namespace App\Http\Controllers;

use App\Ncfas;
use App\Score;
use App\SubCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class NcfasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('ncfas.index')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $family_id = session('family_id');
        $submissions = $request->except('_token','category','phase');
        foreach ($submissions as $key => $value) {
            $ncfas = new Ncfas();
            $ncfas->sub_category = $key;
//            $ncfas->category = $request->category;
            $ncfas->phase = $request->phase;
            $ncfas->score = $value;
            $ncfas->family_id = $family_id;

            $ncfas->save();
        }

            echo $value;
        dd($submissions);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function newNcfas(Request $request)
    {
       $category = Category::find($request->category);
       $phase_id = $request->phase;
       $phase = (($request->phase == '1') ? 'Intake' : (($request->phase == '2') ? 'Interim' : 'Closure'));
       $subCategories = SubCategory::where('category_id','=',  $category->id)->get();
       $scores = Score::get();
//       dd($subCategories);
        return view('ncfas.create')->with(compact('category','phase','phase_id','subCategories','scores'));
        dd($request);
    }
}
