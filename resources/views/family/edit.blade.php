@extends('layouts.app') @section('content')

    <div class="well">
        <form action="{{URL::to('/')}}/family/{{$family->id}}" method="post">
            <input name="_method" type="hidden" value="PUT">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="case_id"> Case ID:</label>
                    <input type="text" name="case_id" value="{{$family->case_id}}" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{$family->name}}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="street">Street Address:</label>
                    <input type="text" name="street" value="{{$family->street}}" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="city">City:</label>
                    <input type="text" name="city" value="{{$family->city}}" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="state">State:</label>
                    <input type="text" name="state" value="{{$family->state}}"class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="zip">Zip Code:</label>
                    <input type="text" name="zip" value="{{$family->zip}}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Income Source (select all that apply)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <input type="checkbox" name="full_time" value="1" @if($family->full_time) checked @endif>Full-time Employment
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="full_time" value="1" @if($family->part_time) checked @endif>Part-time Employment
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="ss" value="1" @if($family->ss) checked @endif>SS
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="ssi" value="1" @if($family->ssi) checked @endif>SSI
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="child_support" value="1" @if($family->child_support) checked @endif>Child Support
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="food_stamps" value="1" @if($family->food_stamps) checked @endif>Food Stamps
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="tanf" value="1" @if($family->tanf) checked @endif>TANF
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="family_members" value="1" @if($family->family_members) checked @endif>Family Members
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="retirement" value="1" @if($family->retirement) checked @endif>Retirement/Pension
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="income_source_other" value="1" @if($family->income_source_other) checked @endif>Other
                    </div>

                    <div class="col-md-3">
                        <div  id="income_source_other_details">
                            Other <input type="text" name="income_source_other_text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Income Range (annual)</label>
                    <select name="income_range_id">
                        <option>Select Range</option>
                        <option value="1" @if($family->income_range_id == '1') selected @endif>Less than $10,000</option>
                        <option value="2" @if($family->income_range_id == '2') selected @endif>$10,000 - $19,999</option>
                        <option value="3" @if($family->income_range_id == '3') selected @endif>$20,000 - $29,999</option>
                        <option value="4" @if($family->income_range_id == '4') selected @endif>$30,000 - $39,999</option>
                        <option value="5" @if($family->income_range_id == '5') selected @endif>$40,000 - $49,999</option>
                        <option value="6" @if($family->income_range_id == '6') selected @endif>$50,000+</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Referral(s)</label>
                @foreach($referrals as $referral)
                Source: {{$referral->referral_type->name}}&nbsp;Date: {{$referral->referral_date}}
                @endforeach
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label>Type of Abuse (select all that apply)</label>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <input type="checkbox" name="physical" value="1" @if($family->physical) checked @endif>Physical Abuse
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="emotional" value="1" @if($family->emotional) checked @endif>Emotional Abuse
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="sexual" value="1" @if($family->sexual) checked @endif>Sexual Abuse
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="neglect" value="1" @if($family->neglect) checked @endif>Neglect
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="high_risk" value="1" @if($family->high_risk) checked @endif>High Risk
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="abuse_other" value="1" @if($family->abuse_other) checked @endif>Other
                    </div>
                </div>
            </div>
            <label>Date of INA</label><br>
            {{--@include('partials.date_needed', ['name' => 'ina_date'])--}}
            <input type="text" name="ina_date" value="{{$family->year}}-{{$family->month}}-{{$family->day}}">
            <button type="submit">submit</button>

        </form>

    </div>

    <div class="well">
        <form action="{{URL::to('/')}}/family/{{$family->id}}" method="post">
            <input name="_method" type="hidden" value="DELETE">
            <input name="family_id" type="hidden" value="{{$family->id}}">
            {{ csrf_field() }}
            <h1 align="center">Delete Family</h1>
            <h2>Click button below to permanently delete this family!!</h2>
            <button type="submit">Delete Family</button>
    </div>
    @include('partials.return')

@endsection