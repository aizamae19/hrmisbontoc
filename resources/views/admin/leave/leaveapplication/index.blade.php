@extends('layouts.default')

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
                    <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="{{ route('leave.holiday')}}" class="text-white"><i class="" aria-hidden="true"></i> Holiday List</a></button>
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
                                        <td class="jsgrid-align-center">
                                            <a href="" title="View" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-eye"></i></a>
                                            <a href="" title="Approve" class="btn btn-sm btn-success waves-effect waves-light Status" data-employeeId=Joh1474  data-id="4" data-value="Approve" data-duration="2" data-type="1">Approve</a>       
                                            <a href="" title="Reject" class="btn btn-sm btn-danger waves-effect waves-light  Status" data-id = "4" data-value="Rejected" >Reject</a> 
                                            
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



<script>
    $(document).ready(function () {

        $('.fetchLeaveTotal').on('click', function (e) {
            e.preventDefault();
            var selectedEmployeeID = $('.selectedEmployeeID').val();
            var leaveTypeID = $('.assignleave').val();
            //console.log(selectedEmployeeID, leaveTypeID);
            $.ajax({
                url: 'LeaveAssign?leaveID=' + leaveTypeID + '&employeeID=' +selectedEmployeeID,
                method: 'GET',
                data: '',
            }).done(function (response) {
                //console.log(response);
                $("#total").html(response);
            });
        });
    });
</script>
        <script>
        /*DATETIME PICKER*/
          $("#bbbSubmit").on("click", function(event){
              event.preventDefault();
              var typeid = $('.typeid').val();
              var datetime = $('.mydatetimepicker').val();
              var emid = $('.emid').val();
              //console.log(datetime);
              $.ajax({
                  url: "GetemployeeGmLeave?year="+datetime+"&typeid="+typeid+"&emid="+emid,
                  type:"GET",
                  dataType:'',
                  data:'data',          
                  success: function(response) {
                      // console.log(response);
                      $('.leaveval').html(response);             
                  },
                  error: function(response) {
                    // console.log(response);
                  }
              });
          });			
        </script>  


        <script type="text/javascript">
        /*PARSE DURATION DATA*/
        $('.duration').on('input',function() {
            var day = parseInt($('.duration').val());
            var hour = 8;
            $('.totalhour').val((day * hour ? day * hour : 0).toFixed(2));
        });
        </script>
<script>
  $(".Status").on("click", function(event){
      event.preventDefault();
      // console.log($(this).attr('data-value'));
      $.ajax({
          url: "approveLeaveStatus",
          type:"POST",
          data:
          {
              'employeeId': $(this).attr('data-employeeId'),
              'lid': $(this).attr('data-id'),
              'lvalue': $(this).attr('data-value'),
              'duration': $(this).attr('data-duration'),
              'type': $(this).attr('data-type')
          },
          success: function(response) {
            // console.log(response);
            $(".message").fadeIn('fast').delay(30000).fadeOut('fast').html(response);
            window.setTimeout(function(){location.reload()}, 30000);
          },
          error: function(response) {
            //console.error();
          }
      });
  });           
</script>

<script type="text/javascript">
            $(document).ready(function() {
                $(".leaveapp").click(function(e) {
                    e.preventDefault(e);
                    // Get the record's ID via attribute
                    var iid = $(this).attr('data-id');
                    $('#leaveapply').trigger("reset");
                    $('#appmodel').modal('show');
                    $.ajax({
                        url: 'LeaveAppbyid?id=' + iid,
                        method: 'GET',
                        data: '',
                        dataType: 'json',
                    }).done(function(response) {
                        // console.log(response);
                        // Populate the form fields with the data returned from server
                        $('#leaveapply').find('[name="id"]').val(response.leaveapplyvalue.id).end();
                        $('#leaveapply').find('[name="emid"]').val(response.leaveapplyvalue.em_id).end();
                        $('#leaveapply').find('[name="applydate"]').val(response.leaveapplyvalue.apply_date).end();
                        $('#leaveapply').find('[name="typeid"]').val(response.leaveapplyvalue.typeid).end();
                        $('#leaveapply').find('[name="startdate"]').val(response.leaveapplyvalue.start_date).end();
                        $('#leaveapply').find('[name="enddate"]').val(response.leaveapplyvalue.end_date).end();
                        $('#leaveapply').find('[name="reason"]').val(response.leaveapplyvalue.reason).end();
                        $('#leaveapply').find('[name="status"]').val(response.leaveapplyvalue.leave_status).end();

                        if(response.leaveapplyvalue.leave_type == 'Half day') {
                            $('#appmodel').find(':radio[name=type][value="Half Day"]').prop('checked', true).end();
                            $('#hourAmount').show().end();
                            $('#enddate').hide().end();
                        } else if(response.leaveapplyvalue.leave_type == 'Full Day') {
                            $('#appmodel').find(':radio[name=type][value="Full Day"]').prop('checked', true).end();
                            $('#hourAmount').hide().end();
                        } else if(response.leaveapplyvalue.leave_type == 'More than One day'){
                            $('#appmodel').find(':radio[name=type][value="More than One day"]').prop('checked', true).end();
                            $('#hourAmount').hide().end();
                            $('#enddate').show().end();
                        }

                        $('#hourAmountVal').val(response.leaveapplyvalue.leave_duration).show().end();
                    });
                });
            });
        </script>                     
            </div>

@endsection