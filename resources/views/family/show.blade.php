@extends('layouts.app') @section('content')
<div class="well">
    <div class="row">
        <h2 class="col-md-6">Family Name: <span class="not_bold">{{$family->name}}</span></h2>
        <h2 class="col-md-6">Case Number: <span class="not_bold">{{$family->case_id}}</span></h2>
    </div>
    <div class="row">
        <h4 class="col-md-5">Street Address: <span class="not_bold">{{$family->street }}</span></h4>
        <h4 class="col-md-3">City: <span class="not_bold">{{$family->city }}</span></h4>
        <h4 class="col-md-2">State: <span class="not_bold">{{$family->state }}</span></h4>
        <h4 class="col-md-2">Zip: <span class="not_bold">{{$family->zip }}</span></h4>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <h4 class="col-md-12">Income Sources:</h4>
            </div>
            <? foreach ($income_sources as $income_source) {?>
            <div class="row">
                <h4 class="col-md-12"><span class="not_bold"><?=$income_source->name ?></span></h4>
            </div>
            <? } ?>
        </div>

@endsection