@extends('layouts.app') @section('content')
    @include('partials.family_header')
<div class="row">
    <div class="col-md-6">
        <div class="well">
            <h4>Location</h4>
            <div class="row">
                <div class="col-md-6">
                    Street Address
                </div>
                <div class="col-md-6">
                   {{$family->street}}
                </div>
                <div class="col-md-6">
                    City
                </div>
                <div class="col-md-6">
                    {{$family->city}}
                </div>
                <div class="col-md-6">
                    State
                </div>
                <div class="col-md-6">
                    {{$family->state}}
                </div>
                <div class="col-md-6">
                    Zip Code
                </div>
                <div class="col-md-6">
                    {{$family->zip}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="well">
            <h4>Income</h4>
            <div class="row">
                <div class="col-md-6">
                    Range
                </div>
                <div class="col-md-6">
                    {{$incomeRange->name}}
                </div>
                <div class="col-md-6">
                    Source(s)
                </div>
                <div class="col-md-6">
                    @forelse($incomeSources as $incomeSource)
                        {{$incomeSource->name}}<br>
                    @empty
                        No income source
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
<div class="well">
    <h3 align="center">Caregivers</h3>
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
</div>
    <div class="well">
        <div class="row">
            <h3 align="center">Children</h3>
            <h5 class="col-md-3">Name</h5><h5 class="col-md-3">Date of Birth</h5><h5 class="col-md-3">Gender</h5><h5 class="col-md-3">Race</h5>
            @forelse ($children as $child)
                <h5 class="col-md-3 not_bold">{{$child->name}}</h5><h5 class="col-md-3 not_bold">{{$child->birth_date}}</h5>
                <h5 class="col-md-3 not_bold">{{$child->gender->name}}</h5>
                <h5 class="col-md-3 not_bold">{{$child->race->name}}</h5>
                {{--</div>--}}
            @empty
                No caregivers entered
    @endforelse
@endsection