<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
       public function index()
    {
    	$notices = Notice::get();
        return view('admin.notice.index', [
            'notices'=>$notices
        ]);
    }

    public function storenotice(Request $request){
        $noticesave =new Notice();
        $noticesave->noticetitle = $request->noticetitle;
        $noticesave->publisheddate = $request->publisheddate;

        if($noticesave->save()) {
            return redirect()->back();
        }
    }
}
