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
        $leaveapplications = LeaveApplication::findOrFail($id);
        $leaveapplications->status = 'approved';
        $leaveapplications->save();
        return view('admin.leave.leaveapplication.index')->with('success', 'Leave application approved!');
    }

    public function reject($id)
    {
        $leaveapplications = LeaveApplication::findOrFail($id);
        $leaveapplications->status = 'rejected';
        $leaveapplications->save();
        return view('admin.leave.leaveapplication.index')->with('success', 'Leave application rejected!');
    }
}
