<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\Room;
use App\Http\Requests;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
    public function check()
    {
        if(Auth::user()->type==2){
            return view('admin.dashboard.index');
        }
        
        $allroom=Room::all();
//
//                echo $get_date1;
        $data = ['allroom'=>$allroom];
        return view('welcome',$data);
    }
}
