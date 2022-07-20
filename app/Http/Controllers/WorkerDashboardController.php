<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Jobs;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class WorkerDashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.workerDash');
    }
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
        $loginID=session('loginId');
        $users = DB::table('users')
        ->join('profiles','users.id','=','profiles.user_id')
        ->select('users.*','profiles.*')
        ->where('user_id','=',$loginID)
        ->get();

        return view('dashboards.editProfile',compact('users'));
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

                 'image' => $path

             ]);
         }

        //  $profile->firstname = $request->firstname;
        //  $profile->lastname = $request->lastname;
        //  $profile->email = $request->email;
        //  $profile->phone = $request->phone;
        //  $profile->about = $request->about;

         Profile::where('user_id',$request->userid)->update([
             'phone' => $request->phone,
             'about' => $request->about,

         ]);

        User::where('id',$request->userid)->update([
             'firstname' => $request->firstname,
             'lastname' => $request->lastname,
             'email' => $request->email,


        ]);

         return redirect()->route('wprofile')->with('status','Information updated successfully.');

    }

    public function changePass()
    {
        $loginID=session('loginId');
        $users=User::where('id','=',$loginID)->get();
        $addInfo=Profile::where('user_id','=',$loginID)->get();
        return view('dashboards.changePassword',compact('users','addInfo'));
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


    public function viewService(){
        $loginID=session('loginId');
        // $services = User::join('services', 'users.id', '=', 'services.user_id')
        //     ->select('services.*','users.*' )
        //     ->where('user_id', '=',$loginID)
        //     ->get();
        $services=Service::where('user_id',$loginID)->get();
        return view('dashboards.services', compact('services'));
    }

    public function viewAddForm(){
        return view('dashboards.addService');
    }

    public function addService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'servicename' => 'required|string|max:25|min:3',
            'user_id' => 'required',
            'payment' => 'required',
        ]);


        // if ($validator->fails())
        // {
        //     return response()->json(['error' => $validator->messages()], 400);
        // }
        // else
        // {
            $loginID=session('loginId');
            $service = new Service();
            $service->name = $request->servicename;
            $service->user_id = $loginID;
            $service->payment = $request->payment;
            // $service->created_at = now();
            // $service->updated_at = now();
            // $res = $service->save();
            $service->save();
            // if($res)
            // {
                // return response()->json(['success' => 'Service added successfully.'], 200);
                return redirect()->route('viewServices')->with('success', 'You have added a new service successfully.');
            // }
            // else
            // {
            //     return back()->with('fail', 'Oops!! There seems to be a problem');
            // }
        // }

    }

    public function editService($id)
    {
        $services=Service::find($id);

        return view('dashboards.editService',compact('services'));
    }

    public function updateService(Request $request)
    {
        $id=$request->id;
        $validator = Validator::make($request->all(), [
            'servicename' => 'required|string|max:25|min:3',
            'user_id' => 'required',
            'payment' => 'required',
        ]);

        $service = Service::find($id);
        $loginID= session('loginId');
        $service->name = $request->servicename;
        $service->user_id = $loginID;
        $service->payment = $request->payment;
        $service->created_at = now();
        $service->updated_at = now();
        $service->save();

        return redirect()->route('viewServices')->with('success', 'You have updated the service successfully.');
    }

    public function destroyService($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('viewServices')->with('success', 'You have deleted the service successfully.');
    }

    public function viewPayments()
    {
        $loginID=session('loginId');
        

        $users = DB::table('users')
        ->join('jobs','users.id','=','jobs.user_id')
        ->join('payments','users.id','=','payments.user_id')
        ->select('users.*','jobs.*','payments.*')
        ->where('user_id','=',$loginID)
        ->get();

        return view('dashboards.wpayments',compact('users'));
    }
}
