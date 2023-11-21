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
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="{{route('employee.employees')}}" class="text-white"><i class="" aria-hidden="true"></i> Employee List</a></button>
                    </div>
                </div>
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
                                <form class="row" action="{{ route('employee.edit.store', $employee->id) }}" method="post" enctype="multipart/form-data">
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
                                        <label>Barangay</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="barangay" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->barangay}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Municipality</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="municipality" class="form-control form-control-line" value="{{$employee->municipality}}" minlength="2" required > 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Town/Province</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="province" class="form-control form-control-line" value="{{$employee->province}}" minlength="2" required > 
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
                                        <label>Person's Contact Number</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="contact" class="form-control" minlength="11" value="{{$employee->contact}}" placeholder="" required> 
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
                                 <br>
                                <div class="col-md-12">
                        <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Work Background</h3>
                           </div>
                                <br>
                                     <div class="form-group col-md-3 m-t-20">
                                        <label>Personnel ID</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="personnel" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->personnel}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Status</label>
                                        <select name="status" class="form-control custom-select" required>
                                            <option>Select Status</option>
                                            <option value="Permanent" {{ $employee->status === 'Permanent' ? 'selected' : '' }}>Permanent</option>
                                            <option value="Casual" {{ $employee->status === 'Casual' ? 'selected' : '' }}>Casual</option>
                                            <option value="Job Order" {{ $employee->status === 'Job Order' ? 'selected' : '' }}>Job Order</option>
                                            <option value="Co-Terminous" {{ $employee->status === 'Co-Terminous' ? 'selected' : '' }}>Co-Terminous</option>
                                            <option value="Elective" {{ $employee->status === 'Elective' ? 'selected' : '' }}>Elective</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Department</label>
                                        <select name="department" class="form-control custom-select" required>
                                            <option>Select Department</option>
                                            <option value="Municipal Agricultural Services Office" {{ $employee->department === 'Municipal Agricultural Services Office' ? 'Selected' : ''}}>Municipal Agricultural Services Office</option>
                                            <option value="Municipal Social Welfare & Development Office" {{ $employee->department === 'Municipal Social Welfare & Development Office' ? 'Selected' : ''}}>Municipal Social Welfare & Development Office</option>
                                            <option value="Municipal Assessor's Office" {{ $employee->department === 'Municipal Assessor Office' ? 'Selected' : ''}}>Municipal Assessor Office</option>
                                            <option value="COMELEC"{{ $employee->department === 'COMELEC' ? 'Selected' : ''}}>COMELEC</option>
                                            <option value="Local Civil Registrar"{{ $employee->department === 'Local Civil Registrar' ? 'Selected' : ''}}>Local Civil Registrar</option>
                                            <option value="Budget Office" {{ $employee->department === 'Budget Office' ? 'Selected' : ''}}>Budget Office</option>
                                            <option value="BOMWASA AND BIR"{{ $employee->department === 'BOMWASA AND BIR' ? 'Selected' : ''}}>BOMWASA AND BIR</option>
                                            <option value="Accounting Office"{{ $employee->department === 'Accounting Office' ? 'Selected' : ''}}>Accounting Office</option>
                                            <option value="PESO"{{ $employee->department === 'PESO' ? 'Selected' : ''}}>PESO</option>
                                            <option value="Municipal Treasurer's Office" {{ $employee->department === 'Municipal Treasurer Office' ? 'Selected' : ''}}>Municipal Treasurer's Office</option>
                                            <option value="Cogressman's Office"{{ $employee->department === 'Congressman Office' ? 'Selected' : ''}}>Congressman's Office</option>
                                            <option value="HRMO"{{ $employee->department === '' ? 'Selected' : 'HRMO'}}>HRMO</option>
                                            <option value="MPDC"{{ $employee->department === '' ? 'Selected' : 'MPDC'}}>MPDC</option>
                                            <option value="KALAHI"{{ $employee->department === '' ? 'Selected' : 'KALAHI'}}>KALAHI</option>
                                            <option value="Office of the Sangguniang Bayan"{{ $employee->department === 'Office of the Sangguniang Bayan' ? 'Selected' : ''}}>Office of the Sangguniang Bayan</option>
                                            <option value="Office of the Vice-Mayor"{{ $employee->department === '' ? 'Selected' : 'Office of the Vice-Mayor'}}>Office of the Vice-Mayor</option>
                                            <option value="Office of the Mayor"{{ $employee->department === '' ? 'Selected' : 'Office of the Mayor'}}>Office of the Mayor</option>
                                            <option value="Engineering Office"{{ $employee->department === '' ? 'Selected' : 'Engineering Office'}}>Engineering Office</option>
                                            <option value="MENRO"{{ $employee->department === '' ? 'Selected' : 'MENRO'}}>MENRO</option>
                                            <option value="Tourism"{{ $employee->department === '' ? 'Selected' : 'Tourism'}}>Tourism</option>
                                            <option value="RHU"{{ $employee->department === '' ? 'Selected' : 'Rural Health Unit'}}>RHU</option>
                                            <option value="DILG"{{ $employee->department === '' ? 'Selected' : 'DILG'}}>DILG</option>
                                            <option value="MDRR"{{ $employee->department === '' ? 'Selected' : 'MDRR'}}>MDRR</option>
                                            <option value="GSO"{{ $employee->department === '' ? 'Selected' : 'GSO'}}>GSO</option>
                                            <option value="DSWD"{{ $employee->department === '' ? 'Selected' : 'DSWD'}}>DSWD</option>
                                            <option value="DTI"{{ $employee->department === '' ? 'Selected' : 'DTI'}}>DTI</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Position Title</label>
                                        <select name="position" class="form-control custom-select" required>
                                            <option>Select Position Title</option>
                                            <option value="Municipal Government Department Head I" {{ $employee->position === 'Municipal Government Department Head' ? 'selected' : '' }}>Municipal Government Department Head I</option>
                                            <option value="Registration Officer II" {{ $employee->position === 'Registration Officer II' ? 'selected' : '' }}>Registration Officer II</option>
                                            <option value="Social Welfare Officer II" {{ $employee->position === 'Social Welfare Officer II' ? 'selected' : '' }}>Social Welfare Officer II</option>
                                            <option value="Administrative Assistant II" {{ $employee->position === 'Administrative Assistant II' ? 'selected' : '' }}>Administrative Assistant II</option>
                                            <option value="Day Care Worker I" {{ $employee->position === 'Day Care Worker I' ? 'selected' : '' }}>Day Care Worker I</option>
                                            <option value="Municipal Agriculturist I" {{ $employee->position === 'Municipal Agriculturist I' ? 'selected' : '' }}>Municipal Agriculturist I</option>
                                            <option value="Agricultural Technologist" {{ $employee->position === 'Agricultural Technologist' ? 'selected' : '' }}>Agricultural Technologist</option>
                                            <option value="Agricultural Technician II" {{ $employee->position === 'Agricultural Technician II' ? 'selected' : '' }}>Agricultural Technician II</option>
                                            <option value="Administrative Aide I" {{ $employee->position === 'Administrative Aide I' ? 'selected' : '' }}>dministrative Aide I</option>
                                            <option value="Engineer II" {{ $employee->position === 'Engineer II' ? 'selected' : '' }}>Engineer II</option>
                                            <option value="Administrative Aide II" {{ $employee->position === 'Administrative Aide II' ? 'selected' : '' }}>Administrative Aide II</option>
                                            <option value="Administrative Aide III" {{ $employee->position === 'Administrative Aide III' ? 'selected' : '' }}>Administrative Aide III</option>
                                            <option value="Mechanic II" {{ $employee->position === 'Mechanic II' ? 'selected' : '' }}>Mechanic II</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Joining</label>
                                        <input type="hidden" name="id" value="{{$employee->id}}">
                                        <input type="text" name="dateofjoining" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->dateofjoining}}">
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Leaving </label>
                                        <input type="text" name="dateofleaving" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->dateofleaving}}">
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Mandatory Retirement</label>
                                        <input type="text" name="dateofretirement" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="{{$employee->dateofretirement}}" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Salary Grade</label>
                                        <select name="salary" class="form-control custom-select" required>
                                            <option>Select Salary Grade</option>
                                            <option value="1" {{ (string) $employee->salary === '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ (string) $employee->salary === '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ (string) $employee->salary === '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ (string) $employee->salary === '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ (string) $employee->salary === '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ (string) $employee->salary === '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ (string) $employee->salary === '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ (string) $employee->salary === '8' ? 'selected' : '' }}>8</option>
                                            <option value="9" {{ (string) $employee->salary === '9' ? 'selected' : '' }}>9</option>
                                            <option value="10" {{ (string) $employee->salary === '10' ? 'selected' : '' }}>10</option>
                                            <option value="11" {{ (string) $employee->salary === '11' ? 'selected' : '' }}>11</option>
                                            <option value="12" {{ (string) $employee->salary === '12' ? 'selected' : '' }}>12</option>
                                            <option value="13" {{ (string) $employee->salary === '13' ? 'selected' : '' }}>13</option>
                                            <option value="14" {{ (string) $employee->salary === '14' ? 'selected' : '' }}>14</option>
                                            <option value="15" {{ (string) $employee->salary === '15' ? 'selected' : '' }}>15</option>
                                            <option value="16" {{ (string) $employee->salary === '16' ? 'selected' : '' }}>16</option>
                                            <option value="17" {{ (string) $employee->salary === '17' ? 'selected' : '' }}>17</option>
                                            <option value="18" {{ (string) $employee->salary === '18' ? 'selected' : '' }}>18</option>
                                            <option value="19" {{ (string) $employee->salary === '19' ? 'selected' : '' }}>19</option>
                                            <option value="20" {{ (string) $employee->salary === '20' ? 'selected' : '' }}>20</option>
                                            <option value="21" {{ (string) $employee->salary === '21' ? 'selected' : '' }}>21</option>
                                            <option value="22" {{ (string) $employee->salary === '22' ? 'selected' : '' }}>22</option>
                                            <option value="23" {{ (string) $employee->salary === '23' ? 'selected' : '' }}>23</option>
                                            <option value="24" {{ (string) $employee->salary === '24' ? 'selected' : '' }}>24</option>
                                            <option value="25" {{ (string) $employee->salary === '25' ? 'selected' : '' }}>25</option>
                                            <option value="26" {{ (string) $employee->salary === '26' ? 'selected' : '' }}>26</option>
                                            <option value="27" {{ (string) $employee->salary === '27' ? 'selected' : '' }}>27</option>
                                            <option value="28" {{ (string) $employee->salary === '28' ? 'selected' : '' }}>28</option>
                                            <option value="29" {{ (string) $employee->salary === '29' ? 'selected' : '' }}>29</option>
                                            <option value="30" {{ (string) $employee->salary === '30' ? 'selected' : '' }}>30</option>
                                            <option value="31" {{ (string) $employee->salary === '31' ? 'selected' : '' }}>31</option>
                                            <option value="32" {{ (string) $employee->salary === '32' ? 'selected' : '' }}>32</option>
                                            <option value="33" {{ (string) $employee->salary === '33' ? 'selected' : '' }}>33</option>
                                        </select>
                                    </div>
                                     <div class="form-group col-md-3 m-t-20">
                                        <label>Step</label>
                                        <select name="step" class="form-control custom-select" required>
                                            <option>Select Step</option>
                                            <option value="1" {{ (string) $employee->step === '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ (string) $employee->step === '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ (string) $employee->step === '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ (string) $employee->step === '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ (string) $employee->step === '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ (string) $employee->step === '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ (string) $employee->step === '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ (string) $employee->step === '8' ? 'selected' : '' }}>8</option>
                                        </select>
                                    </div>
                                    <div class="form-actions col-md-12">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                     <a href ="{{ route('employee.employees') }}"><button type="button"  class="btn btn-danger">Cancel</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
