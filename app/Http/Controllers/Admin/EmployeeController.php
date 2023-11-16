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
        $employeesave->department = $request ->department;
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
        $Updatesave->course = $request ->course;
        $Updatesave->graduate = $request ->graduate;
        $Updatesave->csc = $request ->csc;
        $Updatesave->dateofissuance = $request ->dateofissuance;
        $Updatesave->dateofvalidity = $request ->dateofvalidity;
        $Updatesave->personnel = $request ->personnel;
        $Updatesave->status = $request ->status;
        $Updatesave->department = $request ->department;
        $Updatesave->position = $request ->position;
        $Updatesave->dateofjoining = $request ->dateofjoining;
        $Updatesave->dateofleaving = $request ->dateofleaving;
        $Updatesave->dateofretirement = $request ->dateofretirement;
        $Updatesave->salary = $request ->salary;
        $Updatesave->step = $request ->step;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }

    public function deleteemployee(Request $request){
        $Deletesave=Employee::where('id' ,$request->id)->first();
        $Deletesave->firstname = $request->firstname;
        $Deletesave->middlename = $request->middlename;
        $Deletesave->lastname = $request->lastname;
        $Deletesave->suffix = $request->suffix;
        $Deletesave->address = $request->address;
        $Deletesave->maritalstatus = $request->maritalstatus;
        $Deletesave->dateofbirth = $request->dateofbirth;
        $Deletesave->gender = $request->gender;
        $Deletesave->bloodtype = $request->bloodtype;
        $Deletesave->contactnumber = $request->contactnumber;
        $Deletesave->persontocontact = $request->persontocontact;
        $Deletesave->personalemail = $request->personalemail;
        $Deletesave->corporateemail = $request->corporateemail;
        $Deletesave->course = $request ->course;
        $Deletesave->graduate = $request ->graduate;
        $Deletesave->csc = $request ->csc;
        $Deletesave->dateofissuance = $request ->dateofissuance;
        $Deletesave->dateofvalidity = $request ->dateofvalidity;
        $Deletesave->personnel = $request ->personnel;
        $Deletesave->status = $request ->status;
        $Deletesave->department = $request ->department;
        $Deletesave->position = $request ->position;
        $Deletesave->dateofjoining = $request ->dateofjoining;
        $Deletesave->dateofleaving = $request ->dateofleaving;
        $Deletesave->dateofretirement = $request ->dateofretirement;
        $Deletesave->salary = $request ->salary;
        $Deletesave->step = $request ->step;

        if($Deletesave->delete()) {
            return redirect()->back()->withErrors('Deleted!');
        }
    }

    public function viewemployee(Request $request){
        $employees=Employee::where('id',$request->id)->first();

        return view('admin.employees.employee.view',[
                'employees'=>$employees
        ]);
    }
}
