@extends('layouts.default')

@section('content')
                       
                        <div class="modal fade" id="holysmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Holidays</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
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
                                    <input type="hidden" name="id" value="" class="form-control" id="recipient-name1">                                       
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                    </form>

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