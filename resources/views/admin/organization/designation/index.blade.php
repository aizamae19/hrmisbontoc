@extends('layouts.default')

@section('content')
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-map-o" style="color:#1976d2"></i> Designation</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Designation</li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>
            <div class="container-fluid">         
    <div class="row">
        <div class="col-lg-5">
                                    

                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Add Designation</h4>
                    </div>
                    
                                                                                

                    <div class="card-body">
                            <form method="post" action="Save_des" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Designation Name</label>
                                                <input type="text" name="designation_list" id="firstName" value="" class="form-control" placeholder="" minlength="3" required>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                    </div>
                </div>
                    </div>

        <div class="col-7">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Designation List</h4>
                </div>
                <div></div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Designation </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                     @if(isset($designations))
                                        @foreach($designations as $designation)
                              <tr>
                                    <td>{{$designation->designation_list}}</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/designation/Edit_des/27" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/27" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
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

    </div>
@endsection