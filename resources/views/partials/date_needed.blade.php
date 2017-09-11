{{--<select name="{{$name}}[]"required>--}}
    {{--<option value="">Year</option>--}}
    {{--<option value="2015">2015</option>--}}
    {{--<option value="2015">2015</option>--}}
    {{--<option value="2017">2017</option>--}}
    {{--<option value="2018">2018</option>--}}
    {{--<option value="2019">2019</option>--}}
{{--</select>--}}


<select name="{{$name}}[]">
    <option value="">Year</option>
    @for($year = $current_year; $year > 1980; $year--)
        <option value="{{$year}}">{{$year}}</option>
    @endfor
</select>



<select name="{{$name}}[]">
    <option value="">Month</option>
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>

<select name="{{$name}}[]">
    <option value="">Day</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>
{{--{{Form::select('$name[]', ['01' => '01','02' => '02','03' => '03','04' => '04','05' => '05','06' => '06','07' => '07','08' => '08',--}}
                                    {{--'09' => '09','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15'--}}
                                     {{--,'16' => '17','18' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24'--}}
                                     {{--,'25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31'], null, ['placeholder' => 'Day'])}}--}}
{{--{{Form::select('$name[]', ['2017' => '2017','2018' => '2018'], null, ['placeholder' => 'Year'])}}--}}