<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientDashController extends Controller
{

    public function index()
    {
        return view('client.clientDash');
    }

    public function postJob()
    {

        return view('dashboards.post_a_job');
    }

    public function jobpostfunc(Request $request)
    {
        $validatedData = $request->validate([
            'jobname' => 'required',
            'jobdescription' => 'required',
            'payment' => 'required|numeric',
//            'status' => 'required',
            'location' => 'required',
        ]);

         $post = new Jobs;
         $post->name = $request->jobname;
         $post->description = $request->jobdescription;
         $post->payment = $request->payment;
//         $post->status = $request->status;
         $post->location = $request->location;
         $post->user_id = session('loginId');

         $post->save();

        return redirect('postedJobs')->with('status', 'Job has been posted successfully');
    }

    public function viewProfile()
    {
        $loginID=session('loginId');
        $users=User::where('id','=',$loginID)->get();
        $addInfo=Profile::where('user_id','=',$loginID)->get();
        return view('client.clientProfile',compact('users','addInfo'));
    }

    public function addInfo()
    {

        $loginID=session('loginId');

        $users=User::where('id','=',$loginID)->get();
        $addInfo=Profile::where('user_id','=',$loginID)->get();

        return view('client.clientAddInfo',compact('users','addInfo'));
    }

    public function storeAddInfo(Request $request)
    {
        $request->validate([
         'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|unique:profiles',
         'about'=> 'required',
         'phone'=> 'required|numeric|min:10|unique:profiles'
        ]);

        $path = $request->file('image')->store('public/images');
        $profile = new Profile;
        $profile->phone = $request->phone;
        $profile->about = $request->about;
        $profile->user_id = session('loginId');
        $profile->image = $path;
        $profile->location = $request->location;
        $profile->save();

        return redirect()->route('cprofile')->with('status','Information added successfully.');

    }

    public function editP()
    {
        $loginID=session('loginId');
        $users = DB::table('users')
        ->join('profiles','users.id','=','profiles.user_id')
        ->select('users.*','profiles.*')
        ->where('user_id','=',$loginID)
        ->get();

        return view('client.clientEditP',compact('users'));
    }

    public function editProfile(Request $request,Profile $profile)
    {

        $request->validate([
            'firstname' => 'required|string|max:25',
             'lastname'=>'required|string|max:25',
             'email'=>'required|string|email|max:100',
             'about'=> 'required',
             'phone'=> 'required|numeric|min:10'
         ]);

         if($request->hasFile('image')){
             $request->validate([
                 'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             ]);
             $path = $request->file('image')->store('public/images');
//             $profile->image = $path;
             Profile::where('user_id',$request->userid)->update([
//             'firstname' => $request->firstname,
//             'lastname' => $request->lastname,
//             'email' => $request->email,
                 'image' => $path

             ]);
         }

         $profile->firstname = $request->firstname;
         $profile->lastname = $request->lastname;
         $profile->email = $request->email;
         $profile->phone = $request->phone;
         $profile->about = $request->about;
         $profile->location = $request->location;

         Profile::where('user_id',$request->userid)->update([
//             'firstname' => $request->firstname,
//             'lastname' => $request->lastname,
//             'email' => $request->email,
             'phone' => $request->phone,
             'about' => $request->about,
             'location' => $request->location,
         ]);

        User::where('id',$request->userid)->update([
             'firstname' => $request->firstname,
             'lastname' => $request->lastname,
             'email' => $request->email,


        ]);

         return redirect()->route('cprofile')->with('status','Information updated successfully.');

    }

    public function changePass()
    {
        $loginID=session('loginId');
        $users=User::where('id','=',$loginID)->get();
        $addInfo=Profile::where('user_id','=',$loginID)->get();
        return view('client.clientChangePass',compact('users','addInfo'));
    }

    public function updatePass(Request $request)
    {
        $this->validate($request,[
            'oldpassword'=> 'required',
            'newpassword'=> 'required',
        ]);


        $user = User::findOrFail($request->userid);

        if(!Auth::guard()->validate([
         "email" =>$user->email,
         "password" =>$request->oldpassword,
        ])){
            return back()->with("error","Old Password doesn't match");
        };

        //  if(!(Hash::check($request->oldpassword, $pass))){
        //     return back()->with("error","Old Password doesn't match");
        //  }

    //      User::where('id',$request->userid)->update([
    //        'password' => Hash::make($request->newpassword)
    //    ]);

       $user->password = Hash::make($request->newpassword);
       $user->save();

       return back()->with("status", "Password changed successfully");
    }

    public function postedJobs()
    {
        $loginID=session('loginId');
        $jobs=Jobs::where('user_id','=',$loginID)->get();
        return view('client.postedJobs',compact('jobs'));
    }

    public function editJob($id)
    {
        $jobs=Jobs::find($id);

        return view('client.editJobs',compact('jobs'));
    }

    public function updateJob(Request $request)
    {
        $id=$request->id;
        $request->validate([
            'jobname' => 'required',
            'jobdescription' => 'required',
            'payment' => 'required|numeric',
//            'status' => 'required',
            'location' => 'required',
        ]);

        $job = Jobs::find($id);
       
        $job->name = $request->jobname;
        $job->description = $request->jobdescription;
        $job->payment = $request->payment;
        $job->status = $request->status;
        $job->location = $request->location;
        $job->user_id = session('loginId');
        $job->save();


        return redirect()->route('postedJobs')->with('success', 'You have updated the job successfully.');
    }
}
