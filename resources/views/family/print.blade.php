<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Resource Center</title>
    <link rel="stylesheet" href="{{URL::to('/')}}/css/print.css">
</head>
<body>
<h1>Family Resource Center</h1>
<h2>Family: <span class="not_bold">{{$family->name}}</span></h2>
@if($family->closed)
    <h3 class="note_this">Case Closed {{$family->close_date}}</h3>
    @endif
<h3></h3>
<h3>Case ID: <span class="not_bold">{{$family->case_id}}</span></h3>
<h3>Address:  <span class="not_bold">{{$family->street}}, {{$family->city}}, {{$family->state}}, {{$family->zip}}</span></h3>
<h3>Referrals(s):    @foreach($referrals as $referral)
        <h3 class="col-md-6 not_bold">
            Source: {{$referral->referral_type->name}} &nbsp; Date: {{$referral->referral_date}}</h3>
    @endforeach

<h3>Income Source(s):  <span class="not_bold">
        @if($family->full_time)Full-Time Employment, @endif
        @if($family->part_time)Part-Time Employment, @endif
        @if($family->ss)SS, @endif
        @if($family->ssi)SSI, @endif
        @if($family->child_support)Child Support, @endif
        @if($family->food_stamps)Food Stamps, @endif
        @if($family->tanf)TANF, @endif
        @if($family->family_members)Family Members, @endif
        @if($family->retirement)Retirement/Pension, @endif
        @if($family->income_source_other)Other - {{$family->income_source_other_text}} @endif

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
        @if($family->physical)Physical Abuse, @endif
        @if($family->emotional)Emotional Abuse, @endif
        @if($family->sexual)Sexual Abuse, @endif
        @if($family->neglect)Neglect, @endif
        @if($family->high_risk)High Risk, @endif
        @if($family->abuse_other)Other - {{$family->abuse_other_text}} @endif

    </span></h3>
    <h3>AAPI:</h3>
    <table>
        <tr>
          <td>
              @if($family->aapi_pre)
              <h4>Pre</h4>
              <table>
                  <tr>
                      <td>
                          Expectations
                      </td>
                      <td>
                          {{$preAapi->expectations}}
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Empathy
                      </td>
                      <td>
                          {{$preAapi->empathy}}
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Belief in Corporal Punishment
                      </td>
                      <td>
                          {{$preAapi->corporal}}
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Family Roles
                      </td>
                      <td>
                          {{$preAapi->roles}}
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Power-Interdependence
                      </td>
                      <td>
                          {{$preAapi->power}}
                      </td>
                  </tr>
              </table>
                  @endif
          </td>
            <td>
                @if($family->aapi_post)
               <h4> Post</h4>
                <table>
                    <tr>
                        <td>
                            Expectations
                        </td>
                        <td>
                            {{$postAapi->expectations}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Empathy
                        </td>
                        <td>
                            {{$postAapi->empathy}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Belief in Corporal Punishment
                        </td>
                        <td>
                            {{$postAapi->corporal}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Family Roles
                        </td>
                        <td>
                            {{$postAapi->roles}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Power-Interdependence
                        </td>
                        <td>
                            {{$postAapi->power}}
                        </td>
                    </tr>
                </table>
                    @endif
            </td>
        </tr>
    </table>
</h3>
@if(count($reabuses) >0)
    <h3>Re-Abuses</h3>
    <table>
    @foreach($reabuses as $reabuse)
        <tr>
            <td width="5%">
        Date: {{$reabuse->date}}
            </td>
            <td width="5%">
                Type: {{$reabuse->abuse->name}}
            </td>
            <td width="40%">
                Notes: {{$reabuse->notes}}
            </td>
        </tr>
    @endforeach
    </table>
@endif
@if($family->closed)
        <h2>Case Closed</h2>
        <h3>Closed Date: {{$family->close_date}}</h3>
        @foreach($reabuses as $reabuse)
        @endforeach
        <h3>Closed Notes: </h3>
        {{$family->close_notes}}
        <h3>Visits: {{$family->visits}}</h3>

    <h3>Reason for Close</h3>
    @if($family->close_successful)
            Successful
    @endif
    @if($family->close_refused)
            Refused Services
    @endif
    @if($family->close_relocated)
        <div class="row">
    Family Relocated
        </div>
    @endif
    @if($family->close_no_contact)
        Unable to Contact
    @endif
    @if($family->close_inappropriate)
           Inappropriate Case
    @endif
@endif
</body>