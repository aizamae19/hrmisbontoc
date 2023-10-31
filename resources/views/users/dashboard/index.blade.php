@extends('layouts.users')

@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Announcement! &nbsp<i class="fa fa-bullhorn"></i></h4>
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
                                    Holidays <i class="fa fa-calendar"></i>
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