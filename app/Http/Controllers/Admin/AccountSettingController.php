<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountSetting;

class AccountSettingController extends Controller
{
    public function addaccountsetting(){
        $accountsettings=AccountSetting::all();
        return view('admin.accountsetting.index',[
                'accountsettings'=>$accountsettings
        ]);
    }
    public function storeaccountsetting(Request $request){
        $accountsettingsave= new AccountSetting();
        $accountsettingsave->copyright = $request->copyright;
        $accountsettingsave->email = $request->email;
        $accountsettingsave->address= $request->address;
        $accountsettingsave->contactnumber= $request->contactnumber;

        if($accountsettingsave->save()) {
             return redirect()->back()->withErrors('Successfully Saved!');
        }
    }
    
}