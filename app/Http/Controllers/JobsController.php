<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::all();


        return view('jobs', compact('jobs','jobdate'));
    }
    public function jobdetails($id)
    {
        $job = Job::join('users', 'users.id', '=', 'jobs.user_id')
            ->where('jobs.id', $id)
            ->select('jobs.*', 'users.firstname as user_name , users.email as user_email ,  users.phone as user_phone' )
            ->first();
        $jobdate= $job->created_at;
        $jobdate= date('d-m-Y', strtotime($jobdate));
        return view('jobdetail', compact('job','jobdate'));
    }
    public function edit($id)
    {
        $job = Job::find($id);

        return view('editjob', compact('job'));
    }
}
