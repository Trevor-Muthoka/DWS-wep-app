<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Role;
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
            ->groupBy(DB::raw("MONTH(created_at)"))
            ->pluck('total');
        $clientData= User::select(DB::raw("COUNT(*) as total"))
            ->where('role_id', '=', '2')
            ->whereYear('created_at', '=', date('Y'))
            ->groupBy(DB::raw("MONTH(created_at)"))
            ->pluck('total');
        $adminsData= User::select(DB::raw("COUNT(*) as total"))
            ->where('role_id', '=', '3')
            ->whereYear('created_at', '=', date('Y'))
            ->groupBy(DB::raw("MONTH(created_at)"))
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
        $users = User::all();
        return view('admin.users', compact('users'));
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
        return view('admin.addJob');
    }

    public function addJobs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:25|min:3',
            'description' => 'required|string|max:25|min:3',
            'user_id' => 'required',
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
    public function editJob(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:25|min:3',
            'description' => 'required|string|max:25|min:3',
            'user_id' => 'required',
            'status' => 'required',
            'payment' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['error' => $validator->messages()], 400);
        }
        else
        {
            $job = Job::find($request->id);
            $job->name = $request->name;
            $job->description = $request->description;
            $job->user_id = $request->user_id;
            $job->status = $request->status;
            $job->payment = $request->payment;
            $job->updated_at = now();
            $res = $job->save();
            return response()->json(['success' => 'Job updated successfully.'], 200);
            if($res)
            {
                return redirect()->route('admin.addJob')->with('success', 'You have updated a job successfully.');
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
            return redirect()->route('admin.addRole')->with('success', 'You have deleted a role successfully.');
        }
        else
        {
            return back()->with('fail', 'Oops!! There seems to be a problem');
        }
    }

}

