<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminDashboardController extends Controller
{
    public function index()
    {
        $workerData= User::select(DB::raw("COUNT(*) as total"))
            ->where('role_id', '=', '1')
            ->whereYear('created_at', '=', date('Y'))
            ->groupBy(DB::raw("DAY(created_at)"))
            ->pluck('total');
        $clientData= User::select(DB::raw("COUNT(*) as total"))
            ->where('role_id', '=', '2')
            ->whereYear('created_at', '=', date('Y'))
            ->groupBy(DB::raw("DAY(created_at)"))
            ->pluck('total');
        $adminsData= User::select(DB::raw("COUNT(*) as total"))
            ->where('role_id', '=', '3')
            ->whereYear('created_at', '=', date('Y'))
            ->groupBy(DB::raw("DAY(created_at)"))
            ->pluck('total');
        $workers = User::where('role_id', '=', '1')->count();
        $clients = User::where('role_id', '=', '2')->count();
        $admins = User::where('role_id', '=', '3')->count();
        return view('admin.stats',compact('workers','clients','admins','workerData','clientData','adminsData'));
    }

    public function displayProfile()
    {
        return view('admin.profile');
    }

    public function displayAddUser()
    {


        return view('admin.addUser');
    }

    public function addUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:25|min:3',
            'lastname' => 'required|string|max:25|min:3',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required',
        ]);
        if ($validator->fails())
        {
            return response()->json(['error' => $validator->messages()], 400);
        }
        else
        {
            $user = new User();
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->role_id = $request->role;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $res = $user->save();
            return response()->json(['success' => 'User added successfully.'], 200);

            if ($res)
            {
                return redirect()->route('admin.AddUser')->with('success', 'You have added a new user successfully.');
            }
            else
            {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }
        }
    }

    public function getUsers()
    {
        $users = User::join('roles', 'users.role_id', '=', 'roles.id')
            ->select('users.id', 'users.firstname', 'users.lastname', 'users.email', 'roles.name as role')
            ->get();


//        return response()->json(['users' => $users], 200);
        return view('admin.displayusers', compact('users'));
    }

    public function displayUsers()
    {
        $users = User::where('id', '!=', session('loginId'))->get();

        return view('admin.users', compact('users'));
    }
    public function editUserForm($id)
    {
        $user = User::find($id);
        $role= Role::find($user->role_id);
        return view('admin.editUser', compact('user','role'));
    }

    public function editUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:25|min:3',
            'lastname' => 'required|string|max:25|min:3',
            'email' => 'required|string|email|max:100',
            'password' => 'required|string|min:8',
            'role' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 400);
        } else {
            $user = User::find($request->id);
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->role_id = $request->role;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $res = $user->save();
            return response()->json(['success' => 'User updated successfully.'], 200);

            if ($res) {
                return redirect()->route('admin.AddUser')->with('success', 'You have updated a user successfully.');
            } else {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }

        }
    }
    public function deleteUser(Request $request)
    {
        $user = User::find($request->id);
        $res = $user->delete();
//        return response()->json(['success' => 'User deleted successfully.'], 200);

        if ($res) {
            return redirect()->route('admin.getUsers')->with('success', 'You have deleted a user successfully.');
        } else {
            return back()->with('fail', 'Oops!! There seems to be a problem');
        }
    }
    public function addJobForm(){
        $cities = DB::table('cities')->get();
        $categories = DB::table('categories')->get();
        return view('admin.addJob',compact('cities','categories'));
    }

    public function addJobs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:25|min:3',
            'description' => 'required|string|max:25|min:3',
            'user_id' => 'required',
            'category_id' => 'required',
            'city_id' => 'required',
            'status' => 'required',
            'payment' => 'required',
        ]);


        if ($validator->fails())
        {
            return response()->json(['error' => $validator->messages()], 400);
        }
        else
        {
            $job = new Job();
            $job->name = $request->name;
            $job->description = $request->description;
            $job->user_id = $request->user_id;
            $job->status = $request->status;
            $job->payment = $request->payment;
            $job->category_id = $request->category_id;
            $job->city_id = $request->city_id;
            $job->created_at = now();
            $job->updated_at = now();
            $res = $job->save();
            return response()->json(['success' => 'Job added successfully.'], 200);
            if($res)
            {
                return redirect()->route('admin.addJob')->with('success', 'You have added a new job successfully.');
            }
            else
            {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }
        }

    }

    public function getJobs()
    {
        $jobs = User::join('jobs', 'users.id', '=', 'jobs.user_id')
            ->select('jobs.id', 'jobs.name', 'jobs.description', 'jobs.status', 'jobs.payment', 'jobs.created_at', 'jobs.updated_at', 'users.firstname as user' )
            ->get();
        return view('admin.jobs', compact('jobs'));
    }
    public function editJobForm($id){
        $job = Job::find($id);
        $job_city= DB::table('cities')->where('id',$job->city_id)->first();
        $cities = DB::table('cities')->get();
        $categories = DB::table('categories')->get();
        return view('admin.editJob',compact('job','cities','categories','job_city'));
    }
    public function UpdateJob(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:25|min:3',
            'description' => 'required|string|max:25|min:3',
            'user_id' => 'required',
            'category_id' => 'required',
            'city_id' => 'required',
            'status' => 'required',
            'payment' => 'required',
        ]);

        if ($validator->fails())
        {
            return back()->with('Status' ,'Something Failed' );
        }
        else
        {
            $job = Job::find($request->id);
            $job->name = $request->name;
            $job->description = $request->description;
            $job->user_id = $request->user_id;
            $job->city_id = $request->city_id;
            $job->category_id = $request->category_id;
            $job->status = $request->status;
            $job->payment = $request->payment;
            $job->updated_at = now();
            $res = $job->save();

            if($res)
            {
                return redirect()->route('admin.getJobs')->with('success', 'You have updated a job successfully.');
            }
            else
            {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }
        }

    }
    public function deleteJob(Request $request)
    {
        $job = Job::find($request->id);
        $res = $job->delete();
        if($res)
        {
            return redirect()->route('admin.getJobs')->with('success', 'You have deleted a job successfully.');
        }
        else
        {
            return back()->with('fail', 'Oops!! There seems to be a problem');
        }
    }
    public function addRoleForm(){
        return view('admin.addRole');
    }
    public function addRole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:25|min:3',
        ]);

        if ($validator->fails())
        {
            return response()->json(['error' => $validator->messages()], 400);
        }
        else
        {
            $role = new Role();
            $role->name = $request->name;
            $role->created_at = now();
            $role->updated_at = now();
            $res = $role->save();
            return response()->json(['success' => 'Role added successfully.'], 200);
            if($res)
            {
                return redirect()->route('admin.addRole')->with('success', 'You have added a new role successfully.');
            }
            else
            {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }
        }

    }
