<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use App\Category;
use App\SubCategory;
use App\NcfasStatus;
use App\Phase;
use App\Score;
use App\Ncfas;

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

    public function complete(Request $request)
    {
//        $family_id = session('family_id');
        $family_id = $request->id;
//        dd($family_id);
        $phase_id = $request->phase_id;
        $family = Family::find($family_id);
//        $category_id = $request->id;
//        $phase_id = $request->id;
//         $category = Category::find($category_id);
//        $phase = Phase::find($phase_id);
//        $subCategories = SubCategory::where('category_id','=',  $category->id)->get();
        $environments = Ncfas::where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)
            ->where('category_id', '=', 1)->get();
        $parentalCapabilities = Ncfas::where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)
            ->where('category_id', '=', 2)->get();
        $familyInteractions = Ncfas::where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)
            ->where('category_id', '=', 3)->get();
        $familySafeties = Ncfas::where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)
            ->where('category_id', '=', 4)->get();
        $childWellBeings = Ncfas::where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)
            ->where('category_id', '=', 5)->get();
        $socialCommunityLives = Ncfas::where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)
            ->where('category_id', '=', 6)->get();
        $selfSufficiencies = Ncfas::where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)
            ->where('category_id', '=', 7)->get();
        $familyHealths = Ncfas::where('family_id', '=', $family->id)->where('phase_id', '=', $phase_id)
            ->where('category_id', '=', 8)->get();
//        $scores = Score::get();
//       dd($familyHealths);
//        foreach ($ncfases as $ncfas) {
//           echo '<pre>';
//            print_r($ncfas->category);
//            echo '</pre>';
//        }

//       }
        return view('ncfas.complete')->with(compact('family','environments','parentalCapabilities','familyInteractions','familySafeties',
            'childWellBeings','socialCommunityLives','selfSufficiencies','familyHealths'));
//        dd($request);
    }

}
