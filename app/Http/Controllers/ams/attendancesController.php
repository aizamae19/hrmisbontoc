<?php

namespace App\Http\Controllers\ams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendances;
use Carbon\Carbon;

class attendancesController extends Controller
{
     public function index()
    {
        $attendance=Attendances::orderby('employee_id', 'asc')->paginate(10);
        return view('ams.attendances', ['attendance' =>$attendance
        ]);
    }


  public function showWorkingHoursList($employeeId)
{
    $workingHours = Attendances::where('employee_id', $employeeId)->get();
    $workingHoursList = [];

    foreach ($workingHours as $entry) {
        $workingHours = calculateWorkingHours($entry->am_in, $entry->am_out, $entry->pm_in, $entry->pm_out);

        $workingHoursList[] = [
            'am_in' => $entry->am_in,
            'am_out'=> $entry->am_out, 
            'pm_in'=> $entry->pm_in, 
            'pm_out'=>  $entry->pm_out,
            'working_hours' => $workingHours,
        ];
    }

    return view('ams.attendances', compact('workingHoursList'));
        }


    }