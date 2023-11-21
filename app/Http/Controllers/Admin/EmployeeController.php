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
        $employeesave->barangay = $request->barangay;
        $employeesave->municipality = $request->municipality;
        $employeesave->province = $request->province;
        $employeesave->maritalstatus = $request->maritalstatus;
        $employeesave->dateofbirth = $request->dateofbirth;
        $employeesave->placeofbirth = $request->placeofbirth;
        $employeesave->gender = $request->gender;
        $employeesave->bloodtype = $request->bloodtype;
        $employeesave->contactnumber = $request->contactnumber;
        $employeesave->persontocontact = $request->persontocontact;
        $employeesave->contact = $request->contact;
        $employeesave->personalemail = $request->personalemail;
        $employeesave->corporateemail = $request->corporateemail;
        $employeesave->gsis = $request->gsis;
        $employeesave->pagibig = $request->pagibig;
        $employeesave->philhealth = $request->philhealth;
        $employeesave->sss = $request->sss;
        $employeesave->tin = $request->tin;
        $employeesave->course = $request ->course;
        $employeesave->graduate = $request ->graduate;
        $employeesave->csc = $request ->csc;
        $employeesave->dateofissuance = $request ->dateofissuance;
        $employeesave->dateofvalidity = $request ->dateofvalidity;
        $employeesave->personnel = $request ->personnel;
        $employeesave->biometric = $request ->biometric;
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
        $Updatesave->barangay = $request->barangay;
        $Updatesave->municipality = $request->municipality;
        $Updatesave->province = $request->province;
        $Updatesave->maritalstatus = $request->maritalstatus;
        $Updatesave->dateofbirth = $request->dateofbirth;
        $Updatesave->placeofbirth = $request->placeofbirth;
        $Updatesave->gender = $request->gender;
        $Updatesave->bloodtype = $request->bloodtype;
        $Updatesave->contactnumber = $request->contactnumber;
        $Updatesave->persontocontact = $request->persontocontact;
        $Updatesave->contact = $request->contact;
        $Updatesave->personalemail = $request->personalemail;
        $Updatesave->corporateemail = $request->corporateemail;
        $Updatesave->gsis = $request->gsis;
        $Updatesave->pagibig = $request->pagibig;
        $Updatesave->philhealth = $request->philhealth;
        $Updatesave->sss = $request->sss;
        $Updatesave->tin = $request->tin;
        $Updatesave->course = $request ->course;
        $Updatesave->graduate = $request ->graduate;
        $Updatesave->csc = $request ->csc;
        $Updatesave->dateofissuance = $request ->dateofissuance;
        $Updatesave->dateofvalidity = $request ->dateofvalidity;
        $Updatesave->personnel = $request ->personnel;
        $Updatesave->biometric = $request ->biometric;
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

    public function viewemployee(Request $request){
        $employees=Employee::where('id',$request->id)->first();

        return view('admin.employees.employee.view',[
                'employees'=>$employees
        ]);
    }

    public function permanentEmployees()
    {
        $permanentEmployees = $this->getpermanentEmployees();

        return view('admin.employees.permanent', compact('permanentEmployees'));
    }

    private function getpermanentEmployees()
    {
        return Employee::where('status', 'permanent')->get();
    }

    public function casualEmployees()
    {
        $casualEmployees = $this->getcasualEmployees();

        return view('admin.employees.casual', compact('casualEmployees'));
    }

    private function getcasualEmployees()
    {
        return Employee::where('status', 'casual')->get();
    }

    public function joborderEmployees()
    {
        $joborderEmployees = $this->getjoborderEmployees();

        return view('admin.employees.joborder', compact('joborderEmployees'));
    }

    private function getjoborderEmployees()
    {
        return Employee::where('status', 'job order')->get();
    }

    public function coterminousEmployees()
    {
        $coterminousEmployees = $this->getcoterminousEmployees();

        return view('admin.employees.coterminous', compact('coterminousEmployees'));
    }

    private function getcoterminousEmployees()
    {
        return Employee::where('status', 'co-terminous')->get();
    }

    public function electivesEmployees()
    {
        $electivesEmployees = $this->getelectivesEmployees();

        return view('admin.employees.electives', compact('electivesEmployees'));
    }

    private function getelectivesEmployees()
    {
        return Employee::where('status', 'electives')->get();
    }
}
