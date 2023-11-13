<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LeaveApplication;

class LeaveApplicationController extends Controller
{
       public function index()
    {
        return view('users.leave.leaveapplication.index');
    }

    public function addleaveapplication(request $request){
        $leaveapplications = LeaveApplication::get();
        return view('users.leave.leaveapplication.index', [
            'leaveapplications'=>$leaveapplications
        ]);
    }

    public function storeleaveapplication(Request $request){ 
        $leaveapplicationsave =new LeaveApplication();
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->employeename = $request->employeename;
        $leaveapplicationsave->dateoffiling = $request->dateoffiling;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;
        $leaveapplicationsave->office = $request->office;

        if($leaveapplicationsave->save()) {
            return redirect()->back();
        }
    }
}
