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
                                    <form method="post" action="{{route('holiday.edit.store')}}" id="holidayform" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                        
                                            <div class="form-group">
                                                <label class="control-label">Name of Holiday</label>
                                                <input type="hidden" name="id" value="{{$holiday->id}}">
                                                <input type="text" name="nameofholiday" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$holiday->nameofholiday}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Start Date</label>
                                                <input type="hidden" name="id" value="{{$holiday->id}}">
                                                <input type="text" name="startdate" class="form-control mydatetimepickerFull" id="recipient-name1"  value="{{$holiday->startdate}}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">End Date</label>
                                                <input type="hidden" name="id" value="{{$holiday->id}}">
                                                <input type="text" name="enddate" class="form-control mydatetimepickerFull" id="recipient-name1" value="{{$holiday->enddate}}">
                                            </div>                                      
                                        
                                        </div>
                                    <div class="modal-footer">                                   
                                        <a href="{{route('leave.holiday')}}"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                    </form>
<<<<<<< HEAD

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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($holidays))
                                                @foreach($holidays as $holiday)
                                            <tr>
                                                <td>{{$holiday->nameofholiday}}</td>
                                                <td>{{$holiday->startdate}}</td>
                                                <td>{{$holiday->enddate}}</td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </div>
                            </div>
                        </div>
                <script>

                
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
=======
        </div>
>>>>>>> 30378690d917322e2f287d1ddeb83114ab61ad4d

@endsection