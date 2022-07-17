<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profile;

class WorkerDashboardController extends Controller
{
    public function profile()
    {
        $loginID=session('loginId');
        $users=User::where('id','=',$loginID)->get();
        $addInfo=Profile::where('user_id','=',$loginID)->get();

        return view('dashboards.workerProfile',compact('users','addInfo'));
    }

    public function profileADD()
    {

        $loginID=session('loginId');
        // $users = DB::table('users')
        //            ->join('profiles','users.id','=','profiles.user_id')
        //            ->select('users.*','profiles.*')
        //            ->where('user_id','=',$loginID)
        //            ->get();

        $users=User::where('id','=',$loginID)->get();
        $addInfo=Profile::where('user_id','=',$loginID)->get();

        return view('dashboards.addInfo',compact('users','addInfo'));
    }

    public function storeProfile(Request $request)
    {
        $request->validate([
         'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|unique:profiles',
         'about'=> 'required',
         'phone'=> 'required|numeric|min:10|unique:profiles'
        ]);

        $path = $request->file('image')->store('public/images');
        $profile = new Profile;
        $profile->phone = $request->phone;
        $profile->about = $request->about;
        $profile->user_id = session('loginId');
        $profile->image = $path;
        $profile->save();

        return redirect()->route('wprofile')->with('status','Information added successfully.');
        // $profile = new Profile();
        // $profile->phone = $request->phone;
        // $profile->about = $request->about;
        // $profile->user_id = session('loginId');

        // if($image = $request->file('image')){
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $profile['image'] = "$profileImage";
        // }

        // Profile::create($profile);

        // return redirect()->route('dashboards.workerProfile')
        //                 ->with('success','Information added successfully.');

    }

    public function profileEdit()
    {


        return view('dashboards.editProfile');
    }

    public function editProfile(Request $request,$user_id)
    {
        $users = DB::table('users')
                   ->join('profiles','users.id','=','profiles.user_id')
                   ->select('users.*','profiles.*')
                   ->where('user_id','=',$user_id)
                   ->get();

        $request->validate([
            'firstname' => 'required|string|max:25',
             'lastname'=>'required|string|max:25',
             'email'=>'required|string|email|max:100|unique:users',
             'about'=> 'required',
             'phone'=> 'required|numeric|min:10|unique:profiles'
         ]);

         if($request->hasFile('image')){
             $request->validate([
                 'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|unique:profiles',
             ]);
             $path = $request->file('image')->store('public/images');
             $users->image = $path;
         }

         $users->firstname = $request->firstname;
         $users->lastname = $request->lastname;
         $users->email = $request->email;
         $users->phone = $request->phone;
         $users->about = $request->about;

         $users->update();

         return redirect()->route('wprofile')->with('status','Information updated successfully.');

    }
}
