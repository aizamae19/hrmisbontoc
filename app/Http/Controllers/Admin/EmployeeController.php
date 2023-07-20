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
        $employeesave->position = $request->position;
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

    public function editemployee(Request $request){
        $employee = Employee::where('id', $request->id)->first();
        $employees = Employee::orderBy('updated_at', 'asc')->get();

        return view('admin.employees.employee.update',[
            'employee'=>$employee,
            'employees'=>$employees
        ]);
    }

    public function updateemployee(Request $request){
        $Updatesave=Employee::where('id' ,$request->id)->first();
        $Updatesave->firstname = $request->firstname;
        $Updatesave->middlename = $request->middlename;
        $Updatesave->lastname = $request->lastname;
        $Updatesave->eid = $request->eid;
        $Updatesave->position = $request->position;
        $Updatesave->gender = $request->gender;
        $Updatesave->bloodtype = $request->bloodtype;
        $Updatesave->contact = $request->contact;
        $Updatesave->dateofbirth = $request->dateofbirth;
        $Updatesave->joindate = $request->joindate;
        $Updatesave->username = $request->username;
        $Updatesave->email = $request->email;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }
}
