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
            <div class="message"></div> 
            <div class="container-fluid">         
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Edit Leavetype</h4>
                            </div>
                            <div class="card-body">
                                    <form action="{{ route('leavetype.edit.store') }}" method="post">
                                        @csrf
                                <div class="form-group col-md-3 m-t-20">
                                        <label>Leave Name</label>
                                        <input type="hidden" name="id" value="{{$leavetype->id}}">
                                        <input type="text" name="leavename" value="{{$leavetype->leavename}}" class="form-control form-control-line" minlength="2" required > 
                                </div>
                            </div>
                          <div class="form-group col-md-3 m-t-20">
                                        <label>Day</label>
                                        <input type="hidden" name="id" value="{{$leavetype->id}}">
                                        <input type="text" name="leaveday" value="{{$leavetype->leaveday}}" class="form-control form-control-line" minlength="2" required > 
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
                                <h4 class="m-b-0 text-white">Leave List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="" class="display  table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Leave Type</th>
                                                <th>Number Of Days</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @if(isset($leavetypes))
                                                @foreach($leavetypes as $leavetype)
                                                <tr>
                                                   <td>{{$leavetype->leavename}}</td>
                                                  <td>{{$leavetype->leaveday}}</td>
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