@extends('layouts.default')

@section('content')
            @include('layouts.partials.messages')
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-users" aria-hidden="true"></i> Employee</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="{{route('employee.add')}}" class="text-white"><i class="" aria-hidden="true"></i> Add Employee</a></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                            </div>
                                <div class="table-responsive ">
                                    <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Suffix</th>
                                                <th>Address</th>
                                                <th>Marital Status</th>
                                                <th>Birthdate</th>
                                                <th>Gender</th>
                                                <th>Blood Type</th>
                                                <th>Contact Number</th>
                                                <th>Person to Contact</th>
                                                <th>Personal Email</th>
                                                <th>Corporate Email</th>
                                                <th>Course</th>
                                                <th>Graduate Studies</th>
                                                <th>CSC Professional Eligibility</th>
                                                <th>Date of Issuance PRC ID</th>
                                                <th>Date of Validity PRC ID</th>
                                                <th>Personnel ID</th>
                                                <th>Status</th>
                                                <th>Department</th>
                                                <th>Position Title</th>
                                                <th>Date of Joining</th>
                                                <th>Date of Leaving</th>
                                                <th>Date of Mandatory Retirement</th>
                                                <th>Salary Grade</th>
                                                <th>Step</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($employees))
                                            @foreach($employees as $employee)
                                            <tr>
                                                <td>{{$employee->firstname}}</td>
                                                <td>{{$employee->middlename}}</td>
                                                <td>{{$employee->lastname}}</td>
                                                <td>{{$employee->suffix}}</td>
                                                <td>{{$employee->address}}</td>
                                                <td>{{$employee->maritalstatus}}</td>
                                                <td>{{$employee->dateofbirth}}</td>
                                                <td>{{$employee->gender}}</td>
                                                <td>{{$employee->bloodtype}}</td>
                                                <td>{{$employee->contactnumber}}</td>
                                                <td>{{$employee->persontocontact}}</td>
                                                <td>{{$employee->personalemail}}</td>
                                                <td>{{$employee->corporateemail}}</td>
                                                <td>{{$employee->course}}</td>
                                                <td>{{$employee->graduate}}</td>
                                                <td>{{$employee->csc}}</td>
                                                <td>{{$employee->dateofissuance}}</td>
                                                <td>{{$employee->dateofvalidity}}</td>
                                                <td>{{$employee->personnel}}</td>
                                                <td>{{$employee->status}}</td>
                                                <td>{{$employee->department}}</td>
                                                <td>{{$employee->position}}</td>
                                                <td>{{$employee->dateofjoining}}</td>
                                                <td>{{$employee->dateofleaving}}</td>
                                                <td>{{$employee->dateofretirement}}</td>
                                                <td>{{$employee->salary}}</td>                            
                                                <td>{{$employee->step}}</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="{{ url('/employee/index/edit/').'/'.$employee->id}}" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                             @endforeach
                                        @endif   
                                     </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
            <script type="text/javascript">
                $('.printpds').on('click', function(e){
                    e.preventDefault();
                    var link = $(this).attr('data-url');
                    var newWindow = window.open(link, '_blank');

                    newWindow.onload = function() {
                        newWindow.print();
                    };

                });
            </script>
@endsection