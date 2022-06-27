<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'firstname'=>'required'||'string'||'max:25',
            'lastname'=>'required'||'string'||'max:25',
            'email'=>'required'||'string'||'email'||'max:100'||'unique:users',
            'password'=>'required'||'string'||'min:8',
            'role'=>'required',
        ]);
        $user = new User();
        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->role_id = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res)
        {
            return back()->with('success', 'You have registered successfully. Please check your email for a verification link.');
        }

        else
        {
            return back()->with('fail', 'Oops!! There seems to be a problem');
        }

    }
}
