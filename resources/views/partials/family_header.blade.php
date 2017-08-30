<div class="well">
    @if($family->closed)
            <h1 align="center">Case Closed on {{$family->close_date}}</h1>
    @endif
    <div class="row">
    <h2 class="col-md-6 col-md-offset-4">Family: <a href="{{URL::to('/')}}/family/{{$family->id}}/edit"> <span class="not_bold">{{$family->name}}</span></a></h2>
    <h2 class="col-md-6 col-md-offset-4">Case Number: <span class="not_bold">{{$family->case_id}}</span></h2>



    </div>
</div>