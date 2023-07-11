<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EarnedLeaveController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

      public function index()
    {
        return view('admin.leave.earnedleave.index');
    }
}
