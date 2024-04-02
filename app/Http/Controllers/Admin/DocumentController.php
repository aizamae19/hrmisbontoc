<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function documenttracker()
    {
        return view('admin.documenttracker.index');
    }
}
