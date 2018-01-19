<div class="well">
    @if($family->closed)
            <h1 align="center">Case Closed on {{$family->close_date}}</h1>
    @endif
    <div class="row">
        <h2 class="col-md-6 col-md-offset-4">Family: <span class="not_bold">
                <a href="{{URL::to('/')}}/family/{{$family->id}}">{{$family->name}}</a></span></h2>
        <h2 class="col-md-6 col-md-offset-4">Case Number: <span class="not_bold">{{$family->case_id}}</span></h2>
        <h2 class="col-md-6 col-md-offset-4">INA Date: <span class="not_bold">{{$family->ina_date}}</span></h2>
        <h2 class="col-md-6 col-md-offset-4">Parent Aide: <span class="not_bold">@if($family->parent_aide_id){{$family->parentAide->last_name}}, {{$family->parentAide->first_name}}@else Not assigned @endif</span></h2>

    </div>
    <div class="row">
        <h3 class="col-md-3 col-md-offset-4"><a href="{{URL::to('/')}}/family/{{$family->id}}/edit"> <span class="not_bold">
                    Edit</span></a></h3>
        <h3 class="col-md-3"><a href="{{URL::to('/')}}/family/view_all/{{$family->id}}"> <span class="not_bold">
                    View</span></a></h3>
        {{--<h3 class="col-md-3"><a href="{{URL::to('/')}}/family/print/{{$family->id}}"> <span class="not_bold">--}}
                    {{--Print</span></a></h3>--}}
    </div>
        <div class="row">
            <h2 class="col-md-3 col-md-offset-5">Print:</h2>
        </div>
        <div class="row">
            {{--<h3 class="col-md-3 col-md-offset-2">Print:</h3>--}}
            <h3 class="col-md-6 col-md-offset-5"><a href="{{URL::to('/')}}/family/print/{{$family->id}}"> <span class="not_bold">
                    Family Profile</span></a></h3>
            <h3 class="col-md-2 col-md-offset-2"> <span class="not_bold">NCFAS:</span></h3>
            <h3 class="col-md-2"><a href="{{URL::to('/')}}/data/print?id={{$family->id}}&phase_id=1"> <span class="not_bold">
                    Intake</span></a></h3>
            <h3 class="col-md-2"><a href="{{URL::to('/')}}/data/print?id={{$family->id}}&phase_id=2"> <span class="not_bold">
                    Interim</span></a></h3>
            <h3 class="col-md-2"><a href="{{URL::to('/')}}/data/print?id={{$family->id}}&phase_id=3"> <span class="not_bold">
                    Closure</span></a></h3>
        </div>
</div>