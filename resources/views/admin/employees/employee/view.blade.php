@extends('layouts.default')

@section('content')
    <link href="{{ asset('style/style.css')}}" rel="stylesheet">

  <div class="container mt-2"  >
        <div class="card mb-7" style="max-width: 500px;  ">
            <div class="row g-12" style="margin-right: -25.75rem">
                <div class="col-md-12">
          
      <div class="row card p-1" >
      @include('layouts.partials.messages')
         <form action="{{ route('employee.edit.view') }}"  method="post">
          @csrf
            <div class="col-md-12">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset('assets/images/users/userav-min.png')}}" alt="Admin" class="rounded-circle" width="250">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Surname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $employees->lastname }} 
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Firstname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $employees->firstname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Middlename</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $employees->middlename }} 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name Extension (Jr., Sr.)</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->suffix }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->dateofbirth }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-12" >
              <div class="card mb-3" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Place of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->placeofbirth }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Purok/Street</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->address }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Barangay</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->barangay }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Municipality</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->municipality }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Town/Province</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->province }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Civil Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->maritalstatus }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $employees->gender }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Blood Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $employees->bloodtype }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->contactnumber }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Person to Contact in Case of Emergency</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->persontocontact }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Contact Number of Contact Person</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->contact }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Personal Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->personalemail }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Corporate Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->corporateemail }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">GSIS ID Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->gsis }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">PAG-IBIG ID Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->pagibig }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Philhealth Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->philhealth }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">SSS Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->sss }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">TIN Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->tin }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">UMID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->umid }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Spouse's Surname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->spousesurname }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Spouse's Firstname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->spousefirstname }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Spouse's Middlename</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->spousemiddlename }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Occupation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->occupation }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Business Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->businessname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Business Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->businessaddress }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telephone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->telephone }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name Extension</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->extension }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Father Surname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->fathersurname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Father Firstname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->fatherfirstname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Father Middlename</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->fathermiddlename }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name Extension</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->nameextension }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Maiden Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->maidenname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mother Surname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->mothersurname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mother Firstname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->motherfirstname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mother Middlename</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->mothermiddlename }}
                    </div>
                  </div>
                  <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col">Level</th>
              <th scope="col">Name of School</th>
              <th scope="col">Basic Education/Degree/Course</th>
              <th scope="col">Highest Level/Units Earned</th>
              <th scope="col">Year Graduated</th>
            </tr>
          </thead>
          <tbody>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>
                Elementary
              </td>
              <td>{{ $employees->elementaryschool }}</td>
              <td>{{ $employees->elementarybasiceducation }}</td>
              <td>{{ $employees->elemhighestlevel }}</td>
              <td>{{ $employees->yeargradelementary }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Secondary</td>
              <td>{{ $employees->secondaryschool }}</td>
              <td>{{ $employees->secondarybasiceducation }}</td>
              <td>{{ $employees->secondhighestlevel }}</td>
              <td>{{ $employees->yeargradsecondary }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>Vocational</td>
              <td>{{ $employees->vocationalschool }}</td>
              <td>{{ $employees->vocationalbasiceducation }}</td>
              <td>{{ $employees->vocationhighestlevel }}</td>
              <td>{{ $employees->yeargradvocational }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <td>College</td>
             <td>{{ $employees->course }}</td>
              <td>{{ $employees->collegebasiceducation }}</td>
              <td>{{ $employees->highestlevel }}</td>
              <td>{{ $employees->yeargradcollege }}</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
            <td>Graduate Studies</td>
              <td>{{ $employees->graduatestudies }}</td>
              <td>{{ $employees->graduatestudiesbasiceducation }}</td>
              <td>{{ $employees->graduate }}</td>
              <td>{{ $employees->yeargradstudies }}</td>
            </tr>
            
          </tbody>
        </table>
      </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Year Graduated in Graduate Studies</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->yeargradstudies}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Rating</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->rating}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Examination</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->dateofexamination}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Place of Examination</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->placeofexamination}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">License Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->licensenumber}}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CSC Professional Eligibility</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->csc }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Issuance-PRC ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->dateofissuance }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Validity-PRC ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->dateofvalidity }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Personnel ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->personnel }}
                    </div>
                  </div>
                  <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Biometric Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->biometric }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Employment Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->status }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->department }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Position Title</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->position }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Joining</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->dateofjoining }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Leaving</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->dateofleaving }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Mandatory Retirement</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->dateofretirement }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Salary Garde</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->salary }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Step</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->step }}
                    </div>
                  </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> 
    </div>
  </form>
</div>
</div>

</div>

@endsection