public function displayRoles()
    {
        $roles = Role::all();
        return view('admin.roles', compact('roles'));
    }
    public function editRole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:25|min:3',
        ]);

        if ($validator->fails())
        {
            return response()->json(['error' => $validator->messages()], 400);
        }
        else
        {
            $role = Role::find($request->id);
            $role->name = $request->name;
            $res = $role->save();
            return response()->json(['success' => 'Role updated successfully.'], 200);
            if($res)
            {
                return redirect()->route('admin.addRole')->with('success', 'You have updated a role successfully.');
            }
            else
            {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }
        }

    }
    public function deleteRole(Request $request)
    {
        $role = Role::find($request->id);
        $res = $role->delete();
        if($res)
        {
            return redirect()->route('admin.getRoles')->with('success', 'You have deleted a role successfully.');
        }
        else
        {
            return back()->with('fail', 'Oops!! There seems to be a problem');
        }
    }

    public function getServices()
    {
        $services = Service::join('users', 'users.id', '=', 'services.user_id')
            ->select('services.id', 'services.name', 'services.description',  'services.created_at', 'services.updated_at', 'users.firstname as user' )
            ->get();
        return view('admin.services', compact('services'));

    }

    public function addServiceForm(){
        return view('admin.addService');
    }

    public function addService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:25|min:3',
            'description' => 'required|string|max:25|min:3',
            'user_id' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['error' => $validator->messages()], 400);
        }
        else
        {
            $service = new Service();
            $service->name = $request->name;
            $service->description = $request->description;
            $service->user_id = $request->user_id;
            $service->created_at = now();
            $service->updated_at = now();
            $res = $service->save();
            return response()->json(['success' => 'Service added successfully.'], 200);
            if($res)
            {
                return redirect()->route('admin.addService')->with('success', 'You have added a new service successfully.');
            }
            else
            {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }
        }
    }
public function editService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:25|min:3',
            'description' => 'required|string|max:25|min:3',
            'user_id' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['error' => $validator->messages()], 400);
        }
        else
        {
            $service = Service::find($request->id);
            $service->name = $request->name;
            $service->description = $request->description;
            $service->user_id = $request->user_id;
            $service->updated_at = now();
            $res = $service->save();
            return response()->json(['success' => 'Service updated successfully.'], 200);
            if($res)
            {
                return redirect()->route('admin.addService')->with('success', 'You have updated a service successfully.');
            }
            else
            {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }
        }
    }
    public function deleteService(Request $request)
    {
        $service = Service::find($request->id);
        $res = $service->delete();
        if($res)
        {
            return redirect()->route('admin.getServices')->with('success', 'You have deleted a service successfully.');
        }
        else
        {
            return back()->with('fail', 'Oops!! There seems to be a problem');
        }
    }
    public function getApplications()
    {
        $applications = Application::join('users', 'users.id', '=', 'applications.user_id')
            ->select('applications.id', 'applications.name', 'applications.email', 'applications.phone', 'applications.address', 'applications.created_at', 'applications.updated_at', 'users.firstname as user' )
            ->get();
        return view('admin.applications', compact('applications'));

    }


}

