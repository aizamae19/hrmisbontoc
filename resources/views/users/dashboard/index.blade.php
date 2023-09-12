@extends('layouts.users')

@section('content')
    <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-braille" style="color:#1976d2"></i>&nbsp Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div> 
            <div class="container-fluid">
                                                                        
                  
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Notice Board</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive slimScrollDiv" style="height:600px;overflow-y:scroll">
                                    <table class="table table-hover table-bordered earning-box ">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <!-- <th>File</th> -->
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="scrollbar" style="vertical-align:top">
                                                <td></td>
                                                <td><mark><a href="{{route('notice')}}" target="_blank"></a></mark>
                                                </td>
                                                <td style="width:100px"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Holidays
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" style="height:600px;overflow-y:scroll">
                                    <table class="table table-hover table-bordered earning-box">
                                       <thead>
                                            <tr>
                                                <th>Holiday Name</th>
                                                <th>Date</th>
                                            </tr>                                           
                                       </thead>
                                       <tbody>
                                            <tr style="background-color:#e3f0f7">
                                               <td></td>
                                               <td></td>
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