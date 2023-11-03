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
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">Leave Application</h4>
                            </div>
                            <form method="post" action="Add_Applications" id="leaveapply" enctype="multipart/form-data">
                            <div class="modal-body">
                                
                                <div class="form-group">
                                    <label>OFFICE/DEPARTMENT</label>
                                     <input type="text" name="office" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>

                                <div class="form-group">
                                    <label>EMPLOYEE NAME</label>
                                     <input type="text" name="employeename" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>DATE OF FILING</label>
                                     <input type="date" name="dateoffiling" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>POSITION</label>
                                     <input type="text" name="position" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>SALARY</label>
                                     <input type="text" name="salary" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>6.A TYPE OF LEAVE TO BE AVAILED OF:</label>
                                    <br>
                                    <input type="checkbox" id="vacationleave" name="vacationleave" value="vacationleave">
                                    <label for="vacationleave"> Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="mandatoryleave" name="mandatoryleave" value="mandatoryleave">
                                    <label for="mandatoryleave"> Mandatory/Forced Leave (Sec. 25, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="sickleave" name="sickleave" value="sickleave">
                                    <label for="sickleave"> Sick Leave (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="maternityleave" name="maternityleave" value="maternityleave">
                                    <label for="maternityleave"> Maternity Leave (R.A. No. 11210 / IRR issued by CSC, DOLE and SSS)</label><br>
                                    <input type="checkbox" id="paternityleave" name="paternityleave" value="paternityleave">
                                    <label for="paternityleave"> Paternity Leave (R.A. No. 8187 / CSC MC No. 71, s. 1998, as amended)</label><br>
                                    <input type="checkbox" id="specialprivilegeleave" name="specialprivilegeleave" value="specialprivilegeleave">
                                    <label for="specialprivilegeleave"> Special Privilege Leave (Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="soloparentleave" name="soloparentleave" value="soloparentleave">
                                    <label for="soloparentleave"> Solo Parent Leave (RA No. 8972 / CSC MC No. 8, s. 2004)</label><br>
                                    <input type="checkbox" id="studyleave" name="studyleave" value="studyleave">
                                    <label for="studyleave"> Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="vawcleave" name="vawcleave" value="vawcleave">
                                    <label for="vawcleave"> 10-Day VAWC Leave (RA No. 9262 / CSC MC No. 15, s. 2005)</label><br>
                                    <input type="checkbox" id="rehabilitation" name="rehabilitation" value="rehabilitation">
                                    <label for="rehabilitation"> Rehabilitation Privilege (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="specialleavebenefits" name="specialleavebenefits" value="specialleavebenefits">
                                    <label for="specialleavebenefits"> Special Leave Benefits for Women (RA No. 9710 / CSC MC No. 25, s. 2010)</label><br>
                                    <input type="checkbox" id="specialemergency" name="specialemergency" value="specialemergency">
                                    <label for="specialemergency"> Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)</label><br>
                                    <input type="checkbox" id="adoptionleave" name="adoptionleave" value="adoptionleave">
                                    <label for="adoptionleave"> Adoption Leave (R.A. No. 8552)</label><br>
                                    <input type="checkbox" id="other" name="other" value="other">
                                    <label for="other">Others:</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="other" name="other" value="">
                                </div>
                                <div class="form-group">
                                    <label>6.B DETAILS OF LEAVE</label>
                                    <br>
                                    <label>In case of Vacation/Special Privilege Leave:</label><br>
                                    <input type="checkbox" id="philippines" name="philippines" value="philippines">
                                    <label for="philippines">Within the Philippines</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="philippines" name="philippines" value=""><br>
                                    <input type="checkbox" id="abroad" name="abroad" value="abroad">
                                    <label for="abroad">Abroad(Specify)</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="abroad" name="abroad" value="">
                                    <br>
                                    <label>In case of Sick Leave:</label><br>
                                    <input type="checkbox" id="inhospital" name="inhospital" value="inhospital">
                                    <label for="inhospital">In Hospital(Specify Illness)</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="inhospital" name="inhospital" value=""><br>
                                    <input type="checkbox" id="outpatient" name="outpatient" value="outpatient">
                                    <label for="outpatient">Out Patient(Specify Illness)</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="outpatient" name="outpatient" value=""><br>
                                    <label>In case of Special Leave Benefits for Women:</label><br>
                                    <label for="leavebenefits">(Specify Illness)</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="leavebenefits" name="leavebenefits" value=""><br>
                                    <label>In case of Study Leave:</label><br>
                                    <input type="checkbox" id="completion" name="completion" value="completion">
                                    <label for="completion">Completion of Master's Degree</label>
                                    <br>
                                    <input type="checkbox" id="boardexam" name="boardexam" value="boardexam">
                                    <label for="boardexam">BAR/Board Examination Review </label>
                                </div>
                                <div class="form-group">
                                    <span style="color:red" id="total"></span>
                                    <div class="span pull-right">
                                        <button class="btn btn-info fetchLeaveTotal">Fetch Total Leave</button>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Leave Duration</label><br>
                                    <input name="type" type="radio" id="radio_1" data-value="Half" class="duration" value="Half Day" checked="">
                                    <label for="radio_1">Hourly</label>
                                    <input name="type" type="radio" id="radio_2" data-value="Full" class="type" value="Full Day">
                                    <label for="radio_2">Full Day</label>
                                    <input name="type" type="radio" class="with-gap duration" id="radio_3" data-value="More" value="More than One day">
                                    <label for="radio_3">Above a Day</label>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" id="hourlyFix">Date</label>
                                    <input type="text" name="startdate" class="form-control mydatetimepickerFull" id="recipient-name1" required>
                                </div>
                                <div class="form-group" id="enddate" style="display:none">
                                    <label class="control-label">End Date</label>
                                    <input type="text" name="enddate" class="form-control mydatetimepickerFull" id="recipient-name1">
                                </div>

                                <div class="form-group" id="hourAmount">
                                    <label>Length</label>
                                    <select  id="hourAmountVal" class=" form-control custom-select"  tabindex="1" name="hourAmount" required>
                                        <option value="">Select Hour</option>
                                        <option value="1">One hour</option>
                                        <option value="2">Two hour</option>
                                        <option value="3">Three hour</option>
                                        <option value="4">Four hour</option>
                                        <option value="5">Five hour</option>
                                        <option value="6">Six hour</option>
                                        <option value="7">Seven hour</option>
                                        <option value="8">Eight hour</option>
                                    </select>
                                </div>

                               <!--  <div class="form-group" >
                                    <label class="control-label">Duration</label>
                                    <input type="number" name="duration" class="form-control" id="leaveDuration">
                                </div> --> 
                                <div class="form-group">
                                    <label class="control-label">Reason</label>
                                    <textarea class="form-control" name="reason" id="message-text1"></textarea>                                                
                                </div>
                                                                               
                            </div>
                            <script>
                                $(document).ready(function () {
                                    $('#leaveapply input').on('change', function(e) {
                                        e.preventDefault(e);

                                        // Get the record's ID via attribute  
                                        var duration = $('input[name=type]:checked', '#leaveapply').attr('data-value');
                                        console.log(duration);

                                        if(duration =='Half'){
                                            $('#enddate').hide();
                                            $('#hourlyFix').text('Date');
                                            $('#hourAmount').show();
                                        }
                                        else if(duration =='Full'){
                                            $('#enddate').hide();  
                                            $('#hourAmount').hide();  
                                            $('#hourlyFix').text('Date');  
                                        }
                                        else if(duration =='More'){
                                            $('#enddate').show();
                                            $('#hourAmount').hide();
                                        }
                                    });
                                    $('#appmodel').on('hidden.bs.modal', function () {
                                        location.reload();
                                    });
                                });                                                          
                            </script>
                            <div class="modal-footer">
                                <input type="hidden" name="id" class="form-control" id="recipient-name1" required> 
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            </form>
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