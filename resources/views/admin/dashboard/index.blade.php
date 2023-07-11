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
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-primary"><i class="ti-user"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">
                                    10  Employees</h3>
                                        <a href="{{ route('employee')}}" class="text-muted m-b-0">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-info"><i class="ti-file"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">
                                             3 Leaves
                                        </h3>
                                        <a href="{{ route('leaveapplication')}}" class="text-muted m-b-0">View Details</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Row -->
                <!-- Row -->
                
                <div class="row ">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-info">
                            <div class="box bg-primary text-center">
                                <h1 class="font-light text-white">
                                    0                                </h1>
                                <h6 class="text-white">Former Employees</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-info card-inverse">
                            <div class="box text-center">
                                <h1 class="font-light text-white">
                                             1 
                                </h1>
                                <h6 class="text-white">Pending Leave Application</h6>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- ============================================================== -->
            </div> 
            <div class="container-fluid">
                                                                        
                  
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Notice Board</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive slimScrollDiv" style="height:600px;overflow-y:scroll">
                                    <table class="table table-hover table-bordered earning-box ">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>File</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="scrollbar" style="vertical-align:top">
                                                <td>This is a demo notice for all!</td>
                                                <td><mark><a href="{{asset('assets/images/notice/sample_image.jpg')}}" target="_blank">sample_image.jpg</a></mark>
                                                </td>
                                                <td style="width:100px">2022-01-01</td>
                                            </tr>
                                               <tr class="scrollbar" style="vertical-align:top">
                                                <td>Warning for Violation of Office Decorum</td>
                                                <td><mark><a href="{{asset('assets/images/notice/offnot2.png')}}" target="_blank">offnot2.png</a></mark>
                                                </td>
                                                <td style="width:100px">2021-12-27</td>
                                            </tr>
                                                <tr class="scrollbar" style="vertical-align:top">
                                                <td>Office Decorum Notice to Staff Members</td>
                                                <td><mark><a href="{{asset('assets/images/notice/offnot1.png')}}" target="_blank">offnot1.png</a></mark>
                                                </td>
                                                <td style="width:100px">2021-12-21</td>
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
                                               <td>Saint Patrick's Day</td>
                                               <td>2021-03-17</td>
                                           </tr>
                                     </tbody> 
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
<script>
  $(".to-do").on("click", function(){
      //console.log($(this).attr('data-value'));
      $.ajax({
          url: "Update_Todo",
          type:"POST",
          data:
          {
          'toid': $(this).attr('data-id'),         
          'tovalue': $(this).attr('data-value'),
          },
          success: function(response) {
              location.reload();
          },
          error: function(response) {
            console.error();
          }
      });
  });           
</script>                                               
            </div>
@endsection