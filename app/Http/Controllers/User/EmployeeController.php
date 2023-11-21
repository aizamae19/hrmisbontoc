<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function viewemployee(){
    $name = Auth::user()->name;
        $nameParts = explode(' ', $name);

        $employee = Employee::where(function ($query) use ($nameParts) {
            foreach ($nameParts as $part) {
                $query->orWhere('firstname', 'LIKE', "%$part%");
                $query->orWhere('middlename', 'LIKE', "%$part%");
                $query->orWhere('lastname', 'LIKE', "%$part%");
            }
        })->first();

    return view('users.myprofile.index', ['employee' => $employee]);
    }

    public function storeemployee(Request $request){ 
        $employeesave = new Employee();
        $employeesave->firstname = $request->firstname;
        $employeesave->middlename = $request->middlename;
        $employeesave->lastname = $request->lastname;
        $employeesave->suffix = $request->suffix;
        $employeesave->address = $request->address;
        $employeesave->barangay = $request->barangay;
        $employeesave->municipality = $request->municipality;
        $employeesave->province = $request->province;
        $employeesave->maritalstatus = $request->maritalstatus;
        $employeesave->dateofbirth = $request->dateofbirth;
        $employeesave->gender = $request->gender;
        $employeesave->bloodtype = $request->bloodtype;
        $employeesave->contactnumber = $request->contactnumber;
        $employeesave->persontocontact = $request->persontocontact;
        $employeesave->contact = $request->contact;
        $employeesave->personalemail = $request->personalemail;
        $employeesave->corporateemail = $request->corporateemail;
        $employeesave->course = $request ->course;
        $employeesave->graduate = $request ->graduate;
        $employeesave->csc = $request ->csc;
        $employeesave->dateofissuance = $request ->dateofissuance;
        $employeesave->dateofvalidity = $request ->dateofvalidity;

        if($employeesave->save()) {
            return redirect()->back();
        }
    }

    public function editemployee(Request $request){
        $employee = Employee::where('id', $request->id)->first();
        $employees = Employee::orderBy('updated_at', 'asc')->get();

        return view('users.myprofile.update',[
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
        $Updatesave->barangay = $request->barangay;
        $Updatesave->municipality = $request->municipality;
        $Updatesave->province = $request->province;
        $Updatesave->maritalstatus = $request->maritalstatus;
        $Updatesave->dateofbirth = $request->dateofbirth;
        $Updatesave->gender = $request->gender;
        $Updatesave->bloodtype = $request->bloodtype;
        $Updatesave->contactnumber = $request->contactnumber;
        $Updatesave->persontocontact = $request->persontocontact;
        $Updatesave->contact = $request->contact;
        $Updatesave->personalemail = $request->personalemail;
        $Updatesave->corporateemail = $request->corporateemail;
        $Updatesave->course = $request ->course;
        $Updatesave->graduate = $request ->graduate;
        $Updatesave->csc = $request ->csc;
        $Updatesave->dateofissuance = $request ->dateofissuance;
        $Updatesave->dateofvalidity = $request ->dateofvalidity;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }

}
