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
}
