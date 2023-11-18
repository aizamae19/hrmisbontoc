<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function viewemployee($id){
        $employees=Employee::where('username',$request->id)->first();

        return view('users.myprofile.index',[
                'employees'=>$employees
        ]);
    }
}