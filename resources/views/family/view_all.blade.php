@extends('layouts.app') @section('content')
    @include('partials.family_header')
<div class="row">
    <div class="col-md-6">
        <div class="well">
            <h4>Address:</h4>
            <h5>
            <div class="row">
                <div class="col-md-6">
                    Street Address
                </div>
                <div class="col-md-6 not_bold">
                   {{$family->street}}
                </div>
                <div class="col-md-6">
                    City
                </div>
                <div class="col-md-6 not_bold">
                    {{$family->city}}
                </div>
                <div class="col-md-6">
                    State
                </div>
                <div class="col-md-6 not_bold">
                    {{$family->state}}
                </div>
                <div class="col-md-6">
                    Zip Code
                </div>
                <div class="col-md-6 not_bold">
                    {{$family->zip}}
                </div>
            </div>
            </h5>
            <div class="row">
            <h4 class="col-md-12">
                Referral(s):
            </h4>

                @foreach($referrals as $referral)
                    <h5 class="col-md-6 not_bold">
                        Source: {{$referral->referral_type->name}}</h5> <h5 class="col-md-6 not_bold">Date: {{$referral->referral_date}}</h5>
                @endforeach
        </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="well">

            {{--<div class="row">--}}
                    {{--<h4 class="col-md-6">Referral Type</h4>--}}
                {{--<h4 class="col-md-6 not_bold">{{$family->referral->name}}</h4>--}}
            {{--</div>--}}
            <h4>Income:</h4>
            <div class="row">
                <h5 class="col-md-4">
                    Range
                </h5>
                <h5 class="col-md-8 not_bold">
                    {{$incomeRange->name}}
                </h5>
                <h5 class="col-md-4">
                    Source(s)
                </h5>
                <h5 class="col-md-8 not_bold">
                    @if($family->full_time)Full-Time Employment, @endif
                    @if($family->part_time)Part-Time Employment, @endif
                    @if($family->ss)SS, @endif
                    @if($family->ssi)SSI, @endif
                    @if($family->child_support)Child Support, @endif
                    @if($family->food_stamps)Food Stamps, @endif
                    @if($family->tanf)TANF, @endif
                    @if($family->family_members)Family Members, @endif
                    @if($family->retirement)Retirement/Pension, @endif
                    @if($family->income_source_other)Other - {{$family->income_source_other_text}} @endif
                </h5>

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
    </div>
    </div>
    <div class="well">
        <div class="row">
            <h2 align="center">Type(s) of Abuse:</h2>
        {{--</div>--}}
        <h4 class="col-md-2 col-md-offset-5">
        @if($family->physical)Physical Abuse, @endif
        @if($family->emotional)Emotional Abuse, @endif
        @if($family->sexual)Sexual Abuse, @endif
        @if($family->neglect)Neglect, @endif
        @if($family->high_risk)High Risk, @endif
        @if($family->abuse_other)Other - {{$family->abuse_other_text}} @endif
        </h4>
    </div>
    </div>
    @if(count($reabuses) > 0)
        <div class="well">
            <h3 align="center">Re-abuse</h3>
            @foreach($reabuses as $reabuse)
                <div class="row">
                    <h4 class="col-md-4"><span class="not_bold">Date: {{$reabuse->date}}</span></h4>
                    <h4 class="col-md-4"><span class="not_bold">Type: {{$reabuse->abuse->name}}</span></h4>
                    <h4 class="col-md-4"><span class="not_bold">Outcome:
                            @if($reabuse->outcome_id==1)
                                Confirmed
                            @else
                                Unconfirmed
                            @endif
                        </span></h4>
                    <h4 class="col-md-12">Notes:</h4>
                    <h4 class="col-md-12"><span class="not_bold">Notes: {{$reabuse->notes}}</span></h4>
                </div>
            @endforeach
        </div>
    @endif
    <div class="well">
        <h3 align="center">AAPI Scores</h3>
    </div>
    <div class="row">
        {{--<div class="col-md-6">--}}
            {{--<div class="well">--}}
                {{--<h4>Pre-test</h4>--}}
                {{--@if($preAapi)--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}
                        {{--Expectations--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--{{$preAapi->expectations}}--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--Empathy--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--{{$preAapi->empathy}}--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--Belief in Corporal Punishment--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--{{$preAapi->corporal}}--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--Family Roles--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--{{$preAapi->roles}}--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--Power-Interdepence--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--{{$preAapi->power}}--}}
                    {{--</div>--}}
            {{--</div>--}}
                {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}
        <div class="col-md-6">
            <div class="well">
                <h4>Pre-test</h4>
                @if($preAapi)
                <div class="row">
                    <div class="col-md-9">
                        Expectations
                    </div>
                    <div class="col-md-3">
                        {{$preAapi->expectations}}
                    </div>
                    <div class="col-md-9">
                        Empathy
                    </div>
                    <div class="col-md-3">
                        {{$preAapi->empathy}}
                    </div>
                    <div class="col-md-9">
                        Belief in Corporal Punishment
                    </div>
                    <div class="col-md-3">
                        {{$preAapi->corporal}}
                    </div>
                    <div class="col-md-9">
                        Family Roles
                    </div>
                    <div class="col-md-3">
                        {{$preAapi->roles}}
                    </div>
                    <div class="col-md-9">
                        Power-Interdependence
                    </div>
                    <div class="col-md-3">
                        {{$preAapi->power}}
                    </div>
                    @else
                        <div class="row">
                            <div class="col-md-6">
                                No entries
                            </div>
                    @endif
                </div>
        </div>
        </div>
            <div class="col-md-6">
                <div class="well">
                    <h4>Post-test</h4>
                    @if($postAapi)
                        <div class="row">
                            <div class="col-md-9">
                                Expectations
                            </div>
                            <div class="col-md-3">
                                {{$postAapi->expectations}}
                            </div>
                            <div class="col-md-9">
                                Empathy
                            </div>
                            <div class="col-md-3">
                                {{$postAapi->empathy}}
                            </div>
                            <div class="col-md-9">
                                Belief in Corporal Punishment
                            </div>
                            <div class="col-md-3">
                                {{$postAapi->corporal}}
                            </div>
                            <div class="col-md-9">
                                Family Roles
                            </div>
                            <div class="col-md-3">
                                {{$postAapi->roles}}
                            </div>
                            <div class="col-md-9">
                                Power-Interdependence
                            </div>
                            <div class="col-md-3">
                                {{$postAapi->power}}
                            </div>
                            @else
                                <div class="row">
                                    <div class="col-md-6">
                                        No entries
                                    </div>
                                    @endif
                                </div>
                        </div>
                </div>

</div>


            <div class="well">
                <h3 align="center">NCFAS Scores</h3>
            </div>
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <h4><a href = "{{URL::to('/')}}/data/complete?id={{$family->id}}&phase_id=1">Intake</a></h4>
                </div>
            </div>

                <div class="col-md-4">
                    <div class="well">
                        <h4><a href = "{{URL::to('/')}}/data/complete?id={{$family->id}}&phase_id=2">Interim</a></h4>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="well">
                            <h4><a href = "{{URL::to('/')}}/data/complete?id={{$family->id}}&phase_id=3">Closure</a></h4>
                        </div>
            </div>

@endsection