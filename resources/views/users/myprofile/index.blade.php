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
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="250">
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-3" style="text-align: center;"></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   
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
                     {{ $myprofile->firstname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Middlename</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $myprofile->middlename }} 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Lastname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $myprofile->lastname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Suffix</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->suffix }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->address }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Marital Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->maritalstatus }}
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
                     {{ $myprofile->dateofbirth }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $myprofile->gender }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Blood Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $myprofile->bloodtype }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Contact Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->contactnumber }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Person to Contact</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->persontocontact }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Personal Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->personalemail }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Corporate Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->corporateemail }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Course</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->course }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Graduate Studies</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->graduate }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CSC Professional Eligibility</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->csc }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Issuance PRC ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->dateofissuance }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Validity PRC ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->dateofvalidity }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Personnel ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->personnel }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->status }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->department }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Position Title</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->position }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Joining</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->dateofjoining }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Leaving</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->dateofleaving }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Mandatory Retirement</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->dateofretirement }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Salary Garde</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->salary }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Step</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $myprofile->step }}
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