<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class ClientDashController extends Controller
{

    public function index()
    {
        return view('dashboards.clientDash');
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

        return redirect('post_a_job')->with('status', 'Job has been posted successfully');
    }
}
