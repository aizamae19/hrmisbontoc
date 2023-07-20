@extends('layouts.default')

@section('content')
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="fa fa-university" aria-hidden="true"></i> Employee</h3>
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
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="{{route('employee.employees')}}" class="text-white"><i class="" aria-hidden="true"></i>Employee List</a></button>
                    </div>
                </div>
               <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Add New Employee<span class="pull-right " ></span></h4>
                            </div>
                                                                                          
                                <div class="card-body">
                                @include('layouts.partials.messages')
                                <form class="row" action="{{ route('employee.edit.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>First Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="firstname" value="{{$employee->firstname}}" class="form-control form-control-line" minlength="2" required > 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Middle Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" id="" name="middlename" vlaue="{{$employee->middlename}}" class="form-control form-control-line" value="" minlength="2" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Last Name </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" id="" name="lastname" value="{{$employee->lastname}}" class="form-control form-control-line" value="" minlength="2" required> 
                                    </div>
                                    
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Employee ID</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="eid" value="{{$employee->eid}}" class="form-control form-control-line" placeholder="8820"> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Department</label>
                                        <select name="dept_name" value="" class="form-control custom-select" required>
                                            <option>Select Department</option>
                                            <option value="3">Finance, HR, & Admininstration</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Designation </label>
                                        <select name="designation_list" class="form-control custom-select" required>
                                            <option>Select Designation</option>
                                                <option value="4">Chief Finance & Admin Officer</option>
                                            </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Position</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <select name="position" value="{{$employee->position}}" class="form-control custom-select" required>
                                            <option>Select Position</option>
                                            <option value="Job Order">Job Order</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Casual">Casual</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Gender</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <select name="gender" value="{{$employee->gender}}" class="form-control custom-select" required>
                                            <option>Select Gender</option>
                                            <option value="MALE">Male</option>
                                            <option value="FEMALE">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Blood Group </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <select name="bloodtype" value="{{$employee->bloodtype}}" class="form-control custom-select">
                                            <option>Select Blood Group</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Contact Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="number" name="contact" value="{{$employee->contact}}" class="form-control" value="" placeholder="" minlength="11" maxlength="15" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Birth </label>
                                        <input type="hidden" name="id" value="{[$employee->id}}">
                                        <input type="date" name="dateofbirth" id="example-email2" name="example-email" value="{{$employee->dateofbirth}}" class="form-control" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Joining </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="date" name="joindate" id="example-email2" name="example-email" value="{{$employee->joindate}}" class="form-control" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Username </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="username" value="{{$employee->username}}" class="form-control form-control-line" value=""> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Email </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="email" id="example-email2" name="email" value="{{$employee->email}}" class="form-control" placeholder="email@mail.com" minlength="7" required > 
                                    </div>
                                    
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Image </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="file" name="image" value="{{$employee->image}}" class="form-control" value=""> 
                                    </div>
                                    <div class="form-actions col-md-12">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
