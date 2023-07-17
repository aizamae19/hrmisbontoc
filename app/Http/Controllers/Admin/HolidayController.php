<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
     public function holidayleave()
    {
        $holidays = Holiday::get();
        return view('admin.leave.holiday.index',[
            'holidays'=>$holidays
        ]);
    }

    public function storeholiday(Request $request){
        $holidaysave =new Holiday();
        $holidaysave->nameofholiday = $request->nameofholiday;
        $holidaysave->startdate = $request->startdate;
        $holidaysave->enddate = $request->enddate;

        if($holidaysave->save()) {
            return redirect()->back();
        }
    }
}
