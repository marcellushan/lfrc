<form action="{{URL::to('/')}}/aapi" method="post">
    <input type="hidden" name='cycle_id' value="{{$cycle_id}}">
    {{ csrf_field() }}
    <div class="col-md-6"><h3>{{$cycle}}</h3>
        <h4>Expectations&nbsp;
            <select name="expectations">
                @for($x = 1; $x <= 10; $x++)
                    <option value="{{$x}}">{{$x}}</option>
                @endfor
            </select>
        </h4>
        <h4>Empathy&nbsp;
            <select name="empathy">
                @for($x = 1; $x <= 10; $x++)
                    <option value="{{$x}}">{{$x}}</option>
                @endfor
            </select>
        </h4>
        <h4>Belief in Corporal Punishment&nbsp;
            <select name="corporal">
                @for($x = 1; $x <= 10; $x++)
                    <option value="{{$x}}">{{$x}}</option>
                @endfor
            </select>
        </h4>
        <h4>Family Roles&nbsp;
            <select name="roles">
                @for($x = 1; $x <= 10; $x++)
                    <option value="{{$x}}">{{$x}}</option>
                @endfor
            </select>
        </h4>
        <h4>Power-Interdepence&nbsp;
            <select name="power">
                @for($x = 1; $x <= 10; $x++)
                    <option value="{{$x}}">{{$x}}</option>
                @endfor
            </select>
        </h4>
        <button type="submit">Submit</button>
    </div>

</form>