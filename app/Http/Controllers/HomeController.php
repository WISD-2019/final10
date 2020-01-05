<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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
        $drywet=Room::find(1);
        $drywet2=Room::find(2);
        $drywet3=Room::find(3);
        $drywet4=Room::find(4);
        $data = ['testa' => $get_date1, 'testb' => $get_date2, 'testc' => $get_date3, 'testd' => $get_date4,'a' => $drywet,'b' => $drywet2,'c' => $drywet3,'d' => $drywet4];
        return view('home',$data);
    }
}
