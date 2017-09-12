<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Resource Center</title>
    <link rel="stylesheet" href="{{URL::to('/')}}/css/print.css">
</head>
<body>
<h2>Family:</h2>
<h3>Case ID: <span class="not_bold">{{$family->case_id}}</span></h3>
<h3>Family/Case Name:  <span class="not_bold">{{$family->name}}</span></h3>
<h3>Address:  <span class="not_bold">{{$family->street}}, {{$family->city}}, {{$family->state}}, {{$family->zip}}</span></h3>
<h3>Income Source(s):  <span class="not_bold">
        @forelse($incomeSources as $incomeSource)
        {{$incomeSource->name}},
        @empty
        'No income sources'
        @endforelse
    </span></h3>
<h3>Income Range:  <span class="not_bold">{{$incomeRange->name}}</span></h3>
<h3>Caregiver(s):</h3>
<table>
    <tr>
@forelse($caregivers as $caregiver)
            <td>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td>{{$caregiver->name}}</td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td>{{$caregiver->birth_date}}</td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>{{$caregiver->gender->name}}</td>
                    </tr>
                    <tr>
                        <td>Marital Status:</td>
                        <td>{{$caregiver->maritalStatus->name}}</td>
                    </tr>
                    <tr>
                        <td>Education:</td>
                        <td>{{$caregiver->education->name}}</td>
                    </tr>
                    <tr>
                        <td>Family Role:</td>
                        <td>{{$caregiver->familyRole->name}}</td>
                    </tr>
                </table>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    @empty
        No Caregivers provided
    @endforelse
        </tr>
</table>
<h3>Child(ren):</h3>
<table>
    <tr>
        @forelse($children as $child)
            <td>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td>{{$child->name}}</td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td>{{$child->birth_date}}</td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>{{$child->gender->name}}</td>
                    </tr>
                    <tr>
                        <td>Race:</td>
                        <td>{{$caregiver->race->name}}</td>
                    </tr>
                </table>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        @empty
            No Children provided
        @endforelse
    </tr>
</table>
<h3>Type(s) of Abuse:  <span class="not_bold">
        @forelse($abuses as $abuse)
            {{$abuse->name}},
        @empty
            'No type of abuse provided'
        @endforelse
    </span></h3>
</body>