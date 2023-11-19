@extends('layouts.users')

@section('content')
@if(isset($employee))
    <section style="background-color: #eee; color:black;">
  <div class="container py-5"> 
    <div class="row" >
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }} {{ $employee->suffix}}</h5>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Change Profile</button>
              <button type="button" class="btn btn-outline-primary ms-1">Edit</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <p class="mb-4" style="color: #000;"><b>Personal Background</b></p>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }} {{ $employee->suffix}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Suffix</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->suffix }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->address }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Marital Status</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->maritalstatus }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card mb-6">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Birth</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofbirth }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->gender }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Blood Type</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->bloodtype }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Contact Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->contactnumber }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Person to Contact</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->persontocontact }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Personal Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->personalemail }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Corporate Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->corporateemail }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="col-lg-14">
        <div class="card mb-6">
          <div class="card-body">
            <p class="mb-4" style="color: #000;"><b>Educational Background</b></p>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Course</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->course }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Graduate Studies</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->graduate }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">CSC Professional Eligibility</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->csc }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Issuance PRC ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofissuance }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Validity PRC ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofvalidity }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

          <div class="col-lg-14">
        <div class="card mb-6">
          <div class="card-body">
            <p class="mb-4" style="color: #000;"><b>Work Background</b></p>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Personnel ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->personnel }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Status</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->status }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Department</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->department }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Position Title</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->position }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Joining</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofjoining }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Mandatory Retirement</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->dateofleaving }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Salary Grade</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->salary }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Step</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->step }}</p>
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
</section>
@endif
@endsection