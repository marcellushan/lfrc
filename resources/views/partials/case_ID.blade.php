<h3 class="col-md-6">
    Search by Case ID:<select id="selectbox" name="" onchange="javascript:location.href = this.value;">
        @foreach($case_ids as $family)
            <option value="family/{{$family->id}}">{{$family->case_id}}</option>
        @endforeach
    </select>
</h3>


