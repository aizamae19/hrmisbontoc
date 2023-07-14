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
                <div class="col-12">
                    <div class="card">
                        <h4>Select Date</h4>
                        <div class="form-group">
                             <label>From</label>
                             <input type="date" name="dateFrom">
                        </div>
                        <div class="form-group">
                             <label>To</label>
                             <input type="date" name="dateTo">
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
                                                        <a href="" title="print" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-print"></i></a>
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
            <script type="text/javascript">
                function printPage(url) {
                  var newWindow = window.open(url, '_blank');
                  newWindow.onload = function() {
                    newWindow.print();
                  };
                }

            </script>
@endsection