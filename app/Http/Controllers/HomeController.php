<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use App\Customer;
use auth;
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
        $checkuser = Customer::SELECT('user_id')->where('user_id', Auth::user()->id)->first();
        // dd($checkuser);
        if($checkuser==""){
        $customer= new Customer;
        $customer->user_id=Auth::user()->id;
        $customer->name=Auth::user()->name;
        $customer->phone=Auth::user()->phone;
        $customer->idcard=Auth::user()->idcard;
        $customer->save();
        }
        if(Auth::user()->type==2){
            return view('admin.dashboard.index');
        }

        return redirect('/go_home');
    }
    public function go_home()
    {
        
        

        $allroom=Room::all();

        $data = ['allroom'=>$allroom];
        return view('home',$data);
    }
}
