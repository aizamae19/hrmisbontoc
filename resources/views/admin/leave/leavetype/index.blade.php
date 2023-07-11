
@extends('layouts.default')

@section('content')
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><i class="fa fa-fighter-jet" style="color:#1976d2"></i> Leave Types</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Leave</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            <div class="col-12">
                <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a data-toggle="modal" data-target="#leavemodel" data-whatever="@getbootstrap" class="text-white"><i class="" aria-hidden="true"></i> Add Leave Types</a></button>
                <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="http://hrsystem-ci.test\/leave/Application" class="text-white"><i class="" aria-hidden="true"></i>  Leave Application</a></button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Leave List  </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID </th>
                                        <th>Leave Type</th>
                                        <th>Number Of Days</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!-- <tfoot>
                                <tr>
                                        <th>ID </th>
                                        <th>Leave Type</th>
                                        <th>Number Of Days</th>
                                        <th>Action</th>
                                </tr>
                                </tfoot> -->
                                <tbody>
                                                                        <tr>
                                        <td>9</td>
                                        <td>Leave without Pay</td>
                                        <td></td>
                                        <td class="jsgrid-align-center ">
                                            <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light leavetype" data-id="9"><i class="fa fa-pencil-square-o"></i></a>
                                            <a onclick="confirm('Are you sure, you want to delete this?')" href="LeavetypeDelet?D=9" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>8</td>
                                        <td>Optional Leave</td>
                                        <td></td>
                                        <td class="jsgrid-align-center ">
                                            <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light leavetype" data-id="8"><i class="fa fa-pencil-square-o"></i></a>
                                            <a onclick="confirm('Are you sure, you want to delete this?')" href="LeavetypeDelet?D=8" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>7</td>
                                        <td>Public Holiday</td>
                                        <td></td>
                                        <td class="jsgrid-align-center ">
                                            <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light leavetype" data-id="7"><i class="fa fa-pencil-square-o"></i></a>
                                            <a onclick="confirm('Are you sure, you want to delete this?')" href="LeavetypeDelet?D=7" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>5</td>
                                        <td>Earned leave</td>
                                        <td></td>
                                        <td class="jsgrid-align-center ">
                                            <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light leavetype" data-id="5"><i class="fa fa-pencil-square-o"></i></a>
                                            <a onclick="confirm('Are you sure, you want to delete this?')" href="LeavetypeDelet?D=5" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>4</td>
                                        <td>Paternal Leave</td>
                                        <td>7</td>
                                        <td class="jsgrid-align-center ">
                                            <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light leavetype" data-id="4"><i class="fa fa-pencil-square-o"></i></a>
                                            <a onclick="confirm('Are you sure, you want to delete this?')" href="LeavetypeDelet?D=4" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>3</td>
                                        <td>Maternity Leave</td>
                                        <td>90</td>
                                        <td class="jsgrid-align-center ">
                                            <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light leavetype" data-id="3"><i class="fa fa-pencil-square-o"></i></a>
                                            <a onclick="confirm('Are you sure, you want to delete this?')" href="LeavetypeDelet?D=3" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>2</td>
                                        <td>Sick Leave</td>
                                        <td>15</td>
                                        <td class="jsgrid-align-center ">
                                            <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light leavetype" data-id="2"><i class="fa fa-pencil-square-o"></i></a>
                                            <a onclick="confirm('Are you sure, you want to delete this?')" href="LeavetypeDelet?D=2" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>1</td>
                                        <td>Casual Leave</td>
                                        <td>21</td>
                                        <td class="jsgrid-align-center ">
                                            <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light leavetype" data-id="1"><i class="fa fa-pencil-square-o"></i></a>
                                            <a onclick="confirm('Are you sure, you want to delete this?')" href="LeavetypeDelet?D=1" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="leavemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Leave</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form method="post" action="Add_leaves_Type" id="leaveform" enctype="multipart/form-data">
                        <div class="modal-body">
                            
                            <div class="form-group">
                                <label class="control-label">Leave name</label>
                                <input type="text" name="leavename" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Day</label>
                                <input type="text" name="leaveday" class="form-control" id="recipient-name1" value="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">status</label>
                                <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="status" required>
                                    <option value="">Select Here</option>
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </div>
                            
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
        <script type="text/javascript">
        $(document).ready(function () {
        $(".leavetype").click(function (e) {
        e.preventDefault(e);
        // Get the record's ID via attribute
        var iid = $(this).attr('data-id');
        $('#leaveform').trigger("reset");
        $('#leavemodel').modal('show');
        $.ajax({
        url: 'LeaveTypebYID?id=' + iid,
        method: 'GET',
        data: '',
        dataType: 'json',
        }).done(function (response) {
        console.log(response);
        // Populate the form fields with the data returned from server
                                                            $('#leaveform').find('[name="id"]').val(response.leavetypevalue.type_id).end();
        $('#leaveform').find('[name="leavename"]').val(response.leavetypevalue.name).end();
        $('#leaveform').find('[name="leaveday"]').val(response.leavetypevalue.leave_day).end();
        $('#leaveform').find('[name="status"]').val(response.leavetypevalue.status).end();
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