<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leavetype;

class LeaveTypeController extends Controller
{
     public function leavetypeleave()
    {
        $leavetypes = Leavetype::get();
        return view('admin.leave.leavetype.index',[
            'leavetypes'=>$leavetypes
        ]);
    }

    public function storeleavetype(Request $request){
        $leavetypesave =new Leavetype();
        $leavetypesave->leavename = $request->leavename;
        $leavetypesave->leaveday = $request->leaveday;

        if($leavetypesave->save()) {
            return redirect()->back();
        }
    }
}
