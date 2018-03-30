@extends('layouts.app') @section('content')



<div class="well">
<div class="row">
    <div class="col-md-6">
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
    {{--<form action="{{URL::to('/')}}/report/show" name="report" id="report" method="post">--}}
    {{--{{ csrf_field() }}--}}
    {{--@include('partials.date_needed', ['name' => 'start_date'])--}}
    {{--<br>--}}
        {{--@include('partials.date_needed', ['name' => 'end_date'])--}}
        {{--<button type="submit" class="btn-primary btn-lg">submit</button>--}}

    </form>

   {{--<h2 align="center">Families</h2>--}}

{{--<div class="row">--}}
    {{--<h5 class="col-sm-2">--}}
            {{--Name--}}
    {{--</h5>--}}
    {{--<h5 class="col-sm-1">--}}
            {{--Case ID--}}
    {{--</h5>--}}
    {{--<h5 class="col-sm-2">--}}
        {{--Parent Aide--}}
    {{--</h5>--}}
    {{--<h5 class="col-sm-2">--}}
        {{--Status--}}
    {{--</h5>--}}
{{--</div>--}}
    {{--@foreach($families as $family)--}}
        {{--<div class="row">--}}
            {{--<h5 class="col-sm-2 not_bold">--}}
                {{--<a href="{{URL::to('/')}}/family/{{$family->id}}">{{$family->name}}</a>--}}
            {{--</h5>--}}
            {{--<h5 class="col-sm-1 not_bold">--}}
                {{--{{$family->case_id}}--}}
            {{--</h5>--}}
            {{--<h5 class="col-sm-2 not_bold">--}}
                {{--{{$family->parentAide->last_name}}--}}
            {{--</h5>--}}
            {{--<h5 class="col-sm-2 not_bold">--}}
                {{--@if($family->closed) Closed @else Open @endif--}}
            {{--</h5>--}}
        {{--</div>--}}
    {{--@endforeach--}}
{{--</table>--}}
</div>
@endsection