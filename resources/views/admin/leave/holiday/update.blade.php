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
        </div>

@endsection