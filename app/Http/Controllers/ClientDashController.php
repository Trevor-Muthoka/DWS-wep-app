<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientDashController extends Controller
{

    public function index()
    {
        return view('dashboards.clientDash');
    }
}