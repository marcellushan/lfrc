@extends('layouts.app') @section('content')

<div class="well">
    {{--@include('partials.ajax_name')--}}
    {{--@include('partials.ajax_case_id')--}}
    <div class="row">
        <h2 class="col-sm-4 col-sm-offset-4">Parent Aides</h2>
        </div>

    <div class="row">
        <h2 class="col-sm-4 col-sm-offset-4"><a href="parent_aide/create">Add Parent Aides</a></h2>
    </div>


<div class="row">
    <h3 class="col-sm-4 col-sm-offset-2">
            Last Name
    </h3>
    <h3 class="col-sm-4">
            First Name
</h3>
</div>
    @foreach($parent_aides as $parent_aide)
        <div class="row">
            <h3 class="col-sm-4 col-sm-offset-2 not_bold">
                {{$parent_aide->last_name}}
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