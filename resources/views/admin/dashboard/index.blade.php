@extends('layouts.default')

@section('content')
    <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-braille" style="color:#1976d2"></i>&nbsp Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- Container fluid  -->
            <div class="container-fluid" style="background-image:url('../images/bontoc.jpeg'); background-size: cover; height: 470px;">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-primary"><i class="ti-user"></i></div>
                                    <div class="m-l-10 align-self-center">
                                    @if($noemployees=App\Models\Employee::count())
                                        <h3 class="m-b-0">
                                            {{$noemployees}}
                                        </h3>
                                    @endif
                                        <a href="{{ route('employee.employees')}}" class="text-muted m-b-0">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-info"><i class="ti-file"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        @if($noleaveapplications=App\Models\Leaveapplication::count())
                                        <h3 class="m-b-0">
                                            {{$noleaveapplications}}
                                        </h3>
                                    @endif
                                        <a href="{{ route('leaveapplication')}}" class="text-muted m-b-0">View Details</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-danger"><i class="ti-user"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">
                                            
                                        </h3>
                                        <a href="" class="text-muted m-b-0">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Row -->
                <!-- Row -->
                
                <div class="row ">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-inverse card-info">
                            <div class="box bg-primary text-center">
                                @if($noemployees=App\Models\Employee::count())
                                <h1 class="font-light text-white">
                                    {{$noemployees}}
                                </h1>
                                @endif
                                <h6 class="text-white">Former Employees</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-info card-inverse">
                            <div class="box text-center">
                                @if($noleaveapplications=App\Models\LeaveApplication::count())
                                <h1 class="font-light text-white">
                                    {{$noleaveapplications}}
                                </h1>
                                @endif
                                <h6 class="text-white">Pending Leave Application</h6>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-inverse card-danger">
                            <div class="box text-center">
                                <h1 class="font-light text-white">
                                </h1>
                                <h6 class="text-white">Attendances</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="container-fluid">

                                                                        
                  
                <!-- Row -->
               <!-- <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Notice Board</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive slimScrollDiv" style="height:600px;overflow-y:scroll">
                                    <table class="table table-hover table-bordered earning-box ">
                                        <thead>
                                            <tr> -->
                                                <!-- <th>Title</th> --> 
                                                <!-- <th>File</th> -->
                                                <!-- <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="scrollbar" style="vertical-align:top">
                                                <td></td>
                                                <td><mark><a href="{{route('notice')}}" target="_blank"></a></mark>
                                                </td>
                                                <td style="width:100px"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Holidays
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" style="height:600px;overflow-y:scroll">
                                    <table class="table table-hover table-bordered earning-box">
                                       <thead>
                                            <tr>
                                                <th>Holiday Name</th>
                                                <th>Date</th>
                                            </tr>                                           
                                       </thead>
                                       <tbody>
                                            <tr style="background-color:#e3f0f7">
                                               <td></td>
                                               <td></td>
                                           </tr>
                                     </tbody> 
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                               
            </div> --> 
@endsection