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
                      <h6 class="mb-0">Lastname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $employees->lastname }} 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Suffix</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->suffix }}
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
                      <h6 class="mb-0">Marital Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->maritalstatus }}
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
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $employees->dateofbirth }}
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
                      <h6 class="mb-0">Contact Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->contactnumber }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Person to Contact</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->persontocontact }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Person's Contact Number</h6>
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
                      <h6 class="mb-0">Course</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->course }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Graduate Studies</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->graduate }}
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
                      <h6 class="mb-0">Date Of Issuance PRC ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $employees->dateofissuance }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Validity PRC ID</h6>
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
                      <h6 class="mb-0">Status</h6>
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