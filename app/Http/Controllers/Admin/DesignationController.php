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
}
