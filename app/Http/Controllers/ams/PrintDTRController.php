<?php

namespace App\Http\Controllers\ams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Holiday;
use Carbon\Carbon;

class PrintDTRController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employee::get();

        return view('ams.printdtr',[
            'employees'=>  $employees 
        ]);
    }
     
     public function printdtrbackup(Request $request)
     {
         $employees = Employee::where('id', $request->id)->first();
         $date=Carbon::create($request->dateFrom)->format('F d')." to ".Carbon::create($request->dateTo)->format('d, Y');
         return view('ams.dtr',[
         'employees'=>  $employees,
             'dateFrom' =>  $date
      ]);
     }
     
     public function printdtr(Request $request)
     {
        $attendance = Attendance::where('biometric', $request->id)
                                ->whereMonth('date', $request->month)
                                ->whereYear('date', $request->year)
                                 ->get();
        $attendanceList = [];
                                 foreach ($attendance as $entry) {
                                     $attendanceList[] = [
                                         'date' => $entry->date,
                                         'am_in' => $entry->am_in,
                                         'am_out'=> $entry->am_out, 
                                         'pm_in'=> $entry->pm_in, 
                                         'pm_out'=>  $entry->pm_out,
                                     ];
                                 }

        $employees = Employee::where('biometric', $request->id)
                                 ->get();
        $holiday = Holiday::whereMonth('startdate', $request->month)
                            ->whereYear('startdate', $request->year)
                            ->get();
        
        $holidayList = [];
                                 foreach($holiday as $data){
                                    
                                    $holidayList[] = [
                                        'holidayName' => $data->nameofholiday,
                                        'startdate' => $data->startdate,
                                        'enddate' => $data->enddate
                                    ];
                                 }
        // return json_encode($attendance);
         return view('ams.dtr',[
            'attendanceList'=> $attendanceList,
            'employees'=>  $employees,
            'month' => $request->month,
            'year' => $request->year,
            'holiday' => $holidayList
         ]);
        }


}
