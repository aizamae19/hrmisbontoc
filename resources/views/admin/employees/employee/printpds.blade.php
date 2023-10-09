@extends('layouts.default')

@section('content')
         
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
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
                
            <div class="row">
                <div class="col-12" >
                    <div class="card"style=" width: 100%;">
                        <h4 style="padding-left:1%; color:black;padding-top:1%;"><b>Select Date</b></h4>
                        <div class="form-group" style="padding-left:5%;">
                             <label style="color:black;"><b>From</b></label>
                             <input type="date" id="dateTo" name="dateFrom" style="width: 200px; ">

                        </div>
                        <div class="form-group"  style="padding-left:5%; ">
                             <label  style="color:black;"><b>To</b></label>
                             <input type="date" name="dateTo" style=" width: 200px;">
                        </div>
                    </div>
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>

                                            <th>Employee Name</th>
                                            <th>Employee ID</th>
                                            <th>Email </th>
                                            <th>Contact </th>
                                            <th>Position</th>
                                            <th >Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($employees))
                                            @foreach($employees as $employee)
                                                 <tr>
                                                    <td>{{ $employee->lastname }}, {{ $employee->firstname }} {{ $employee->middlename }}</td>
                                                    <td>{{ $employee->employee_id }}</td>
                                                    <td>{{ $employee->email }}</td>
                                                    <td>{{ $employee->contact }}</td>
                                                    <td>{{ $employee->usertype }}</td>
                                                    <td class="jsgrid-align-center ">
                                                        <button data-url="{{ url('/printpds/').'/'.$employee->id }}" title="print" class="btn btn-sm btn-primary waves-effect waves-light printpds"><i class="fa fa-print"></i> </button>
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
            <footer class="footer"> © 2023 | Developed By GenIT Bangladesh </footer>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
            <script type="text/javascript">
                $('.printpds').on('click', function(e){
                    e.preventDefault();
                    var link = $(this).attr('data-url');
                    var newWindow = window.open(url, '_blank');

                    newWindow.onload = function() {
                        newWindow.print();
                    };

                });
            </script>

@endsection
