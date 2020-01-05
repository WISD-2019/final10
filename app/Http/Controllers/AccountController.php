<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //抓全部資料
        $user=User::all();
        //把最後一筆資料的id抓出來
        $lastid=0;
        $lastuser = User::SELECT('id')->orderBy('id', 'desc')->first();
        if($lastuser==""){
            $lastid=0;
        }else{
            $lastid=$lastuser->id;
        }
        $a =1; $b=2;$c=3;$d=4;
        $data=['user'=>$user , 'lastid'=>$lastid ,'a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,];
        return view('admin.posts.account',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        $user = new User;
        $user->id = $request->input("id");
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("password"));
        $user->status = $request->input("status");
        $user->save();
        return redirect('/admin/account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $user = User::where('id', $request->input("update_id"))->first();
        
        $user->name = $request->input("update_name");
        $user->email = $request->input("update_email");
        $user->password = Hash::make($request->input("update_password"));
        $user->status = $request->input("update_status");
        $user->save();
        return redirect('/admin/account');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $deleteRow = User::where('id', $request->input("delete_id"))->delete();
        return redirect('/admin/account');
    }
}
