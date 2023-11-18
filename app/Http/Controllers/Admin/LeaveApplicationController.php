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
}
