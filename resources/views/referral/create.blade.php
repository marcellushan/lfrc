@extends('layouts.app') @section('content')
    @include('partials.family_header')
    <div class="well">
        <form action="{{URL::to('/')}}/referral" id="new_referral" method="post">
            <input type="hidden" name="id" value="{{$family->id}}">
            {{ csrf_field() }}
            <h1 align="center">Add Referral</h1>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
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
                    <label>Other referral</label> <input type="text" name="referral_other">
                </div>
                </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <label for="name">Referral Date</label>
                    @include('partials.date_needed', ['name' => 'referral_date'])
                </div>
            </div>


            <br>
            <button type="submit" class="btn-primary btn-lg">submit</button>

        </form>
    </div>
    @include('partials.return')

@endsection