@extends('layouts.users')

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
               <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Update Employee<span class="pull-right " ></span></h4>
                            </div>

                                <br>
                                <div>
                                    <h3 style="padding-left: 20px;">Personal Background</h3>
                                </div>
                                                                                          
                                <div class="card-body">
                                @include('layouts.partials.messages')
                                <form class="row" action="{{ route('useremployee.edit.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   <div class="form-group col-md-3 m-t-20">
                                        <label>First Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="firstname" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->firstname}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Middle Name</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="middlename" class="form-control" id="recipient-name1" minlength="0" maxlength="25" value="{{$employee->middlename}}">
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Last Name </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="lastname" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->lastname}}" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Suffix</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="suffix" class="form-control" id="recipient-name1" minlength="0" maxlength="25" value="{{$employee->suffix}}">
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Purok/Street</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="address" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->address}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Municipality</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="municipality" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->municipality}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Town/Province</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="province" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->province}}" required>
                                    </div>
                                     <div class="form-group col-md-3 m-t-20">
                                        <label for="maritalstatus">Marital Status</label>
                                        <select name="maritalstatus" class="form-control custom-select" required>
                                            <option value="">Select Marital Status</option>
                                            <option value="Married" {{ $employee->maritalstatus === 'Married' ? 'selected' : '' }}>Married</option>
                                            <option value="Common-Law Married" {{ $employee->maritalstatus === 'Common-Law Married' ? 'selected' : '' }}>Common-Law Married</option>
                                            <option value="Widowed" {{ $employee->maritalstatus === 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                            <option value="Separated" {{ $employee->maritalstatus === 'Separated' ? 'selected' : '' }}>Separated</option>
                                            <option value="Divorced" {{ $employee->maritalstatus === 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                            <option value="Single" {{ $employee->maritalstatus === 'Single' ? 'selected' : '' }}>Single</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Birth </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="dateofbirth" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->dateofbirth}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control custom-select" required>
                                            <option>Select Gender</option>
                                            <option value="MALE" {{ $employee->gender === 'MALE' ? 'selected' : '' }}>Male</option>
                                            <option value="FEMALE" {{ $employee->gender === 'FEMALE' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Blood Group </label>
                                        <select name="bloodtype" class="form-control custom-select">
                                            <option>Select Blood Group</option>
                                            <option value="O+" {{ $employee->bloodtype === 'O+' ? 'selected' : '' }}>O+</option>
                                            <option value="O-" {{ $employee->bloodtype === 'O-' ? 'selected' : '' }}>O-</option>
                                            <option value="A+" {{ $employee->bloodtype === 'A+' ? 'selected' : '' }}>A+</option>
                                            <option value="A-" {{ $employee->bloodtype === 'A-' ? 'selected' : '' }}>A-</option>
                                            <option value="B+" {{ $employee->bloodtype === 'B+' ? 'selected' : '' }}>B+</option>
                                            <option value="B-" {{ $employee->bloodtype === 'B-' ? 'selected' : '' }}>B-</option>
                                            <option value="AB+" {{ $employee->bloodtype === 'AB+' ? 'selected' : '' }}>AB+</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Contact Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="contactnumber" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->contactnumber}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Person to Contact</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="persontocontact" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->persontocontact}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Personal Email </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="personalemail" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->personalemail}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Corporate Email </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="corporateemail" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->corporateemail}}" required>
                                    </div>
                                    <br>
                        <div class="col-md-12">
                        <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Educational Background</h3>
                           </div>
                                    <br>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Course</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="course" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->course}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Graduate Studies</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="graduate" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->graduate}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>CSC Professional Eligibility </label>
                                      <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="csc" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->csc}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Issuance PRC ID </label>
                                       <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="dateofissuance" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->dateofissuance}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Validity PRC ID </label>
                                       <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="dateofvalidity" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->dateofvalidity}}" required>
                                    </div>
                                    <div class="form-actions col-md-12">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                     <a href ="{{ route('useremployee.view') }}"><button type="button"  class="btn btn-danger">Cancel</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
