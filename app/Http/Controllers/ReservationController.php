<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Resroom;
use App\Room;
use App\Reservation;
use Auth;
use App\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $a=$request->input("bdaytime");
        $b=$request->input("bdaytime1");

        $c=$request->input("delete_id");

        $room = Room::where('id', $request->input("delete_id"))->first();
        $much=$room->price;

        $reservation= new Reservation;
        $reservation->pay='n';
        $reservation->cost=$much;
        $reservation->money=$much*0.4;
        $reservation->customer_id=Auth::user()->id;
        $reservation->save();

        $reseroom= new Resroom;
        $reseroom->in_room = $request->input("bdaytime");
        $reseroom->out_room =$request->input("bdaytime1");
        $reseroom->room_id=$request->input("delete_id");
        $last = Reservation::SELECT('id')->orderBy('id', 'desc')->first();
        $reseroom->reservation_id=$last->id;
        $reseroom->save();

        $lasttime = Resroom::orderBy('id', 'desc')->first();
        $total=$much* ceil((strtotime($lasttime->out_room) - strtotime($lasttime->in_room))/86400);
        $inputmuch = Reservation::Select('id','cost')->orderBy('id', 'desc')->first();

        $inputmuch->cost=$total;
        $inputmuch->save();

        $inputmoney = Reservation::Select('id','money')->orderBy('id', 'desc')->first();
        $inputmoney->money=$total*0.4;
        $inputmoney->save();


        return view('about',['a'=>$a,'b'=>$b,'c'=>$c,'total'=>$total,'room'=>$room]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
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
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
