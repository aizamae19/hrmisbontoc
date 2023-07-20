<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
   public function designationorganization()
    {
        $designations = Designation::get();
        return view('admin.organization.designation.index',[
            'designations'=>$designations
        ]);
    }

    public function storedesignation(Request $request){
        $designationsave =new Designation();
        $designationsave->designation_list = $request->designation_list;

        if($designationsave->save()) {
            return redirect()->back();
        }
    }

    public function editdesignation(Request $request){
        $designation = Designation::where('id', $request->id)->first();
        $designations = Designation::orderBy('updated_at', 'asc')->get();

        return view('admin.organization.designation.update',[
            'designation'=>$designation,
            'designations'=>$designations
        ]);
    }

    public function updatedesignation(Request $request){
        $Updatesave=Designation::where('id' ,$request->id)->first();
        $Updatesave->designation_list =$request->designation_list;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }

    public function deletedesignation(Request $request){
        $Deletesave=Designation::where('id' ,$request->id)->first();
        $Deletesave->designation_list =$request->designation_list;

        if($Deletesave->delete()) {
            return redirect()->back()->withErrors('Deleted!');
        }
    }
}
