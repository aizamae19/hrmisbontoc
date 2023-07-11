@extends('layouts.default')

@section('content')
<style>
    .fc-fri {
        background-color: #FFEB3B;
    }
    .fc-event, .fc-event-dot {
        background-color: #FF5722;
    }
    .fc-event {
        border: 0;
    }
    .fc-day-grid-event {
        margin: 0;
        padding: 0;
    }
    .dayWithEvent {
        background: #FFEB3B;
        cursor: pointer;
    }
</style>
            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-bullhorn" style="color:#1976d2"></i> Holiday</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Holiday</li>
                    </ol>
                </div>
            </div>
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
<!--
                <div class="row m-m-10">
                    <div class="col-12">
                        <div class="card-body b-l calender-sidebar">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>

                 CALENDAR MODAL 
                <div class="modal none-border" id="my-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add Event</strong></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>-->

                <div class="row m-b-10"> 
                    <div class="col-12">
                                            <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a data-toggle="modal" data-target="#holysmodel" data-whatever="@getbootstrap" class="text-white"><i class="" aria-hidden="true"></i> Add Holiday </a></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="{{ route('leaveapplication')}}" class="text-white"><i class="" aria-hidden="true"></i>  Leave Application</a></button>
                                            </div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Holidays List  </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Start Date </th>
                                                <th>End Date </th>
                                                <th>Days</th>
                                                <th>Year</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Start Date </th>
                                                <th>End Date </th>
                                                <th>Number of days</th>
                                                <th>Year</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                                                                       <tr>
                                                <td>New Year's Eve</td>
                                                <td>30th of December 2021</td>
                                                <td>31st of January 2022</td>
                                                <td>32</td>
                                                <td>12-2021</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light holiday" data-id="1"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a onclick="confirm('Are you sure, you want to delete this?')" href="#" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light holidelet" data-id="1"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td>New Year's Day</td>
                                                <td>1st of January 2022</td>
                                                <td>2nd of January 2022</td>
                                                <td>1</td>
                                                <td>01-2022</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light holiday" data-id="3"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a onclick="confirm('Are you sure, you want to delete this?')" href="#" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light holidelet" data-id="3"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td>Christmas</td>
                                                <td>23rd of December 2021</td>
                                                <td>25th of December 2021</td>
                                                <td>2</td>
                                                <td>12-2021</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light holiday" data-id="5"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a onclick="confirm('Are you sure, you want to delete this?')" href="#" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light holidelet" data-id="5"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td>Thanksgiving</td>
                                                <td>23rd of November 2021</td>
                                                <td>26th of November 2021</td>
                                                <td>3</td>
                                                <td>11-2021</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light holiday" data-id="6"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a onclick="confirm('Are you sure, you want to delete this?')" href="#" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light holidelet" data-id="6"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td>Halloween</td>
                                                <td>31st of October 2021</td>
                                                <td>31st of October 2021</td>
                                                <td>0</td>
                                                <td>10-2021</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light holiday" data-id="7"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a onclick="confirm('Are you sure, you want to delete this?')" href="#" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light holidelet" data-id="7"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td>Saint Patrick's Day</td>
                                                <td>17th of March 2021</td>
                                                <td>17th of March 2021</td>
                                                <td>0</td>
                                                <td>03-2021</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light holiday" data-id="8"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a onclick="confirm('Are you sure, you want to delete this?')" href="#" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light holidelet" data-id="8"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                                                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="modal fade" id="holysmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Holidays</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form method="post" action="Add_Holidays" id="holidayform" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        
                                            <div class="form-group">
                                                <label class="control-label">Name of Holiday</label>
                                                <input type="text" name="holiname" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Start Date</label>
                                                <input type="text" name="startdate" class="form-control mydatetimepickerFull" id="recipient-name1"  value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">End Date</label>
                                                <input type="text" name="enddate" class="form-control mydatetimepickerFull" id="recipient-name1" value="">
                                            </div><!--
                                            <div class="form-group">
                                                <label class="control-label">Number of Days</label>
                                                <input type="number" name="nofdate" class="form-control" id="recipient-name1" readonly required>
                                            </div>-->
                                            <!--<div class="form-group">
                                                <label for="message-text" class="control-label"> Year</label>
                                                <input class="form-control mydatetimepicker" name="year" id="message-text1" required>
                                            </div> -->                                          
                                        
                                    </div>
                                    <div class="modal-footer">
                                    <input type="hidden" name="id" value="" class="form-control" id="recipient-name1">                                       
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                <script>
/*    $('#holidayform').find('[name="enddate"]').on("change", function() {
      //console.log('Yes');
      var date1 = new Date($('#holidayform').find('[name="startdate"]').val());
      var date2 = new Date($('#holidayform').find('[name="enddate"]').val());
      var timeDiff = Math.abs(date2.getTime() - date1.getTime());
      var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
        console.log(date1);
        if(date1.length > '0'){
        $('#holidayform').find('[name="nofdate"]').val('1').end();
        } else if(date2.length > '0') {
         $('#holidayform').find('[name="nofdate"]').val(diffDays).end();   
        }
    });*/
                
                </script>                        
<script type="text/javascript">
                                        $(document).ready(function () {
                                            $(".holiday").click(function (e) {
                                                e.preventDefault(e);
                                                // Get the record's ID via attribute  
                                                var iid = $(this).attr('data-id');
                                                $('#holidayform').trigger("reset");
                                                $('#holysmodel').modal('show');
                                                $.ajax({
                                                    url: 'Holidaybyib?id=' + iid,
                                                    method: 'GET',
                                                    data: '',
                                                    dataType: 'json',
                                                }).done(function (response) {
                                                    console.log(response);
                                                    // Populate the form fields with the data returned from server
													$('#holidayform').find('[name="id"]').val(response.holidayvalue.id).end();
                                                    $('#holidayform').find('[name="holiname"]').val(response.holidayvalue.holiday_name).end();
                                                    $('#holidayform').find('[name="startdate"]').val(response.holidayvalue.from_date).end();
                                                    $('#holidayform').find('[name="enddate"]').val(response.holidayvalue.to_date).end();
                                                    $('#holidayform').find('[name="nofdate"]').val(response.holidayvalue.number_of_days).end();
                                                    $('#holidayform').find('[name="year"]').val(response.holidayvalue.year).end();
												});
                                            });
                                        });
</script>
<script type="text/javascript">
                                        $(document).ready(function () {
                                            $(".holidelet").click(function (e) {
                                                e.preventDefault(e);
                                                // Get the record's ID via attribute  
                                                var iid = $(this).attr('data-id');
                                                $.ajax({
                                                    url: 'HOLIvalueDelet?id=' + iid,
                                                    method: 'GET',
                                                    data: 'data',
                                                }).done(function (response) {
                                                    console.log(response);
                                                    $(".message").fadeIn('fast').delay(3000).fadeOut('fast').html(response);
                                                    window.setTimeout(function(){location.reload()},2000)
                                                    // Populate the form fields with the data returned from server
												});
                                            });
                                        });
</script>                              
            </div>

@endsection