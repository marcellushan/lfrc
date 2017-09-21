@extends('layouts.app') @section('content')

    <div class="well">
        <form action="{{URL::to('/')}}/family" name="family" id="new_family" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="case_id"> Case ID:</label>
                    <input type="text" name="case_id" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Family Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="street">Street Address:</label>
                    <input type="text" name="street" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="city">City:</label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="state">State:</label>
                    {{--<input type="text" name="state" class="form-control">--}}
                    <select name="state">
                        <option>Georgia</option>
                    @foreach($states as $state)
                        <option>{{ucfirst(strtolower($state->State))}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="zip">Zip Code:</label>
                    <input type="text" name="zip" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="street">Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="city">Phone:</label>
                    <input type="text" name="phone" class="form-control">
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
                        <input type="checkbox" name="full_time" value="1">Full-time Employment
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="part_time" value="1">Part-time Employment
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="ss" value="1">SS
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="ssi" value="1">SSI
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="child_support" value="1">Child Support
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="food_stamps" value="1">Food Stamps
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="tanf" value="1">TANF
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="family_members" value="1">Family Members
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="retirement" value="1">Retirement/Pension
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="other" value="1" id="income_source_other">Other
                    </div>
                    <div class="col-md-6" id="income_source_other_details">
                        Other Details <input type="text" name="income_source_other">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Income Range (annual)</label>
                    <select name="income_range_id">
                        <option>Select Range</option>
                        <option value="1">Less than $10,000</option>
                        <option value="2">$10,000 - $19,999</option>
                        <option value="3">$20,000 - $29,999</option>
                        <option value="4">$30,000 - $39,999</option>
                        <option value="5">$40,000 - $49,999</option>
                        <option value="6">$50,000+</option>
                    </select>
                </div>
                </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Referral Source</label>
                    <select name="referral_type_id" id="referral">
                        <option>Select Referral</option>
                        <option value="1">DFCS</option>
                        <option value="2">Court</option>
                        <option value="3">Self</option>
                        <option value="4">Mental Health Agency</option>
                        <option value="5">Mental Health Private</option>
                        <option value="6">Hospital/Physician</option>
                        <option value="7">Family</option>
                        <option value="8">School</option>
                        <option value="9">Other Human Resource provider</option>
                        <option value="10">Other</option>
                    </select>
                </div>
                <div class="col-md-3" id="referral_other">
                        <label>Other referral</label> <input type="text" name="abuses_other">
                </div>
                <div class="col-md-4">
                    <label>Referral Date</label><br>
                    @include('partials.date_needed', ['name' => 'referral_date'])
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
                        <input type="checkbox" name="physical" value="1">Physical Abuse
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="emotional" value="1">Emotional Abuse
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="sexual" value="1">Sexual Abuse
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="neglect" value="1">Neglect
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="high_risk" value="1">High Risk
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="abuse_other" value="1" id="abuse_other">Other
                    </div>
                    <div class="col-md-6" id="abuse_other_details">
                        Other Details <input type="text" name="abuse_other_text">
                    </div>
                </div>
            </div>
            <label>Date of INA</label><br>
            @include('partials.date_needed', ['name' => 'ina_date'])
            <br><br>
            <button type="submit" class="btn-primary btn-lg">submit</button>

        </form>

    </div>

@endsection