<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountSetting;

class AccountSettingController extends Controller
{
    public function index()
    {   
        $accountsetting = AccountSetting::get();
        return view('admin.accountsetting.index', [
            'accountsetting'=>$accountsetting
        ]);
    }  

    public function storeaccountsetting(Request $request){
        $accountsettingsave =new AccountSetting();
        $accountsettingsave->description = $request->description;
        $accountsettingsave->copyright = $request->copyright;
        $accountsettingsave->email = $request->email;
        $accountsettingsave->address = $request->address;
        $accountsettingsave->contactnumber = $request->contactnumber;

        if($accountsettingsave->save()) {
            return redirect()->back();
        }
    }

}