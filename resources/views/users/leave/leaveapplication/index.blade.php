@extends('layouts.users')

@section('content')
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><i class="fa fa-clone" style="color:#1976d2"> </i> Application</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Leave Application</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">Leave Application</h4>
                            </div>
                            <form method="post" action="" id="leaveapply" enctype="multipart/form-data">
                            <div class="modal-body">
                                
                                <div class="form-group">
                                    <label>OFFICE/DEPARTMENT</label>
                                     <input type="text" name="office" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>

                                <div class="form-group">
                                    <label>EMPLOYEE NAME</label>
                                     <input type="text" name="employeename" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>DATE OF FILING</label>
                                     <input type="date" name="dateoffiling" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>POSITION</label>
                                     <input type="text" name="position" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>SALARY</label>
                                     <input type="text" name="salary" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>6.A TYPE OF LEAVE TO BE AVAILED OF:</label>
                                    <br>
                                    <input type="checkbox" id="vacationleave" name="vacationleave" value="vacationleave">
                                    <label for="vacationleave"> Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="mandatoryleave" name="mandatoryleave" value="mandatoryleave">
                                    <label for="mandatoryleave"> Mandatory/Forced Leave (Sec. 25, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="sickleave" name="sickleave" value="sickleave">
                                    <label for="sickleave"> Sick Leave (Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="maternityleave" name="maternityleave" value="maternityleave">
                                    <label for="maternityleave"> Maternity Leave (R.A. No. 11210 / IRR issued by CSC, DOLE and SSS)</label><br>
                                    <input type="checkbox" id="paternityleave" name="paternityleave" value="paternityleave">
                                    <label for="paternityleave"> Paternity Leave (R.A. No. 8187 / CSC MC No. 71, s. 1998, as amended)</label><br>
                                    <input type="checkbox" id="specialprivilegeleave" name="specialprivilegeleave" value="specialprivilegeleave">
                                    <label for="specialprivilegeleave"> Special Privilege Leave (Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="soloparentleave" name="soloparentleave" value="soloparentleave">
                                    <label for="soloparentleave"> Solo Parent Leave (RA No. 8972 / CSC MC No. 8, s. 2004)</label><br>
                                    <input type="checkbox" id="studyleave" name="studyleave" value="studyleave">
                                    <label for="studyleave"> Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="vawcleave" name="vawcleave" value="vawcleave">
                                    <label for="vawcleave"> 10-Day VAWC Leave (RA No. 9262 / CSC MC No. 15, s. 2005)</label><br>
                                    <input type="checkbox" id="rehabilitation" name="rehabilitation" value="rehabilitation">
                                    <label for="rehabilitation"> Rehabilitation Privilege (Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)</label><br>
                                    <input type="checkbox" id="specialleavebenefits" name="specialleavebenefits" value="specialleavebenefits">
                                    <label for="specialleavebenefits"> Special Leave Benefits for Women (RA No. 9710 / CSC MC No. 25, s. 2010)</label><br>
                                    <input type="checkbox" id="specialemergency" name="specialemergency" value="specialemergency">
                                    <label for="specialemergency"> Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)</label><br>
                                    <input type="checkbox" id="adoptionleave" name="adoptionleave" value="adoptionleave">
                                    <label for="adoptionleave"> Adoption Leave (R.A. No. 8552)</label><br>
                                    <input type="checkbox" id="other" name="other" value="other">
                                    <label for="other">Others:</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="reason" name="reason" value="">
                                </div>
                                <div class="form-group">
                                    <label>6.B DETAILS OF LEAVE</label>
                                    <br>
                                    <label>In case of Vacation/Special Privilege Leave:</label><br>
                                    <input type="checkbox" id="philippines" name="philippines" value="philippines">
                                    <label for="philippines">Within the Philippines</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="philippines" name="philippines" value=""><br>
                                    <input type="checkbox" id="abroad" name="abroad" value="abroad">
                                    <label for="abroad">Abroad (Specify)</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="abroad" name="abroad" value="">
                                    <br>
                                    <label>In case of Sick Leave:</label><br>
                                    <input type="checkbox" id="inhospital" name="inhospital" value="inhospital">
                                    <label for="inhospital">In Hospital (Specify Illness)</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="inhospital" name="inhospital" value=""><br>
                                    <input type="checkbox" id="outpatient" name="outpatient" value="outpatient">
                                    <label for="outpatient">Out Patient (Specify Illness)</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="outpatient" name="outpatient" value=""><br>
                                    <label>In case of Special Leave Benefits for Women:</label><br>
                                    <label for="leavebenefits">(Specify Illness)</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="leavebenefits" name="leavebenefits" value=""><br>
                                    <label>In case of Study Leave:</label><br>
                                    <input type="checkbox" id="completion" name="completion" value="completion">
                                    <label for="completion">Completion of Master's Degree</label>
                                    <br>
                                    <input type="checkbox" id="boardexam" name="boardexam" value="boardexam">
                                    <label for="boardexam">BAR/Board Examination Review </label><br>
                                    <label for="otherpurpose">Other purpose:</label>
                                    <input type="text" style="border: none; border-bottom: 1px solid black;" id="otherpurpose" name="otherpurpose" value=""><br>
                                    <input type="checkbox" id="monetization" name="monetization" value="monetization">
                                    <label for="monetization">Monetization of Leave Credits</label>
                                    <br>
                                    <input type="checkbox" id="terminalleave" name="terminalleave" value="terminalleave">
                                    <label for="terminalleave">Terminal Leave</label><br>
                                </div>
                                <div class="form-group">
                                    <span style="color:red" id="total"></span>
                                    <div class="span pull-right">
                                        <button class="btn btn-info fetchLeaveTotal">Fetch Total Leave</button>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label>6.C NUMBER OF WORKING DAYS APPLIED FOR</label><br>
                                    <label class="control-label" id="hourlyFix">Inclusive Dates</label>
                                    <input type="text" name="startdate" class="form-control mydatetimepickerFull" id="recipient-name1" required>
                                </div>
                                <div class="form-group">
                                    <label>6.D COMMUTATION</label><br>
                                    <input type="checkbox" id="notrequested" name="notrequested" value="notrequested">
                                    <label for="notrequested">Not Requested</label>
                                    <br>
                                    <input type="checkbox" id="requested" name="requested" value="requested">
                                    <label for="requested">Requested</label><br>
                                </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id" class="form-control" id="recipient-name1" required> 
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>                     
            </div>

@endsection