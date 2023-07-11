@extends('layouts.default')

@section('content')

            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-users" aria-hidden="true"></i> Employee</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="" class="text-white"><i class="" aria-hidden="true"></i> Add Employee</a></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>PIN</th>
                                                <th>Email </th>
                                                <th>Contact </th>
                                                <th>User Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                               <tr>
                                                <th>Employee Name</th>
                                                <th>PIN</th>
                                                <th>Email </th>
                                                <th>Contact </th>
                                                <th>User Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                                                                       <tr>
                                                <td title="Thom Anderson">Thom Anderson</td>
                                                                                <td>99</td>
                                                <td>thoma@mail.com</td>
                                                <td>7856587870</td>
                                                <td>SUPER ADMIN</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=U295MTMzMg==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Will Williams">Will Williams</td>
                                                                                <td>123456</td>
                                                <td>admin@mail.com</td>
                                                <td>999999900</td>
                                                <td>ADMIN</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=RG9lMTc1Mw==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="John Greenwood">John Greenwood</td>
                                                                                <td>123444</td>
                                                <td>employee@mail.com</td>
                                                <td>1111110010</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=RG9lMTc1NA==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Liam Moore">Liam Moore</td>
                                                                                <td>6969</td>
                                                <td>liam@mail.com</td>
                                                <td>7124589965</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=TW9vMTQwMg==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Stephany Robs">Stephany Robs</td>
                                                                                <td>1058</td>
                                                <td>stephany@mail.com</td>
                                                <td>7850001111</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=Um9iMTQ3Mg==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Chris Thompson">Chris Thompson</td>
                                                                                <td>8877</td>
                                                <td>chris@mail.com</td>
                                                <td>7852140000</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=VGhvMTA0NA==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Colin Smith">Colin Smith</td>
                                                                                <td>3008</td>
                                                <td>colin@mail.com</td>
                                                <td>7400001450</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=U21pMTI2Ng==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Christine Moore">Christine Moore</td>
                                                                                <td>6661</td>
                                                <td>christine@mail.com</td>
                                                <td>1010140000</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=TW9vMTYzNA==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Michael Johnson">Michael Johnson</td>
                                                                                <td>8829</td>
                                                <td>michael@mail.com</td>
                                                <td>7801450000</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=Sm9oMTQ3NA==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td title="Emily Denn">Emily Denn</td>
                                                                                <td>6600</td>
                                                <td>emily@mail.com</td>
                                                <td>7410144470</td>
                                                <td>EMPLOYEE</td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="http://hrsystem-ci.test\/employee/view?I=RGVuMTc0NQ==" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
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