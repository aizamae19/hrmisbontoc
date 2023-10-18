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
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Add New Employee<span class="pull-right " ></span></h4>
                            </div>
                                <br>
                                <div>
                                    <h3 style="padding-left: 20px;">Personal Background</h3>
                                </div>
                                <div class="card-body">
                                @include('layouts.partials.messages')
                                <form class="row" action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" class="form-control form-control-line" minlength="2" required > 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Middle Name</label>
                                        <input type="text" id="" name="middlename" class="form-control form-control-line" value="" minlength="2"> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Last Name </label>
                                        <input type="text" id="" name="lastname" class="form-control form-control-line" value="" minlength="2" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Suffix</label>
                                        <input type="text" id="" name="suffix" class="form-control form-control-line" value="" minlength="2"> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control form-control-line" minlength="2" required > 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Marital Status</label>
                                        <select name="maritalstatus" class="form-control custom-select" required>
                                            <option>Select Marital Status</option>
                                            <option value="Married">Married</option>
                                            <option value="Common-Law Married">Common-Law Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Single">Single</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Birth </label>
                                        <input type="date" name="dateofbirth" id="example-email2" name="example-email" class="form-control" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control custom-select" required>
                                            <option>Select Gender</option>
                                            <option value="MALE">Male</option>
                                            <option value="FEMALE">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Blood Group </label>
                                        <select name="bloodtype" class="form-control custom-select">
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
                                        <input type="text" name="contactnumber" class="form-control" value="" placeholder="" minlength="11" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Person to Contact</label>
                                        <input type="text" name="persontocontact" class="form-control" value="" placeholder="" minlength="11" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Personal Email </label>
                                        <input type="email" id="example-email2" name="personalemail" class="form-control" value="" placeholder="email@gmail.com" minlength="7" required > 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Corporate Email </label>
                                        <input type="email" id="example-email2" name="corporateemail" class="form-control" value="" placeholder="email@gmail.com" minlength="7" required > 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Image </label>
                                        <input type="file" name="image" class="form-control" value=""> 
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                  <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Educational Background</h3>
                                   </div>
                                    <br>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Course</label>
                                        <input type="text" name="course" class="form-control form-control-line" minlength="2" required > 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Graduate Studies</label>
                                        <input type="text" id="" name="graduate" class="form-control form-control-line" value="" minlength="2" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>CSC Professional Eligibility </label>
                                      <input type="text" id="" name="csc" class="form-control form-control-line" value="" minlength="2" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Issuance PRC ID </label>
                                        <input type="date" name="dateofissuance" id="example-email2" name="example-email" class="form-control" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Validity PRC ID </label>
                                        <input type="date" name="dateofvalidity" id="example-email2" name="example-email" class="form-control" placeholder="" required>
                                    </div>
                                 <br>
                                <div class="col-md-12">
                                  <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Work Background</h3>
                                   </div>
                                <br>
                                     <div class="form-group col-md-3 m-t-20">
                                        <label>Personnel ID</label>
                                        <input type="text" id="" name="personnel" class="form-control form-control-line" value="" minlength="2" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Status</label>
                                        <select name="status" class="form-control custom-select">
                                            <option>Select Status</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Casual">Casual</option>
                                            <option value="Job Order">Job Order</option>
                                            <option value="Co-Terminous">Co-Terminous</option>
                                        </select>
                                    </div>
                                     <div class="form-group col-md-3 m-t-20">
                                        <label>Department</label>
                                        <select name="department" class="form-control custom-select">
                                            <option>Select Department</option>
                                            <option value="Office of the Mayor">Office of the Mayor</option>
                                            <option value="Office of the Vice-Mayor">Office of the Vice-Mayor</option>
                                            <option value="Office of the Sangguniang Bayan">Office of the Sangguniang Bayan</option>
                                            <option value="Office of the Municipal Plannig and Development Coordinator">Office of the Municipal Planning and Development Coordinator</option>
                                            <option value="Office of the Municipal Budget Officer">Office of the Municipal Budget Officer</option>
                                            <option value="Office of the Municipal Accountant">Office of the Municipal Accountant</option>
                                            <option value="Office of the Municipal Treasurer">Office of the Municipal Treasurer</option>
                                            <option value="Office of the Municipal Assessor">Office of the Municipal Assessor</option>
                                             <option value="Rural Health Unit">Rural Health Unit</option>
                                            <option value="Office of the Civil Registrar">Office of the Civil Registrar</option>
                                            <option value="Municipal Social Welfare and Development Office">Municipal Social Welfare and Development Office</option>
                                            <option value="Municipal Agricultural Services Office">Municipal Agricultural Services Office</option>
                                            <option value="Office of the Municipal Engineer">Office of the Municipal Engineer</option>
                                            <option value="Human Resource Management Office">Human Resource Management Office</option>
                                        </select>
                                    </div>
                                      <div class="form-group col-md-3 m-t-20">
                                        <label>Position Title</label>
                                        <select name="position" class="form-control custom-select">
                                            <option>Select Position Title</option>
                                            <option value="Municipal Government Department Head I">Municipal Government Department Head I</option>
                                            <option value="Registration Officer II">Registration Officer II</option>
                                            <option value="Social Welfare Officer II">Social Welfare Officer II</option>
                                            <option value="Administrative Assistant II">Administrative Assistant II</option>
                                            <option value="Day Care Worker I">Day Care Worker I</option>
                                            <option value="Municipal Agriculturist I">Municipal Agriculturist I</option>
                                            <option value="Agricultural Technologist">Agricultural Technologist</option>
                                            <option value="Agricultural Technician II">Agricultural Technician II</option>
                                            <option value="Administrative Aide I">dministrative Aide I</option>
                                            <option value="Engineer II">Engineer II</option>
                                            <option value="Administrative Aide II">Administrative Aide II</option>
                                            <option value="Administrative Aide III">Administrative Aide III</option>
                                            <option value="Mechanic II">Mechanic II</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Joining</label>
                                        <input type="date" name="dateofjoining" id="example-email2" name="example-email" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Leaving </label>
                                        <input type="date" name="dateofleaving" id="example-email2" name="example-email" class="form-control" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Date Of Mandatory Retirement</label>
                                        <input type="date" name="dateofretirement" id="example-email2" name="example-email" class="form-control" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Salary Grade</label>
                                        <select name="salary" class="form-control custom-select">
                                            <option>Select Salary Grade</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                        </select>
                                    </div>
                                     <div class="form-group col-md-3 m-t-20">
                                        <label>Step</label>
                                        <select name="step" class="form-control custom-select">
                                            <option>Select Step</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                    <div class="form-actions col-md-12">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <button type="button" href ="{{ route('employee.employees') }}" class="btn btn-danger">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
