<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
     public function employeeemployees()
    {   
        $employees = Employee::get();
        return view('admin.employees.employee.index', [
            'employees'=>$employees
        ]);
    }  

    public function addemployee(request $request){
        $employees = Employee::get();
        return view('admin.employees.employee.add', [
            'employees'=>$employees
        ]);
    }


    public function storeemployee(Request $request){
        $employeesave =new Employee();
        $employeesave->firstname = $request->firstname;
        $employeesave->middlename = $request->middlename;
        $employeesave->lastname = $request->lastname;
        $employeesave->eid = $request->eid;
        $employeesave->status = $request->status;
        $employeesave->gender = $request->gender;
        $employeesave->bloodtype = $request->bloodtype;
        $employeesave->contact = $request->contact;
        $employeesave->dateofbirth = $request->dateofbirth;
        $employeesave->joindate = $request->joindate;
        $employeesave->username = $request->username;
        $employeesave->email = $request->email;

        if($employeesave->save()) {
            return redirect()->back();
        }
    }
}
