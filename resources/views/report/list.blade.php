@extends('layouts.app') @section('content')



<div class="well">
    <div class="row">
        <h5 class="col-sm-2">
           Family Name
        </h5>
        <h5 class="col-sm-1">
           Case ID
        </h5>
        <h5 class="col-sm-2">
            Date Created
        </h5>
        <h5 class="col-sm-2">
        Status
        </h5>
        <h5 class="col-sm-2">
            Abuse Type
            <div class="row">
                <div class="col-sm-2">
                    P
                </div>
                <div class="col-sm-2">
                    E
                </div>
                <div class="col-sm-2">
                    S
                </div>
                <div class="col-sm-2">
                    N
                </div>
                <div class="col-sm-2">
                    H
                </div>
          </h5>
        <h5 class="col-sm-2">
            Parent Aide
        </h5>

    </div>
    @foreach($families as $family)
        <div class="row">
            <h5 class="col-sm-2 not_bold">
                <a href="{{URL::to('/')}}/family/{{$family->id}}">{{$family->name}}</a>
            </h5>
            <h5 class="col-sm-1 not_bold">
                {{$family->case_id}}
            </h5>
            <h5 class="col-sm-2 not_bold">
                {{$family->created_at}}
            </h5>
            <h5 class="col-sm-2 not_bold">
                @if($family->closed) Closed @else Open @endif
            </h5>
            <h5 class="col-sm-2 not_bold">
                <div class="row">
                    <div class="col-sm-2">
                        {{$family->physical}}
                    </div>
                    <div class="col-sm-2">
                        {{$family->emotional}}
                    </div>
                    <div class="col-sm-2">
                        {{$family->sexual}}
                    </div>
                    <div class="col-sm-2">
                        {{$family->neglect}}
                    </div>
                    <div class="col-sm-2">
                        {{$family->high_risk}}
                    </div>
                </div>
            </h5>
            <h5 class="col-sm-2 not_bold">
                {{$family->last_name}}, {{$family->first_name}}
            </h5>

        </div>
    @endforeach
{{--</table>--}}
</div>
@endsection