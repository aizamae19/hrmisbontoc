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
                                                <input type="text" name="designation" id="firstName" value="" class="form-control" placeholder="" minlength="3" required>
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
                                                                <tr>
                                    <td>Vice Chairman</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrbontoc.test\/organization/Edit_des/2" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrbontoc.test\/organization/des_delete/2" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/3" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/3" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Chief Finance & Admin Officer</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/4" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/4" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Sr. Finance & Admin Officer - I</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/5" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/5" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Jr. Finance & Admin Officer</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/6" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/6" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Senior Research Associate-1</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/7" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/7" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Research Associate-1</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/8" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/8" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Junior Research Associate</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/9" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/9" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Research Assistant</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/10" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/10" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Sr. Office Assistant</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/11" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/11" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Office Assistant</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/12" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/12" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>IT Analyst</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/13" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/13" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Cook</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/14" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/14" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Software Engineer</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/15" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/15" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>System Analyst</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/16" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/16" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Programmer Analyst</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/17" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/17" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Sr Software Engineer</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/18" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/18" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Technical Specialist</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/19" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/19" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Trainee Engineer</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/20" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/20" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Intern</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/21" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/21" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Head of Department</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/22" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/22" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Business Analyst</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/23" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/23" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Web Developer</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/24" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/24" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Big Data Engineer</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/25" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/25" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Project Manager</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/26" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/26" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>Trainee</td>
                                    <td class="jsgrid-align-center ">
                                        <a href="http://hrsystem-ci.test\/organization/Edit_des/27" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this data?')"  href="http://hrsystem-ci.test\/organization/des_delete/27" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection