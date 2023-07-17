<?php

namespace App\Http\Controllers\ams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Carbon\Carbon;

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
        $employee = Employee::where('id', $request->id)->first();

        return view('ams.dtr',[
            'employee'=>  $employee,
            'date' => Carbon::create($request->dateFrom)->format('F, Y')
        ]);
    }
}
