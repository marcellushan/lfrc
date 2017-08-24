<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use App\Category;
use App\NcfasStatus;

class DataController extends Controller
{
    public function ncfas($id)
    {
//        $family_id = session('family_id');
        $family = Family::find($id);
        $phase_id = 1;
        $intakes = Category::get();
        foreach ($intakes as $intake) {
            $ncfas = NcfasStatus::where('category_id', '=', $intake->id)->where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)->first();
            if ($ncfas) {
                $intake->not_complete = 0;
            } else {
                $intake->not_complete = 1;
            }
        }

        $phase_id = 2;
        $interims = Category::get();
        foreach ($interims as $interim) {
            $ncfas = NcfasStatus::where('category_id', '=', $interim->id)->where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)->first();
            if ($ncfas) {
                $interim->not_complete = 0;
            } else {
                $interim->not_complete = 1;
            }
        }

        $phase_id = 3;
        $closures = Category::get();
        foreach ($closures as $closure) {
            $ncfas = NcfasStatus::where('category_id', '=', $closure->id)->where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)->first();
            if ($ncfas) {
                $closure->not_complete = 0;
            } else {
                $closure->not_complete = 1;
            }
        }
//        dd($intakes);
        return view('ncfas.list')->with(compact('intakes','interims','closures','family'));
    }
}
