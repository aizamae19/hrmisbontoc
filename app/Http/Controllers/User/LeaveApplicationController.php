<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leaveapplication;

class LeaveApplicationController extends Controller
{
       public function index()
    {
        return view('users.leave.leaveapplication.index');
    }

    public function storeleaveapplication(Request $request){ 
        $leaveapplicationsave =new Leaveapplication();
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->employeename = $request->employeename;
        $leaveapplicationsave->dateoffiling = $request->dateoffiling;
        $leaveapplicationsave->position = $request->position;
        $leaveapplicationsave->salary = $request->salary;
        $leaveapplicationsave->vacationleave = $request->vacationleave;
        $leaveapplicationsave->mandatoryleave = $request->mandatoryleave;
        $leaveapplicationsave->sickleave = $request->sickleave;
        $leaveapplicationsave->maternityleave = $request->maternityleave;
        $leaveapplicationsave->paternityleave = $request->paternityleave;
        $leaveapplicationsave->specialprivilegeleave = $request->specialprivilegeleave;
        $leaveapplicationsave->soloparentleave = $request->soloparentleave;
        $leaveapplicationsave->studyleave = $request->studyleave;
        $leaveapplicationsave->vawcleave = $request->vawcleave;
        $leaveapplicationsave->rehabilitation = $request->rehabilitation;
        $leaveapplicationsave->specialleavebenefits = $request->specialleavebenefits;
        $leaveapplicationsave->specialemergency = $request->specialemergency;
        $leaveapplicationsave->adoptionleave = $request->adoptionleaave;
        $leaveapplicationsave->other = $request->other;
        $leaveapplicationsave->reason = $request->reason;
        $leaveapplicationsave->philippine = $request->philippine;
        $leaveapplicationsave->phil = $request->phil;
        $leaveapplicationsave->abroad = $request->abroad;
        $leaveapplicationsave->outofcountry = $request->outofcountry;
        $leaveapplicationsave->inhospital = $request->inhospital;
        $leaveapplicationsave->admit = $request->admit;
        $leaveapplicationsave->outpatient = $request->outpatient;
        $leaveapplicationsave->undermedication = $request->undermedication;
        $leaveapplicationsave->leavebenefits = $request->leavebenefits;
        $leaveapplicationsave->benefits = $request->benefits;
        $leaveapplicationsave->completion = $request->completion;
        $leaveapplicationsave->boardexam = $request->boardexam;
        $leaveapplicationsave->otherpurpose = $request->otherpurpose;
        $leaveapplicationsave->monetization = $request->monetization;
        $leaveapplicationsave->terminalleave = $request->terminalleave;
        $leaveapplicationsave->inclusivedates = $request->inclusivedates;
        $leaveapplicationsave->notrequested = $request->notrequested;
        $leaveapplicationsave->requested = $request->requested;

        if($leaveapplicationsave->save()) {
            return redirect()->back();
        }
    }
}
