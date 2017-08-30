    <div class="col-md-6">
        {{$subCategory->name}}
    </div>

    <select name="{{$subCategory->id}}">
        <option value="">Select</option>
        <option value="1">Not Applicable</option>
        <option value="2">Clear Strength</option>
        <option value="3">Mild Strength</option>
        <option value="4">Baseline/Adequate</option>
        <option value="5">Mild Problem</option>
        <option value="6">Moderate Problem</option>
        <option value="7">Serious Problem</option>
        <option value="8">Unknown</option>
    </select>
