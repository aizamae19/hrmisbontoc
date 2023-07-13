<?php

namespace App\Http\Controllers\ams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class PrintDTRController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employee::get();

        return view('ams.printdtr',[
            'employees'=>  $employees 
        ]);
    }
    public function printdtr(Request $request)
    {
        $employees = Employee::where('id', $request->id)->first();

        return view('ams.printdtr',[
            'employees'=>  $employees 
        ]);
    }
}
