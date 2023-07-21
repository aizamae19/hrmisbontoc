
@extends('layouts.default')

@section('content')

            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-clipboard"></i> Notice Board</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Notice Board</li>
                    </ol>
                </div>
            </div>
        <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a data-toggle="modal" data-target="#noticemodel" data-whatever="@getbootstrap" class="text-white "><i class="" aria-hidden="true"></i> Add Notice </a></button>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                    <h4 class="m-b-0 text-white"> Notice</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <!-- <th>File</th> -->
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($notices))
                                            @foreach($notices as $notice)
                                            <tr>
                                                <td>{{$notice->noticetitle}}</td>
                                                <td>{{$notice->publisheddate}}</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="" title="Edit"  class="btn btn-sm btn-primary waves-effect waves-light leavetype" data-id="9"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a onclick="confirm('Are you sure, you want to delete this?')" href="LeavetypeDelet?D=9" title="Delete"  class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
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
                        <!-- sample modal content -->
                        <div class="modal fade" id="noticemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Notice Board</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form role="form" method="post" action="{{route('notice.store')}}" id="btnSubmit" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Notice Title</label>
                                                <textarea class="form-control" name="noticetitle" id="message-text1" maxlength="150"></textarea>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="control-label">Document</label>
                                                <label for="recipient-name1" class="control-label">Title</label>
                                                <input type="file" name="file_url" class="form-control" id="recipient-name1" required>
                                            </div> -->
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Published Date</label>
                                                <input type="date" name="publisheddate" class="form-control" id="recipient-name1" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal --> 
  
            </div>
@endsection