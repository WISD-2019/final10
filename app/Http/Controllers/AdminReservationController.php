<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use App\Customer;
use App\Reservation;
use App\Resroom;

use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         //抓全部資料
         $reservation=Reservation::all();
        //  Reservation::all();
         //抓房間資料
         $room = Room::SELECT('id')->get();
         //把最後一筆資料的id抓出來
         $lastid=0;
         $lastres = Reservation::SELECT('id')->orderBy('id', 'desc')->first();
         if($lastres==""){
             $lastid=0;
         }else{
             $lastid=$lastres->id;
         }
         
         $data=['reservation'=>$reservation , 'lastid'=>$lastid , 'room'=>$room ];
         return view('admin.posts.reservation',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //時間
        $in_room=$request->input("in_room");
        $out_room=$request->input("out_room");
        //房間id
        $c=$request->input("room_id");

        $room = Room::where('id', $request->input("room_id"))->first();
        //房間價錢
        $much=$room->price;
        //總金額
        $total=$much* ceil((strtotime($out_room) - strtotime($in_room))/86400);
        //新預約資料
        $reservation= new Reservation;
        $reservation->pay=$request->input("pay");
        $reservation->cost=$total;
        $reservation->money=$total*0.4;
        $reservation->customer_id=$request->input("customer_id");
        $reservation->save();

        $reseroom= new Resroom;
        $reseroom->in_room = $in_room;
        $reseroom->out_room =$out_room;
        $reseroom->room_id=$request->input("room_id");
        $last = Reservation::SELECT('id')->orderBy('id', 'desc')->first();
        $reseroom->reservation_id=$last->id;
        $reseroom->save();

        return redirect('/admin/reservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request)
    {
        //
        $res = Reservation::where('id', $request->input("pay_id"))->first();
        
        $res->pay = 'y';
        $res->save();
        
        return redirect('/admin/reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function check_in(Request $request)
    {
        //
        $res = Reservation::where('id', $request->input("check_in_id"))->first();
        
        $res->check_in = date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
        $res->save();

        return redirect('/admin/reservation');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function check_out(Request $request)
    {
        //
        $res = Reservation::where('id', $request->input("check_out_id"))->first();
        
        $res->check_out = date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
        $res->save();

        return redirect('/admin/reservation');
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
        //時間
        $in_room=$request->input("update_in_room");
        $out_room=$request->input("update_out_room");
        //房間id
        $c=$request->input("update_room_id");
        $room = Room::where('id', $request->input("update_room_id"))->first();
        //房間價錢
        $much=$room->price;
        //總金額
        $total=$much* ceil((strtotime($out_room) - strtotime($in_room))/86400);
       
        
        //抓那行資料
        $res = Reservation::where('id', $request->input("update_id"))->first();
        
        $res->pay = $request->input("update_pay");
        $res->cost = $total;
        $res->money = $total*0.4;
        if($request->input("update_out_time")=="y"){
            $res->out_time =  date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
        }else{
            $res->out_time =Null ;
        }        
        $res->check_in = $request->input("update_check_in");
        $res->check_out = $request->input("update_check_out");
        $res->save();
        //抓resroom資料
        $resroom = Resroom::where('reservation_id', $request->input("update_id"))->first();
        $resroom->in_room = $in_room;
        $resroom->out_room = $out_room;
        $resroom->room_id=$request->input("update_room_id");
        $resroom->save();
        

        return redirect('/admin/reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //不是刪除而是取消
        
        $res = Reservation::where('id', $request->input("delete_id"))->first();
        $res->out_time = date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
        $res->save();

        return redirect('/admin/reservation');
    }
}
