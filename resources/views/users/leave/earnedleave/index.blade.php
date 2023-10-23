@extends('layouts.users')

@section('content')
            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-bookmark-o" style="color:#1976d2"> </i> Earn Leave</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Earn Leave</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Earn Balance </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Employee PIN</th>
                                                <th>Employee Name </th>
                                                <!--<th>Total Day </th>-->
                                                <th>Total Hour </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($earnedleaves))
                                             @foreach($earnedleaves as $earnedleave)
                                      <tr>
                                          <td>{{$earnedleave->emid}}</td>
                                          <td>{{$earnedleave->startdate}}</td>
                                          <td>{{$earnedleave->enddate}}</td>
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

@endsection