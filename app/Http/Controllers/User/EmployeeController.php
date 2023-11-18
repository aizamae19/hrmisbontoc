<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function viewemployee(Request $request){
        $employees=Employee::where('id',$request->id)->first();

        return view('users.myprofile.index',[
                'employees'=>$employees
        ]);
    }
}
