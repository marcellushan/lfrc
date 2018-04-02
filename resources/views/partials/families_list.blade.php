<h3 class="col-md-6">
    Search by name: <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
        @foreach($list_families as $family)
            <option value="family/{{$family->id}}">{{$family->name}} - {{$family->case_id}}</option>
        @endforeach
    </select>
</h3>
