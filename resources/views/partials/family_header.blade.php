<div class="well">
    @if($family->closed)
            <h1 align="center">Case Closed on {{$family->close_date}}</h1>
    @endif
    <div class="row">
        <h2 class="col-md-6 col-md-offset-4">Family: <span class="not_bold">
                <a href="{{URL::to('/')}}/family/{{$family->id}}">{{$family->name}}</a></span></h2>
        <h2 class="col-md-6 col-md-offset-4">Case Number: <span class="not_bold">{{$family->case_id}}</span></h2>
    </div>
    <div class="row">
        <h3 class="col-md-3 col-md-offset-2"><a href="{{URL::to('/')}}/family/{{$family->id}}/edit"> <span class="not_bold">
                    Edit</span></a></h3>
        <h3 class="col-md-3"><a href="{{URL::to('/')}}/family/view_all/{{$family->id}}"> <span class="not_bold">
                    View</span></a></h3>
        <h3 class="col-md-3"><a href="{{URL::to('/')}}/family/print/{{$family->id}}"> <span class="not_bold">
                    Print</span></a></h3>




    </div>
</div>