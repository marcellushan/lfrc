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
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<label>Income Source (select all that apply)</label>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="1">Full-time Employment--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="2">Part-time Employment--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="3">SS--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="4">SSI--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="5">Child Support--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="6">Food Stamps--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="7">TANF--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="8">Family Members--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="9">Retirement/Pension--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="income_source[]" value="10">Other--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
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
                    <label>Referral Source</label>
                    <select name="referral">
                        <option value="">Select Referral</option>
                        <option value="1" @if($family->referral_id == '1') selected @endif>DFCS</option>
                        <option value="2" @if($family->referral_id == '2') selected @endif>Court</option>
                        <option value="3" @if($family->referral_id == '3') selected @endif>Self</option>
                        <option value="4" @if($family->referral_id == '4') selected @endif>Mental Health Agency</option>
                        <option value="5" @if($family->referral_id == '5') selected @endif>Mental Health Private</option>
                        <option value="6" @if($family->referral_id == '6') selected @endif>Hospital/Physician</option>
                        <option value="7" @if($family->referral_id == '7') selected @endif>Family</option>
                        <option value="8" @if($family->referral_id == '8') selected @endif>School</option>
                        <option value="9" @if($family->referral_id == '9') selected @endif>Other Human Resource provider</option>
                        <option value="10" @if($family->referral_id == '10') selected @endif>Other</option>
                    </select>
                </div>
            </div>
            <br>
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<label>Type of Abuse (select all that apply)</label>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="abuse[]" value="1">Physical Abuse--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="abuse[]" value="2">Emotional Abuse--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="abuse[]" value="3">Sexual Abuse--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="abuse[]" value="4">Neglect--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="abuse[]" value="5">High Risk--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<input type="checkbox" name="abuse[]" value="6">Other--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <label>Date of INA</label><br>
            {{--@include('partials.date_needed', ['name' => 'ina_date'])--}}
            <input type="text" name="ina_date" value="{{$family->year}}-{{$family->month}}-{{$family->day}}">
            <button type="submit">submit</button>

        </form>

    </div>

@endsection