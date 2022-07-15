<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EmployerCRUDController extends Controller
{
    public function index()
    {
        $data['employees'] = DB::table('users')
                                ->join('roles','users.role_id','=','roles.id')
                                ->select('users.*','roles.name')
                                ->where('role_id','=',2)
                                ->get()
                                 ->paginate(10);

//        $data['employees'] = Users::where('role_id',2)->paginate(10);
        return view('employerCRUD.index',$data);
    }
}