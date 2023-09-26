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

    public function addleavetype(request $request){
        $leavetypes = Leavetype::get();
        return view('admin.leave.leavetype.index', [
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
    public function editleavetype(Request $request){
        $leavetype = Leavetype::where('id', $request->id)->first();
        $leavetypes = Leavetype::orderBy('updated_at', 'asc')->get();

        return view('admin.leave.leavetype.update',[
            'leavetype'=>$leavetype,
            'leavetypes'=>$leavetypes
        ]);
    }

    public function updateleavetype(Request $request){
        $Updatesave=leavetype::where('id' ,$request->id)->first();
        $Updatesave->leavename = $request->leavename;
        $Updatesave->leaveday = $request->leaveday;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }

    public function deleteleavetype(Request $request){
        $Deletesave=Leavetype::where('id' ,$request->id)->first();
        $Deletesave->leavename =$request->leavename;
        $Deletesave->leaveday =$request->leaveday;

        if($Deletesave->delete()) {
            return redirect()->back()->withErrors('Deleted!');
        }
        }
    }
