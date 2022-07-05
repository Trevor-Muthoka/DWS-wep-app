<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard');
    }
    public function displayProfile()
    {
        return view('admin.profile');
    }

}
