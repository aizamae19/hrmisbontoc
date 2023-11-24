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
                                <form class="row" action="{{ route('employee.store') }}" method="post" id="formId" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Surname </label>
                                        <input type="text" name="lastname" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required> 
                                    </div>
                                   <div class="form-group col-md-4 m-t-20">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Middle Name</label>
                                        <input type="text" name="middlename" class="form-control" id="recipient-name1" minlength="0" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Name Extension (Jr., Sr)</label>
                                        <input type="text" name="suffix" class="form-control" id="recipient-name1" minlength="0" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Birth </label>
                                        <input type="date" name="dateofbirth" id="dateofbirth" class="form-control" value="" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Place Of Birth </label>
                                        <input type="text" name="placeofbirth" id="dateofbirth" class="form-control" value="" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Purok/Street</label>
                                        <input type="text" name="address" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Barangay</label>
                                        <input type="text" name="barangay" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Municipality</label>
                                        <input type="text" name="municipality" class="form-control form-control-line" value="" minlength="2" required > 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Town/Province</label>
                                        <input type="text" name="province" class="form-control form-control-line" value="" minlength="2" required > 
                                    </div>
                                     <div class="form-group col-md-4 m-t-20">
                                        <label for="maritalstatus">Civil Status</label>
                                        <select name="maritalstatus" class="form-control custom-select" required>
                                            <option value="">Select Civil Status</option>
                                            <option value="Married">Married</option>
                                            <option value="Common-Law Married">Common-Law Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Single">Single</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control custom-select" required>
                                            <option>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Blood Group</label>
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
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mobile Number </label>
                                        <input type="text" name="contactnumber" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Person to Contact in Case of Emergency</label>
                                        <input type="text" name="persontocontact" class="form-control" value="" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Contact Number of Contact Person</label>
                                        <input type="text" name="contact" class="form-control" minlength="11" value="" placeholder="" required> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Personal Email </label>
                                        <input type="text" name="personalemail" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Corporate Email </label>
                                        <input type="text" name="corporateemail" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>GSIS ID Number </label>
                                        <input type="text" name="gsis" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>PAG-IBIG ID Number </label>
                                        <input type="text" name="pagibig" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Philhealth Number </label>
                                        <input type="text" name="philhealth" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>SSS Number </label>
                                        <input type="text" name="sss" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Tin Number </label>
                                        <input type="text" name="tin" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>UMID</label>
                                        <input type="text" name="umid" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                  <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Family Background</h3>
                                   </div>
                                    <br>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Surname</label>
                                        <input type="text" name="spousesurname" class="form-control form-control-line" value="" minlength="2"> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Firstname</label>
                                        <input type="text" id="" name="spousefirstname" class="form-control form-control-line" value="" minlength="2"> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Spouse's Middlename</label>
                                      <input type="text" id="" name="spousemiddlename" class="form-control form-control-line" value=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Name Extension (Jr., Sr)</label>
                                      <input type="text" id="" name="extension" class="form-control form-control-line" value=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Occupation</label>
                                        <input type="text" name="occupation" id="example-email2" name="example-email" class="form-control" value="" placeholder=""> 
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Employer/Business Name</label>
                                        <input type="text" name="businessname" id="example-email2" name="example-email" value="" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Business Address</label>
                                        <input type="text" name="businessaddress" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Telephone Number</label>
                                        <input type="text" name="telephone" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Father's Surname</label>
                                        <input type="text" name="fathersurname" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Father's Firstname</label>
                                        <input type="text" name="fatherfirstname" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Father's Middlename</label>
                                        <input type="text" name="fathermiddlename" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Name Extension (Jr., Sr.)</label>
                                        <input type="text" name="nameextension" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Maiden Name</label>
                                        <input type="text" name="maidenname" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Surname</label>
                                        <input type="text" name="mothersurname" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Firstname</label>
                                        <input type="text" name="motherfirstname" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Mother's Middlename</label>
                                        <input type="text" name="mothermiddlename" id="example-email2" name="example-email" class="form-control" value="" placeholder="">
                                    </div>
                                    <br>
                        <div class="col-md-12">
                        <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Educational Background</h3>
                           </div>
                                    <br>
                                    <br>

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col">Level</th>
              <th scope="col">Name of School</th>
              <th scope="col">Basic Education/Degree/Course</th>
              <th scope="col">Highest Level/Units Earned</th>
              <th scope="col">Year Graduated</th>
            </tr>
          </thead>
          <tbody>
            <tr scope="row">
              <th scope="row">
              </th>
              <td>
                Elementary
              </td>
              <td><a href="#">James Yates</a></td>
              <td>
                Web Designer
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+63 983 0962 971</td>
              <td>NY University</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox" checked="" />
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>Secondary</td>
              <td><a href="#">Matthew Wasil</a></td>
              <td>
                Graphic Designer
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+02 020 3994 929</td>
              <td>London College</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>Vocational</td>
              <td><a href="#">Sampson Murphy</a></td>
              <td>
                Mobile Dev
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+01 352 1125 0192</td>
              <td>Senior High</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>College</td>
              <td><a href="#">Gaspar Semenov</a></td>
              <td>
                Illustrator
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+92 020 3994 929</td>
              <td>College</td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">

            <td>Graduate Studies</td>
              <td><a href="#">Gaspar Semenov</a></td>
              <td>
                Illustrator
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
              <td>+92 020 3994 929</td>
              <td>College</td>
            </tr>
            
          </tbody>
        </table>
      </div>
      
                         <div class="form-group col-md-4 m-t-20">
                                        <label>College Degree</label>
                                        <input type="text" name="course" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Graduate Studies</label>
                                        <input type="text" name="graduate" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>CSC Professional Eligibility </label>
                                        <input type="text" name="csc" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Rating</label>
                                        <input type="text" name="rating" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date of Examination/Conferment </label>
                                        <input type="text" name="dateofexamination" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Place of Examination </label>
                                        <input type="text" name="placeofexamination" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>License Number </label>
                                        <input type="text" name="licensenumber" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Issuance-PRC ID </label>
                                        <input type="date" name="dateofissuance" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Validity-PRC ID </label>
                                        <input type="date" name="dateofvalidity" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                 <br>
                                <div class="col-md-12">
                        <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Work Background</h3>
                           </div>
                                <br>
                                     <div class="form-group col-md-4 m-t-20">
                                        <label>Personnel ID</label>
                                        <input type="text" name="personnel" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Biometric Number</label>
                                        <input type="text" name="biometric" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Employment Status</label>
                                        <select name="status" class="form-control custom-select" required>
                                            <option>Select Status</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Casual">Casual</option>
                                            <option value="Job Order">Job Order</option>
                                            <option value="Co-Terminous">Co-Terminous</option>
                                            <option value="Elective">Elective</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Department</label>
                                        <select name="department" class="form-control custom-select" required>
                                            <option>Select Department</option>
                                            <option value="Municipal Agricultural Services Office">Municipal Agricultural Services Office</option>
                                            <option value="Municipal Social Welfare & Development Office">Municipal Social Welfare & Development Office</option>
                                            <option value="Municipal Assessor's Office">Municipal Assessor's Office</option>
                                            <option value="Commision on Election">Commision on Election</option>
                                            <option value="Local Civil Registrar">Local Civil Registrar</option>
                                            <option value="Budget Office">Budget Office</option>
                                            <option value="BOMWASA AND BIR">BOMWASA AND BIR</option>
                                            <option value="Accounting Office">Accounting Office</option>
                                            <option value="PESO">PESO</option>
                                            <option value="Municipal Treasurer's Office">Municipal Treasurer's Office</option>
                                            <option value="Cogressman's Office">Congressman's Office</option>
                                            <option value="Human Resource Management Office">Human Resource Management Office</option>
                                            <option value="MPDC">MPDC</option>
                                            <option value="KALAHI">KALAHI</option>
                                            <option value="Office of the Sangguniang Bayan">Office of the Sangguniang Bayan</option>
                                            <option value="Office of the Vice-Mayor">Office of the Vice-Mayor</option>
                                            <option value="Office of the Mayor">Office of the Mayor</option>
                                            <option value="Engineering Office">Engineering Office</option>
                                            <option value="MENRO">MENRO</option>
                                            <option value="Tourism">Tourism</option>
                                            <option value="Rural Health Unit">Rural Health Unit</option>
                                            <option value="DILG">DILG</option>
                                            <option value="MDRR">MDRR</option>
                                            <option value="GSO">GSO</option>
                                            <option value="DSWD">DSWD</option>
                                            <option value="Department of Trade and Industry">Department of Trade and Industry</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Position Title</label>
                                        <select name="position" class="form-control custom-select" required>
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
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Joining</label>
                                        <input type="date" name="dateofjoining" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Leaving </label>
                                        <input type="date" name="dateofleaving" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="">
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Date Of Mandatory Retirement</label>
                                        <input type="date" name="dateofretirement" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Salary Grade</label>
                                        <select name="salary" class="form-control custom-select" required>
                                            <option>Select Salary Grade</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="6" >6</option>
                                            <option value="7" >7</option>
                                            <option value="8" >8</option>
                                            <option value="9" >9</option>
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
                                     <div class="form-group col-md-4 m-t-20">
                                        <label>Step</label>
                                        <select name="step" class="form-control custom-select" required>
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
