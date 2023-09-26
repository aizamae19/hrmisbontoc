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
        $employeesave->suffix = $request->suffix;
        $employeesave->address = $request->address;
        $employeesave->maritalstatus = $request->maritalstatus;
        $employeesave->dateofbirth = $request->dateofbirth;
        $employeesave->gender = $request->gender;
        $employeesave->bloodtype = $request->bloodtype;
        $employeesave->contactnumber = $request->contactnumber;
        $employeesave->persontocontact = $request->persontocontact;
        $employeesave->personalemail = $request->personalemail;
        $employeesave->corporateemail = $request->corporateemail;
        $employeesave->course = $request ->course;
        $employeesave->graduate = $request ->graduate;
        $employeesave->csc = $request ->csc;
        $employeesave->dateofissuance = $request ->dateofissuance;
        $employeesave->dateofvalidity = $request ->dateofvalidity;
        $employeesave->personnel = $request ->personnel;
        $employeesave->status = $request ->status;
        $employeesave->position = $request ->position;
        $employeesave->dateofjoining = $request ->dateofjoining;
        $employeesave->dateofleaving = $request ->dateofleaving;
        $employeesave->dateofretirement = $request ->dateofretirement;
        $employeesave->salary = $request ->salary;
        $employeesave->step = $request ->step;

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
        $Updatesave->suffix = $request->suffix;
        $Updatesave->address = $request->address;
        $Updatesave->maritalstatus = $request->maritalstatus;
        $Updatesave->dateofbirth = $request->dateofbirth;
        $Updatesave->gender = $request->gender;
        $Updatesave->bloodtype = $request->bloodtype;
        $Updatesave->contactnumber = $request->contactnumber;
        $Updatesave->persontocontact = $request->persontocontact;
        $Updatesave->personalemail = $request->personalemail;
        $Updatesave->corporateemail = $request->corporateemail;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }
}
