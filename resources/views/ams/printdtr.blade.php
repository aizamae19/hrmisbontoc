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
                        <div class="row-flex" style="display: flex;justify-content: flex-start;align-items: center;">
<!-- 
                            <div class="form-group col-md-3 m-t-20">
                                <label>Select Day</label>
                                <select name="dtr_day" class="form-control custom-select" required>
                                    @for($i=1; $i<=31; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div> -->

                            <div class="form-group col-md-3 m-t-20">
                                <label>Select Month</label>
                                <input type="text" value="{{ $d = date('m')}}" hidden>    
                                <select name="dtr_month" value="" class="form-control custom-select" required>
                                    <option value="{{$d}}">{{ date('F') }}</option>
                                    @for($i=1; $i<=12; $i++)
                                        @if($d != $i){
                                            <option value="{{$i}}">{{ date('F', strtotime("2023-$i-01")) }}</option>
                                        }
                                        @endif
                                    @endfor
                                </select>
                            </div>    
                            <div class="form-group col-md-3 m-t-20">
                                <label>Select Year</label>
                                <select name="dtr_year" value="" class="form-control custom-select" required>
                                    @for($i=date('Y'); $i>2019; $i--)
                                        <option value="{{$i}}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>  
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
<<<<<<< HEAD
                                            <th>Biometric No.</th>
                                            <th>Employee Name</th>
                                            <th>Personnel ID</th>
                                            <th>Department </th>
                                            <th>Contact Number </th>
                                            <th>Status</th>
=======
                                            
                                            <th>Biometric No.</th>
                                            <th>Employee Name</th>
                                            <th>Department</th>
                                            <th>Contact Number </th>
                                            <th>Employee Status</th>
>>>>>>> origin/ams
                                            <th >Position</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($employees))
                                            @foreach($employees as $employee)
                                                 <tr>
                                                    <td>{{ $employee->biometric }}</td>
                                                    <td>{{ $employee->lastname }}, {{ $employee->firstname }} {{ $employee->middlename }}</td>
<<<<<<< HEAD
                                                    <td>{{ $employee->personnel }}</td>
=======
>>>>>>> origin/ams
                                                    <td>{{ $employee->department }}</td>
                                                    <td>{{ $employee->contactnumber }}</td>
                                                    <td>{{ $employee->status }}</td>
                                                    <td>{{ $employee->position }}</td>

                                                    <td class="jsgrid-align-center ">
                                                        <button data-url="{{ url('/printdtr/').'/'.$employee->biometric }}" title="print" class="btn btn-sm btn-primary waves-effect waves-light printdtr"><i class="fa fa-print"></i> </button>
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
            </di>




<script>
    $(document).ready(function() {
        $("#employees123").DataTable({ 
            columnDefs:[
                { orderable: false, targets: [4] }
            ],
            order:[0,'asc']
        });

        $('.dataTable td, .dataTable th').addClass('py-1 px-2 align-middle');
    });
</script>






            <footer class="footer">   </footer>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
            <script type="text/javascript">
                $('.printdtr').on('click', function(e){
                    e.preventDefault();

                    var link = $(this).attr('data-url');
                    // var day = $('select[name="dtr_day"]').val();
                    var month = $('select[name="dtr_month"]').val();
                    var year = $('select[name="dtr_year"]').val();
                    url = link+'/'+month+'/'+year;

                    var newWindow = window.open(url, '_blank');
                    newWindow.onload = function() {
                        newWindow.print();
                    };

                });

                // load_page();
                // function load_page() {
                // var now = new Date();

                //     var day = ("0" + now.getDate()).slice(-2);
                //     // var month = ("0" + (now.getMonth() + 1)).slice(-2);

                //     // var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

                //     $('input[name="dateFrom"]').val(today);
                //     $('input[name="dateTo"]').val(today);
                // }
        
                </script>

@endsection
