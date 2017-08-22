@extends('layouts.app') @section('content')
@include('partials.family_header')

<div class="well">
    <div class="row">
        <h4 class="col-md-2">Street Address: </h4><h4 class="not_bold col-md-4">{{$family->street }}</h4>
        <h4 class="col-md-2">City: </h4><h4 class="not_bold col-md-4">{{$family->city }}</h4>
        <h4 class="col-md-3">State: </h4><h4 class="not_bold col-md-3">{{$family->state }}</h4>
        <h4 class="col-md-3">Zip: </h4><h4 class="not_bold col-md-3">{{$family->zip }}</h4>
    </div>
</div>
<div class="well">
    <h2 align="center">Measurement Tools</h2>
    <div class="row">
        <h4 class="col-md-6 col-md-offset-2"><a href="{{URL::to('/')}}/ncfas">NCFAS</a> </h4><h4 class="col-md-4"><a href="{{URL::to('/')}}/aapi/create">AAPI</a></h4>
    </div>
</div>
<div class="well">
    <h2 align="center">Income</h2>
    <div class="row">
        <h4 class="col-md-2 col-md-offset-4">Range: </h4><h4 class="not_bold col-md-6">{{$incomeRange->name }}</h4>
        <h4 class="col-md-2 col-md-offset-4">Sources:</h4>
            <h4 class="not_bold col-md-6">
                @forelse ($incomeSources as $incomeSource)
                    {{$incomeSource->name}},
                @empty
                    No income Sources selected
                @endforelse
            </h4>
    </div>
</div>
    <div class="well">
        <h2 align="center">Caregivers</h2>
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
        <h2 align="center">Children</h2>
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
                <h2 align="center">Type(s) of Abuse:</h2>
            </div>
            @forelse ($abuses as $abuse)
                <div class="row">
                    <h4 class="col-md-5 col-md-offset-5"><span class="not_bold">{{$abuse->name}}</span></h4>
                </div>
            @empty
                No abuse selected
            @endforelse
        </div>
<div class="well">
        <h2 align="center">Re-Abuse</h2>
        <form action="{{URL::to('/')}}/reabuse" method="post">
        {{ csrf_field() }}
            <h3>Reported Re-abuse</h3>
            @forelse ($reabuses as $reabuse)
                <div class="row">
                    <h4 class="col-md-2"><span class="not_bold">Date: {{$reabuse->date}}</span></h4>
                    <h4 class="col-md-2"><span class="not_bold">Type: {{$reabuse->abuse->name}}</span></h4>
                    <h4 class="col-md-6"><span class="not_bold">Notes: {{$reabuse->notes}}</span></h4>
                </div>
            @empty
                <h4>No re-abuse reported</h4>
            @endforelse
        <h3>Report Re-Abuse</h3>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date"id="date">
            </div>
            <div class="form-group col-md-6">
                <label for="date">Type of Abuse</label>
                <select class="form-control" name="abuse_id">
                    @foreach($all_abuses as $all_abuse)
                        <option value="{{$all_abuse->id}}">{{$all_abuse->name}}</option>
                    @endforeach
                </select>
            </div>
    </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="outcome">Outcome</label><br>
                    <h4><input type="radio" name="outcome_id" value="1">Confirmed
                    <input type="radio" name="outcome_id" value="2">Unconfirmed</h4>
            </div>
            <div class="form-group col-md-8">
                <label for="date">Notes</label>
                <textarea class="form-control" name="notes"></textarea>
            </div>
        </div>
            <button type="submit">Submit</button>
        </form>
    </div>
<div class="well">
    <h2 align="center">Close Case</h2>
    <div class="row">
        <div class="col-md-3 col-md-offset-3">
            <input type="checkbox" name="close_reasons[]" value="1">Successful<br>
            <input type="checkbox" name="close_reasons[]" value="2">Refused Services<br>
            <input type="checkbox" name="close_reasons[]" value="3">Family Relocated<br>
            <input type="checkbox" name="close_reasons[]" value="4">Unable to contact<br>
            <input type="checkbox" name="close_reasons[]" value="5">Inappropriate case
        </div><div class="col-md-3">
            Number of home visits<br>
            Close Date
            <input type="date" name="">
        </div>
    </div>
    <button type="submit">Close</button>
</div>
@endsection