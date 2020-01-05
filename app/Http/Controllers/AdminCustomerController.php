<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //抓全部資料
        $customer=Customer::all();
        //把最後一筆資料的id抓出來
        $lastid=0;
        $lastuser = Customer::SELECT('id')->orderBy('id', 'desc')->first();
        if($lastuser==""){
            $lastid=0;
        }else{
            $lastid=$lastuser->id;
        }
        
        $data=['customer'=>$customer , 'lastid'=>$lastid ];
        return view('admin.posts.customer',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //查user最後一個id
        $lastid=0;
        $userlast = User::SELECT('id')->orderBy('id', 'desc')->first();
        if($userlast==""){
            $lastid=0;
        }else{
            $lastid=$userlast->id;
        }
        //新增至user
        $user = new User;
        $user->id = ($lastid+1);
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("password"));
        $user->type = $request->input("status");
        $user->phone = $request->input("phone");
        $user->idcard = $request->input("idcard");
        $user->save();

        //新增至customer
        $cus = new Customer;
        $cus->id = $request->input("id");
        $cus->user_id = ($lastid+1);
        $cus->name = $request->input("name");
        $cus->phone = $request->input("phone");
        $cus->idcard = $request->input("idcard");
        $cus->save();

        return redirect('/admin/customer');
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
        $cus = Customer::where('id', $request->input("update_id"))->first();
        
        $cus->name = $request->input("update_name");
        $cus->phone = $request->input("update_phone");
        $cus->idcard = $request->input("update_idcard");
        $cus->save();

        $user = User::where('id', $request->input("update_user_id"))->first();
        $user->name = $request->input("update_name");
        $user->phone = $request->input("update_phone");
        $user->idcard = $request->input("update_idcard"); 
        $user->save();

        return redirect('/admin/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //先抓ID在刪除
        $deleteRow = Customer::where('id', $request->input("delete_id"))->first();
        $userid=$deleteRow->user_id;
        $deleteRow->delete();
        $deleteUser = User::where('id', $userid)->delete();
        return redirect('/admin/customer');
    }
}
