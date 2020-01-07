<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use App\Customer;
use App\Reservation;
use Illuminate\Http\Request;

class AdminRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         
         //換頁
         $chgpage=Room::paginate(5);
         //把最後一筆資料的id抓出來
         $lastid=0;
         $lastroom = Room::SELECT('id')->orderBy('id', 'desc')->first();
         if($lastroom==""){
             $lastid=0;
         }else{
             $lastid=$lastroom->id;
         }
         
         $data=[ 'lastid'=>$lastid , 'chgpage'=>$chgpage ];
         return view('admin.posts.room',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //新增至room
        $room = new Room;
        $room->id = $request->input("id");
        $room->dry_wet = $request->input("dry_wet");
        $room->wood = $request->input("wood");
        $room->balcony = $request->input("balcony");
        $room->type = $request->input("type");
        $room->price = $request->input("price");
        $room->save();

        return redirect('/admin/room');
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
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
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
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $room = Room::where('id', $request->input("update_id"))->first();
        
        $room->dry_wet = $request->input("update_dry_wet");
        $room->wood = $request->input("update_wood");
        $room->balcony = $request->input("update_balcony");
        $room->type = $request->input("update_type");
        $room->price = $request->input("update_price");
        $room->save();

        return redirect('/admin/room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        
        $delroom = Room::where('id', $request->input("delete_id"))->first();
        foreach($delroom->resrooms as $resroom) {
            $findrowid=$resroom->reservation_id;
            $deleteRes = Reservation::where('id', $findrowid)->delete();  
            $resroom->delete();
        }
        $deleteRow = Room::where('id', $request->input("delete_id"))->delete();        
        return redirect('/admin/room');
    }
}
