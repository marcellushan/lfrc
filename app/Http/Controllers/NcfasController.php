<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use App\Category;
use App\NcfasStatus;
use App\Phase;
use App\SubCategory;
use App\Score;
use App\Ncfas;

class NcfasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
//        $family_id = session('family_id');
        $family_id = $id;
        $family = Family::find($family_id);
        $phase_id = 1;
        $intakes = Category::get();
        foreach ($intakes as $intake) {
            $ncfas = NcfasStatus::where('category_id', '=', $intake->id)->where('family_id', '=', $family_id)->where('phase_id', '=', $phase_id)->first();
            if ($ncfas) {
                $intake->not_complete = 0;
            } else {
                $intake->not_complete = 1;
            }
        }

        $phase_id = 2;
        $interims = Category::get();
        foreach ($interims as $interim) {
            $ncfas = NcfasStatus::where('category_id', '=', $interim->id)->where('family_id', '=', $family_id)->where('phase_id', '=', $phase_id)->first();
            if ($ncfas) {
                $interim->not_complete = 0;
            } else {
                $interim->not_complete = 1;
            }
        }

        $phase_id = 3;
        $closures = Category::get();
        foreach ($closures as $closure) {
            $ncfas = NcfasStatus::where('category_id', '=', $closure->id)->where('family_id', '=', $family_id)->where('phase_id', '=', $phase_id)->first();
            if ($ncfas) {
                $closure->not_complete = 0;
            } else {
                $closure->not_complete = 1;
            }
        }

        return view('ncfas.index')->with(compact('intakes','interims','closures','family'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $category_id, $phase_id)
    {
        $family_id = $id;
        $family = Family::find($family_id);
        $category_id = $category_id;
        $phase_id = $phase_id;
        $category = Category::find($category_id);
        $phase = Phase::find($phase_id);
        $subCategories = SubCategory::where('category_id','=',  $category->id)->get();
        $scores = Score::get();
//       dd($subCategories);
        return view('ncfas.create')->with(compact('category','phase','subCategories','family','scores'));
//        dd($request);
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
        $family_id = $request->id;
        $submissions = $request->except('id','_token','category_id','phase_id','comments');
        foreach ($submissions as $key => $value) {
            $ncfas = new Ncfas();
            $ncfas->sub_category_id = $key;
            $ncfas->category_id = $request->category_id;
            $ncfas->phase_id = $request->phase_id;
            $ncfas->score_id = $value;
            $ncfas->family_id = $family_id;
//            echo $key;
            $ncfas->save();
        }
        $ncfasStatus = new NcfasStatus();
        $ncfasStatus->category_id = $request->category_id;
        $ncfasStatus->phase_id = $request->phase_id;
        $ncfasStatus->family_id = $family_id;
        $ncfasStatus->comments = $request->comments;
        $ncfasStatus->save();
        return redirect('ncfas/' . $family_id);
//        dd($submissions);
    }

}
