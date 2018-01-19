@extends('layouts.app') @section('content')

<div class="well">
    {{--@include('partials.ajax_name')--}}
    {{--@include('partials.ajax_case_id')--}}
   <h2 align="center">Parent Aides</h2>

<div class="row">
    <h3 class="col-sm-6 col-sm-offset-2">
            Last Name
    </h3>
    <h3 class="col-sm-4">
            First Name
</h3>
</div>
    @foreach($parent_aides as $parent_aide)
        <div class="row">
            <h3 class="col-sm-4 col-sm-offset-2 not_bold">
                <a href="{{URL::to('/')}}/parent_aide/{{$parent_aide->id}}">{{$parent_aide->last_name}}</a>
            </h3>
            <h3 class="col-sm-4 not_bold">
                {{$parent_aide->first_name}}
            </h3>
        </div>
    @endforeach
</table>
</div>
                        {{--{{$families->links()}}--}}
@endsection