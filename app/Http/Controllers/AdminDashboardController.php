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
        
        $outtime=Room::find(1);
        $get_date1='123';
        foreach($outtime-> resrooms as $resrooms) {
            $get_date1= $resrooms->out_room . '<br>';

        }
        $outtime=Room::find(2);
        $get_date2='123';
        foreach($outtime-> resrooms as $resrooms) {
            $get_date2 = $resrooms->out_room . '<br>';
        }
            $outtime=Room::find(3);
            $get_date3='123';
            foreach($outtime-> resrooms as $resrooms) {
                $get_date3 = $resrooms->out_room . '<br>';
            }
                $outtime=Room::find(4);
                $get_date4='123';
                foreach($outtime-> resrooms as $resrooms) {
                    $get_date4 = $resrooms->out_room . '<br>';
                }
//
//                echo $get_date1;
        $data = ['testa' => $get_date1, 'testb' => $get_date2, 'testc' => $get_date3, 'testd' => $get_date4];
        return view('welcome',$data);
    }
}
