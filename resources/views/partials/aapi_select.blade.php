<form action="{{URL::to('/')}}/aapi" method="post">
    <input type="hidden" name='cycle_id' value="{{$cycle_id}}">
    {{ csrf_field() }}
    <div class="col-md-6"><h3>{{$cycle}}</h3>
        <div class="row">
            <h4 class="col-md-8">Expectations</h4>
            <h4 class="col-md-4"> <select name="expectations">
                @for($x = 1; $x <= 10; $x++)
                    <option value="{{$x}}">{{$x}}</option>
                @endfor
            </select></h4>
        </div>
        <div class="row">
            <h4 class="col-md-8">Empathy</h4>
            <h4 class="col-md-4"><select name="empathy">
                    @for($x = 1; $x <= 10; $x++)
                        <option value="{{$x}}">{{$x}}</option>
                    @endfor
                </select></h4>
            </h4>
        </div>
        <div class="row">
            <h4 class="col-md-8">Belief in Corporal Punishment </h4>
            <h4 class="col-md-4"><select name="corporal">
                    @for($x = 1; $x <= 10; $x++)
                        <option value="{{$x}}">{{$x}}</option>
                    @endfor
                </select></h4>
            </h4>
        </div>
        <div class="row">
            <h4 class="col-md-8">Family Roles </h4>
            <h4 class="col-md-4"><select name="roles">
                    @for($x = 1; $x <= 10; $x++)
                        <option value="{{$x}}">{{$x}}</option>
                    @endfor
                </select></h4>
            </h4>
        </div>
        <div class="row">
            <h4 class="col-md-8">Power-Interdepence</h4>
            <h4 class="col-md-4"><select name="power">
                    @for($x = 1; $x <= 10; $x++)
                        <option value="{{$x}}">{{$x}}</option>
                    @endfor
                </select></h4>
            </h4>
        </div>
        <button type="submit">Submit</button>
        </div>
</form>