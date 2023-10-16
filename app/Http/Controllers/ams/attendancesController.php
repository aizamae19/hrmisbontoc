<?php

namespace App\Http\Controllers\ams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance as Attendances;
use Carbon\Carbon;

class attendancesController extends Controller
{
     public function index()
    {
        $attendance=Attendances::orderby('date', 'asc')->paginate(10);
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
    public function import_csv(Request $request){
        if (isset($request->datFile)) {
            $targetDir = "uploads/"; // Change this to the directory where you want to store the uploaded .dat files
            $targetFile = $targetDir . basename($_FILES["datFile"]["name"]);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if the file is a .dat file
            if ($fileType != "dat") {
                echo "Only .dat files are allowed.";
                $uploadOk = 0;
            }

            // Check if the file was successfully uploaded
            if ($uploadOk == 0) {
                echo "File upload failed.";
            } else {
                // if (move_uploaded_file($_FILES["datFile"]["tmp_name"], $targetFile)) {
                    $this::savetodb($_FILES["datFile"]["tmp_name"]);
                // } else {
                    // echo "Error uploading the file.";
                // }
            }
        }
    }
    public static function savetodb($filename){
        $delimiter = "\t";
        // Check if the file exists
        if (file_exists($filename)) {
            // Open the file for reading
            $file = fopen($filename, "r");

            // Check if the file was opened successfully
            if ($file) {
                while (!feof($file)) {
                    // Read a line from the file
                    $row = fgets($file);

                    // Process the data from each row
                    if ($row !== false) {
                        // Do something with $row, e.g., print it
                        $columns = explode($delimiter, $row);
                        // Process the columns as needed

                        $emp_id = trim($columns[0]);
                        $csvdate = Carbon::parse(trim($columns[1]));
                        $date = $csvdate->format('Y-m-d');
                        $checkAttendance = Attendances::where('employee_id', $emp_id)
                                                        ->where('date',$date)
                                                        ->first();
                        if(isset($checkAttendance)){

                            if (isset($checkAttendance->am_in)) {
                                if ($csvdate->hour < 12) {
                                    $checkAttendance->am_out = $csvdate->format('H:i:s');
                                    $checkAttendance->save();
                                } else {
                                   $checkAttendance->pm_in = $csvdate->format('H:i:s');
                                   $checkAttendance->save();
                                }
                            }

                            if ($checkAttendance->pm_in) {
                                $checkAttendance->pm_out = $csvdate->format('H:i:s');
                                $checkAttendance->save();
                            }

                        }else{
                            $saveAttendance = new Attendances();
                            $saveAttendance->employee_id = $emp_id;
                            $saveAttendance->date = $date;
                            if ($csvdate->hour < 12) {
                                 $saveAttendance->am_in = $csvdate->format('H:i:s');
                            } else {
                                $saveAttendance->pm_in = $csvdate->format('H:i:s');
                                
                            }
                            $saveAttendance->save();
                        }
                        // echo "Employee Id: $emp_id Date: $date <br>";
                        // return;
                    }
                }
                return redirect()->back()->with('message', 'Successfully imported!!');
                // Close the file
                fclose($file);
            } else {
                echo "Error opening the file.";
            }
        } else {
            echo "File not found.";
        }
    }

}