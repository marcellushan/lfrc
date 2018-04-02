@extends('layouts.app') @section('content')
<div class="well">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <h1 align="center">Families</h1>
    <table class="table">
        <tr>
            <th></th>
            <th>Overall</th>
            <th>This Year</th>
            <th>This Month</th>
        </tr>
        <tr>
            <td>Created</td>
            <td>{{$created_total}}</td>
            <td>{{$created_this_year}}</td>
            <td>{{$created_this_month}}</td>
        </tr>
        <tr>
            <td>Open</td>
            <td>{{$open_total}}</td>
            <td>{{$open_this_year}}</td>
            <td>{{$open_this_month}}</td>
        </tr>
        <tr>
            <td>Closed</td>
            <td>{{$closed_total}}</td>
            <td>{{$closed_this_year}}</td>
            <td>{{$closed_this_month}}</td>
        </tr>
    </table>
    </div>
</div>

    <h2 align="center">Cases Opened</h2>
    <form action="{{URL::to('/')}}/report/show" name="report" id="report" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <h3>From Date</h3>
                @include('partials.date_needed', ['name' => 'start_date'])
            </div>
            <div class="col-md-3">
                <h3>To Date</h3>
                @include('partials.date_needed', ['name' => 'end_date'])
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <h3>Status</h3>
                Open <input type="radio" name="status" value="1"> Closed <input type="radio" name="status" value="2">
            </div>
            <div class="col-md-3">
                <h3>Parent Aide</h3>
                <select name="parent_aide_id">
                    <option value="">Select</option>
                    @foreach($parent_aides as $parent_aide)
                        <option value="{{$parent_aide->id}}">{{$parent_aide->last_name}}, {{$parent_aide->first_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <h3>Types of Abuse</h3>
                <select name="abuse">
                    <option value="">Select</option>
                    @foreach($abuses as $abuse)
                        <option value="{{$abuse->short_name}}">{{$abuse->name}}</option>
                    @endforeach
                </select>            </div>
            <div class="col-md-3">
                <h3>Types of Re-Abuse</h3>
                <select name="reabuses">
                    <option value="">Select</option>
                    @foreach($abuses as $abuse)
                        <option value="{{$abuse->short_name}}">{{$abuse->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-5">
       <button type="submit" class="btn-primary btn-lg">submit</button>
       </div>
        </div>
    </form>

    <h2 align="center">Cases Closed</h2>
    <form action="{{URL::to('/')}}/report/show" name="report" id="report" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <h3>From Date</h3>
                @include('partials.date_needed', ['name' => 'start_date'])
            </div>
            <div class="col-md-3">
                <h3>To Date</h3>
                @include('partials.date_needed', ['name' => 'end_date'])
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <h3>Parent Aide</h3>
                <select name="parent_aide_id">
                    <option value="">Select</option>
                    @foreach($parent_aides as $parent_aide)
                        <option value="{{$parent_aide->id}}">{{$parent_aide->last_name}}, {{$parent_aide->first_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <h3>Types of Abuse</h3>
                <select name="abuse">
                    <option value="">Select</option>
                    @foreach($abuses as $abuse)
                        <option value="{{$abuse->short_name}}">{{$abuse->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{--<div class="row">--}}
            {{--<div class="col-md-3 col-md-offset-3">--}}
                {{--<h3>Types of Abuse</h3>--}}
                {{--<select name="abuse">--}}
                    {{--<option value="">Select</option>--}}
                    {{--@foreach($abuses as $abuse)--}}
                        {{--<option value="{{$abuse->short_name}}">{{$abuse->name}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>            </div>--}}
            {{--<div class="col-md-3">--}}
                {{--<h3>Types of Re-Abuse</h3>--}}
                {{--<select name="reabuses">--}}
                    {{--<option value="">Select</option>--}}
                    {{--@foreach($abuses as $abuse)--}}
                        {{--<option value="{{$abuse->short_name}}">{{$abuse->name}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}
            <div class="row">
                <div class="col-md-3 col-md-offset-5">
                    <button type="submit" class="btn-primary btn-lg">submit</button>
                </div>
            </div>
    </form>
@endsection