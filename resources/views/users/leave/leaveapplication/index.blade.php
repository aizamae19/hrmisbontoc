@extends('layouts.users')

@section('content')
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><i class="fa fa-clone" style="color:#1976d2"> </i> Application</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Leave Application</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="{{ route('userleaveapplication.add') }}" class="text-white"><i class="" aria-hidden="true"></i> Add Leave Application</a></button>
                    </div>
                </div> 
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Application List                        
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Office/Department</th>
                                        <th>Employee Name</th>
                                        <th>Date of Filing</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($leaveapplications))
                                            @foreach($leaveapplications as $leaveapplications)
                                     <tr style="vertical-align:top">
                                        <td>{{$leaveapplications->office}}</td>
                                        <td>{{$leaveapplications->employeename}}</td>
                                        <td>{{$leaveapplications->dateoffiling}}</td>
                                        <td>@if($leaveapplications->status == 'Approved')
                                                <span class="badge badge-success">Approved</span>
                                            @else($leaveapplications->status == 'Rejected')
                                                <span class="badge badge-danger">Rejected</span>
                                            @endif</td>
                                        <!-- <td class="jsgrid-align-center">
                                            <a href="{{ url('/user/leaveapplication/index/view/').'/'.$leaveapplications->id}}" title="View" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-eye"></i></a> 
                                        </td> -->
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

@endsection