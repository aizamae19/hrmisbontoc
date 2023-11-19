<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function viewemployee(){
    $email = Auth::user()->email;
    $employee = Employee::where('personalemail', $email)->first();

    return view('users.myprofile.index', ['employee' => $employee]);
    }
}
