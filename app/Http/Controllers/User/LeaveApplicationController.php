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
}
