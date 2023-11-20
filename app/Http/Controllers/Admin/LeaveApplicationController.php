<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leaveapplication;

class LeaveApplicationController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

       public function index()
    {
        $leaveapplications = Leaveapplication::get();
        return view('admin.leave.leaveapplication.index', [
            'leaveapplications'=>$leaveapplications
        ]);
    }

    public function approve($id)
    {
        $leaveapplications = Leaveapplication::findOrFail($id);
        $leaveapplications->status = 'Approved';
        $leaveapplications->save();
        return redirect('/leaveapplication')->with('success', 'Leave application approved!');
    }

    public function reject($id)
    {
        $leaveapplications = Leaveapplication::findOrFail($id);
        $leaveapplications->status = 'Rejected';
        $leaveapplications->save();
        return redirect('/leaveapplication')->with('success', 'Leave application rejected!');
    }

    public function editleaveapplication(Request $request){
        $leaveapplication = Leaveapplication::where('id', $request->id)->first();
        $leaveapplications = Leaveapplication::orderBy('updated_at', 'asc')->get();

        return view('admin.leave.leaveapplication.update',[
            'leaveapplication'=>$leaveapplication,
            'leaveapplications'=>$leaveapplications
        ]);
    }

    public function updateleaveapplication(Request $request){ 
        $Updatesave =new Leaveapplication();
        $Updatesave->office = $request->office;
        $Updatesave->employeename = $request->employeename;
        $Updatesave->dateoffiling = $request->dateoffiling;
        $Updatesave->position = $request->position;
        $Updatesave->salary = $request->salary;
        $Updatesave->vacationleave = $request->vacationleave;
        $Updatesave->mandatoryleave = $request->mandatoryleave;
        $Updatesave->sickleave = $request->sickleave;
        $Updatesave->maternityleave = $request->maternityleave;
        $Updatesave->paternityleave = $request->paternityleave;
        $Updatesave->specialprivilegeleave = $request->specialprivilegeleave;
        $Updatesave->soloparentleave = $request->soloparentleave;
        $Updatesave->studyleave = $request->studyleave;
        $Updatesave->vawcleave = $request->vawcleave;
        $Updatesave->rehabilitation = $request->rehabilitation;
        $Updatesave->specialleavebenefits = $request->specialleavebenefits;
        $Updatesave->specialemergency = $request->specialemergency;
        $Updatesave->adoptionleave = $request->adoptionleaave;
        $Updatesave->other = $request->other;
        $Updatesave->reason = $request->reason;
        $Updatesave->philippine = $request->philippine;
        $Updatesave->phil = $request->phil;
        $Updatesave->abroad = $request->abroad;
        $Updatesave->outofcountry = $request->outofcountry;
        $Updatesave->inhospital = $request->inhospital;
        $Updatesave->admit = $request->admit;
        $Updatesave->outpatient = $request->outpatient;
        $Updatesave->undermedication = $request->undermedication;
        $Updatesave->leavebenefits = $request->leavebenefits;
        $Updatesave->benefits = $request->benefits;
        $Updatesave->completion = $request->completion;
        $Updatesave->boardexam = $request->boardexam;
        $Updatesave->otherpurpose = $request->otherpurpose;
        $Updatesave->monetization = $request->monetization;
        $Updatesave->terminalleave = $request->terminalleave;
        $Updatesave->inclusivedates = $request->inclusivedates;
        $Updatesave->notrequested = $request->notrequested;
        $Updatesave->requested = $request->requested;

        if($Updatesave->save()) {
            return redirect()->back();
        }
    }

    public function viewleaveapplication(Request $request){
        $leaveapplications=Leaveapplication::where('id',$request->id)->first();

        return view('admin.leave.leaveapplication.view',[
                'leaveapplications'=>$leaveapplications
        ]);
    }
}
