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
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Birth </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="date" name="dateofbirth" id="dateofbirth" class="form-control" value="{{$employee->dateofbirth}}" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Place Of Birth </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="placeofbirth" id="dateofbirth" class="form-control" value="{{$employee->placeofbirth}}" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Purok/Street</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="address" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->address}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Barangay</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="barangay" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->barangay}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Municipality</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="municipality" class="form-control form-control-line" value="{{$employee->municipality}}" minlength="2" required > 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Town/Province</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="province" class="form-control form-control-line" value="{{$employee->province}}" minlength="2" required > 
                                    </div>
                                     <div class="form-group col-md-4 m-t-20">
                                        <label for="maritalstatus">Civil Status</label>
                                        <select name="maritalstatus" class="form-control custom-select" required>
                                            <option value="">Select Civil Status</option>
                                            <option value="Married" {{ $employee->maritalstatus === 'Married' ? 'selected' : '' }}>Married</option>
                                            <option value="Common-Law Married" {{ $employee->maritalstatus === 'Common-Law Married' ? 'selected' : '' }}>Common-Law Married</option>
                                            <option value="Widowed" {{ $employee->maritalstatus === 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                            <option value="Separated" {{ $employee->maritalstatus === 'Separated' ? 'selected' : '' }}>Separated</option>
                                            <option value="Divorced" {{ $employee->maritalstatus === 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                            <option value="Single" {{ $employee->maritalstatus === 'Single' ? 'selected' : '' }}>Single</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control custom-select" required>
                                            <option>Select Sex</option>
                                            <option value="Male" {{ $employee->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ $employee->gender === 'Female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Blood Group</label>
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
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mobile Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="contactnumber" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->contactnumber}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Person to Contact in Case of Emergency</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="persontocontact" class="form-control" value="{{$employee->persontocontact}}" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Contact Number of Contact Person</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="contact" class="form-control" minlength="11" value="{{$employee->contact}}" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Personal Email </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="personalemail" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->personalemail}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Corporate Email </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="corporateemail" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->corporateemail}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>GSIS ID Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="gsis" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->gsis}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>PAG-IBIG ID Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="pagibig" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->pagibig}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Philhealth Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="philhealth" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->philhealth}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>SSS Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="sss" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->sss}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Tin Number </label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="tin" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->tin}}">
                                    </div>
                                    <br>
                        <div class="col-md-12">
                        <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Educational Background</h3>
                           </div>
                                    <br>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>College Degree</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="course" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->course}}" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Graduate Studies</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="graduate" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->graduate}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>CSC Professional Eligibility </label>
                                      <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="csc" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->csc}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Issuance-PRC ID </label>
                                       <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="dateofissuance" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->dateofissuance}}">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Validity-PRC ID </label>
                                       <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="dateofvalidity" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->dateofvalidity}}">
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
