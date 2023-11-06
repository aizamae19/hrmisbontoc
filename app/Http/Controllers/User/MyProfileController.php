<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MyProfile;

class MyProfileController extends Controller
{
     public function index()
    {
        return view('users.myprofile.index');
    }

}
