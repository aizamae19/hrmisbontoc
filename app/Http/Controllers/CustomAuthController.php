<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\User_role;

class CustomAuthController extends Controller
{
 

    public function redirectTo(){
         $role = User_role::where('userid',Auth::user()->id)->first();
         dd($role);
        if ($role->roleid==1){
             return '/admin';
        }  elseif ($role->roleid==2){
             return '/user';
        }
    }

    public function index()
    {
        return view('auth.login');
    }  
       
 
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $role = User_role::where('userid', $user->id)->first();

            if ($role) {
                if ($role->roleid == 1) {
                    return redirect('/admin');
                } elseif ($role->roleid == 2) {
                    return redirect('/user');
                }
            }
        }
        return redirect("login")->with('error', 'Invalid credentials');
    }
 
 
 
    public function register()
    {
        return view('auth.register');
    }
       
 
    public function customRegistration(Request $request)
{
    $request->validate([
        'name' => 'required',
        'username' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'user' => 'required',
    ]);

    $data = $request->all();
    $user = $this->create($data);
    $roleId = $data['user'] == 'user' ? 2 : 1;

    User_role::create([
        'userid' => $user->id,
        'roleid' => $roleId,
        'role_name' => 'user',
    ]);

    return redirect("login")->withSuccess('You have signed-in');
}

public function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'username' => $data['username'],
        'password' => Hash::make($data['password']),
        'user' => $data['user'],
    ]);
}    
     
 
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login');
    }
}
