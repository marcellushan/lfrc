@extends('layouts.app') @section('content')
@include('partials.family_header')
<div class="well">
    <div class="row">
        <h3 class="col-md-6">Street Address: </h3><h3 class="not_bold col-md-6">{{$family->street }}</h3>
        <h3 class="col-md-6">City: </h3><h3 class="not_bold col-md-6">{{$family->city }}</h3>
        <h3 class="col-md-3">State: </h3><h3 class="not_bold col-md-3">{{$family->state }}</h3>
        <h3 class="col-md-3">Zip: </h3><h3 class="not_bold col-md-3">{{$family->zip }}</h3>
    </div>
</div>
<div class="well">
    <h1 align="center">Measurement Tools</h1>
    <div class="row">
        <h3 class="col-md-6 col-md-offset-2"><a href="{{URL::to('/')}}/ncfas">NCFAS</a> </h3><h3 class="col-md-4"><a href="{{URL::to('/')}}/aapi/create">AAPI</a></h3>
    </div>
</div>
<div class="well">
    <h1 align="center">Income</h1>
    <div class="row">
        <h3 class="col-md-6">Range: </h3><h3 class="not_bold col-md-6">{{$incomeRange->name }}</h3>
        <h3 class="col-md-4">Sources:</h3>
            <h3 class="not_bold col-md-8">
                @forelse ($incomeSources as $incomeSource)
                    {{$incomeSource->name}},
                @empty
                    No income Sources selected
                @endforelse
            </h3>
    </div>
</div>
    <div class="well">
        <h1 align="center">Caregivers</h1>
        <div class="row">
            <h5 class="col-md-2">Name</h5><h5 class="col-md-2">Date of Birth</h5><h5 class="col-md-1">Gender</h5><h5 class="col-md-1">Status</h5>
            <h5 class="col-md-2">Race</h5><h5 class="col-md-2">Education</h5><h5 class="col-md-2">Family Role</h5>
        </div>

            @forelse ($caregivers as $caregiver)
                <div class="row">
                    <h5 class="col-md-2 not_bold">{{$caregiver->name}}</h5><h5 class="col-md-2 not_bold">{{$caregiver->birth_date}}</h5>
                    <h5 class="col-md-1 not_bold">{{$caregiver->gender->name}}</h5><h5 class="col-md-1 not_bold">{{$caregiver->maritalStatus->name}}</h5>
                    <h5 class="col-md-2 not_bold">{{$caregiver->race->name}}</h5><h5 class="col-md-2 not_bold">{{$caregiver->education->name}}</h5>
                    <h5 class="col-md-2 not_bold">{{$caregiver->familyRole->name}}</h5>
                </div>
               @empty
                    No caregivers entered
                @endforelse
        <div class="row">
            <h4 class="col-md-12"><a href="{{URL::to('/')}}/caregiver/create">Add Caregiver</a></h4>
        </div>
    </div>
<div class="well">
    <div class="row">
        <h1 align="center">Children</h1>
        <h5 class="col-md-3">Name</h5><h5 class="col-md-3">Date of Birth</h5><h5 class="col-md-3">Gender</h5><h5 class="col-md-3">Race</h5>
        @forelse ($children as $child)
            <h5 class="col-md-3 not_bold">{{$child->name}}</h5><h5 class="col-md-3 not_bold">{{$child->birth_date}}</h5>
            <h5 class="col-md-3 not_bold">{{$child->gender->name}}</h5>
            <h5 class="col-md-3 not_bold">{{$child->race->name}}</h5>
            {{--</div>--}}
        @empty
            No caregivers entered
        @endforelse
        <h4 class="col-md-12"><a href="{{URL::to('/')}}/child/create">Add Child</a></h4>
    </div>
</div>
<div class="well">


            <div class="row">
                <h1 align="center">Type(s) of Abuse:</h1>
            </div>
            @forelse ($abuses as $abuse)
                <div class="row">
                    <h4 class="col-md-12"><span class="not_bold">{{$abuse->name}}</span></h4>
                </div>
            @empty
                No abuse selected
            @endforelse
            {{--<h4 class="col-md-12"><a href="show.blade.php">Modify Abuse types</a></h4>--}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <h4 class="col-md-12"><a href="{{URL::to('/')}}/ncfas">Enter NCFAS Data</a></h4>
            </div>
       </div>

@endsection