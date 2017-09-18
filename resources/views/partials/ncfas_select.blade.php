    <div class="col-md-6">
        {{$subCategory->name}}
    </div>

    <select name="{{$subCategory->id}}">
        <option value="">Select</option>
        <option value="1">Not Applicable - 0</option>
        <option value="2">Clear Strength - 2</option>
        <option value="3">Mild Strength - 1</option>
        <option value="4">Baseline/Adequate - 0</option>
        <option value="5">Mild Problem - (-1) </option>
        <option value="6">Moderate Problem - (-2)</option>
        <option value="7">Serious Problem - (-3)</option>
        <option value="8">Unknown - 0</option>
    </select>
