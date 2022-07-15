<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;
use Mail;
use App\Mail\EmailVerificationMail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function viewLogin(){
        return view ('auth.login');
    }
    public function viewRegister(){
        return view ('auth.register');
    }
    public function registerUser(Request $request){
        $request->validate([
            'firstname'=>'required|string|max:25',
            'lastname'=>'required|string|max:25',
            'email'=>'required|string|email|max:100|unique:users',
            'password'=>'required|string|min:8',
            'role'=>'required',
        ]);
        $user = new User();
        $
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->role_id = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res)
        {
            return redirect()->route('login')->with('success', 'You have registered successfully.');
        }

        else
        {
            return back()->with('fail', 'Oops!! There seems to be a problem');
        }

    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required|string|min:8',
        ]);

        $user = User::where('email','=', $request->email)->first();
        $role = DB::table('roles')->where('id','=',$user->role_id)->first();


        if($user){
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put('loginId', $user->id);
                $request->session()->put('loggedin', true);
                $request->session()->put('loginEmail', $user->email);
                $request->session()->put('loginFirstname', $user->firstname);
                $request->session()->put('loginLastname', $user->lastname);
                $request->session()->put('loginRole', $role->name);
                $request->session()->put('loginRoleId', $user->role_id);

                return redirect('index');
            }
            else
            {
                return back()->with('fail', 'The password is incorrect');
            }
        }
        else{
            return back()->with('fail', 'Credentials are incorrect');
        }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('login');
    }
}
