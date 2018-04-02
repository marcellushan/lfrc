<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Family;
use App\ParentAide;
use App\Abuse;
use App\Reabuse;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $parent_aides = ParentAide::get();
        $abuses = Abuse::get();
        $reabuses = Reabuse::get();
        $current_date = Carbon::now();
        $current_year = $current_date->year;
        $firstDayofMonth = Carbon::now()->startOfMonth()->toDateString();
        $lastDayofMonth = Carbon::now()->endOfMonth()->toDateString();
        $created_total = Family::count();
        $open_total = Family::whereNull('closed')->count();
        $closed_total = Family::where('closed','=', true)->count();
        $created_this_year = Family::where('created_at', '>', $current_year . '-01-01')->where('created_at', '<', $current_year . '-12-31')->count();
        $open_this_year = Family::whereNull('closed')->where('created_at', '>', $current_year . '-01-01')->where('created_at', '<', $current_year . '-12-31')->count();
        $closed_this_year = Family::where('closed','=', true)->where('created_at', '>', $current_year . '-01-01')->where('created_at', '<', $current_year . '-12-31')->count();
        $created_this_month = Family::where('created_at', '>', $firstDayofMonth)->where('created_at', '<', $lastDayofMonth)->count();
        $open_this_month = Family::whereNull('closed')->where('created_at', '>', $firstDayofMonth)->where('created_at', '<', $lastDayofMonth)->count();
        $closed_this_month = Family::where('closed','=', true)->where('created_at', '>', $firstDayofMonth)->where('created_at', '<', $lastDayofMonth)->count();

//        dd($request);
        return view('report.index')->with(compact('abuses','reabuses','current_year','created_total','open_total','closed_total','created_this_year',
        'open_this_year','closed_this_year','created_this_month','open_this_month','closed_this_month','parent_aides'));
    }

    public function show(Request $request)
    {
//        dd($request);
//        $lastname = $request->parent_aide_id;
        $closed = 0;
        $open = 0;
        $parent_aide_id=0;
        $abuse = "";

        ($request->status==2 ? $closed = 1 : ($request->status==1 ? $open = 1 : ""));
//        ($request->start_date ? $start_date = implode("-", $request->start_date):"2000-01-01");
        $start_date = implode("-", $request->start_date);
        ($start_date == '--' ? $start_date = '2000-01-01' :"");
        $end_date = implode("-", $request->end_date);
        ($end_date == '--' ? $end_date = '2100-01-01' :"");
        ($request->abuse ? $abuse = $request->abuse : $abuse = "");
//dd($request);

        if($request->parent_aide_id)
        {
            $parent_aide_id = $request->parent_aide_id;
            $parent_aide = ParentAide::find($parent_aide_id);
        }
        $families = DB::table('families')
            ->join('parent_aides', 'families.parent_aide_id', '=', 'parent_aides.id')
            ->select('families.*', 'parent_aides.last_name','parent_aides.first_name')
            ->when($start_date, function ($query) use ($start_date) {
                    return $query->where('families.created_at','>', $start_date);
                })
            ->when($end_date, function ($query) use ($end_date) {
                return $query->where('families.created_at','<', $end_date);
                })
            ->when($closed, function ($query) use ($closed) {
                return $query->where('closed','=', $closed);
            })
            ->when($open, function ($query) use ($open) {
                return $query->whereNull('closed');
            })
            ->when($parent_aide_id, function ($query) use ($parent_aide_id) {
                return $query->where('parent_aide_id','=', $parent_aide_id);
            })
            ->when($abuse, function ($query) use ($abuse) {
                return $query->where($abuse,'=', 1);
            })
//            ->where('closed','=', 1)
//            ->orderBy('created_at')
        ->get();
//        $sql = $families->getSqlQuery();
//        dd($families);
        return view('report.show')->with(compact('families','parent_aide'));

    }

    public function familyList()
    {
        $families = Family::orderBy('name')->get();
        $parent_aide = Family::find(4)->parentAide;
        foreach ($families as $family) {
            dd($family);
        }
        dd($families);

    }
}
