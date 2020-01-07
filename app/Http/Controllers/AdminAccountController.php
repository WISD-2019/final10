<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //換頁
        $chgpage=User::paginate(5);
        //把最後一筆資料的id抓出來
        $lastid=0;
        $lastuser = User::SELECT('id')->orderBy('id', 'desc')->first();
        if($lastuser==""){
            $lastid=0;
        }else{
            $lastid=$lastuser->id;
        }
        
        $data=['chgpage'=>$chgpage , 'lastid'=>$lastid ];
        return view('admin.posts.account',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //查customer最後一個id
        $lastid=0;
        $userlast = Customer::SELECT('id')->orderBy('id', 'desc')->first();
        if($userlast==""){
            $lastid=0;
        }else{
            $lastid=$userlast->id;
        }

        $user = new User;
        $user->id = $request->input("id");
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("password"));
        $user->type = $request->input("status");
        $user->phone = $request->input("phone");
        $user->idcard = $request->input("idcard");
        $user->save();


        $cus = new Customer;
        $cus->id = ($lastid+1);
        $cus->user_id = $request->input("id");
        $cus->name = $request->input("name");
        $cus->phone = $request->input("phone");
        $cus->idcard = $request->input("idcard");
        $cus->save();

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
        $user->type = $request->input("update_status");
        $user->save();

        $cus = Customer::where('user_id', $request->input("update_id"))->first();
        $cus->name = $request->input("update_name");
        $cus->save();

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
        $deleteCus = Customer::where('user_id', $request->input("delete_id"))->delete();
        return redirect('/admin/account');
    }
}
