<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Resroom;
use App\Room;
use App\Reservation;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Auth;

class ResroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user_res=Auth::User()->customer->reservation;

//        foreach(Auth::User()->Customer->reservation as $reservation){
//            $reservation->id;
//        }



        return  view('contact',['user_res'=>$user_res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\Resroom  $resroom
     * @return \Illuminate\Http\Response
     */
    public function show(Resroom $resroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resroom  $resroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Resroom $resroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resroom  $resroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resroom $resroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resroom  $resroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resroom $resroom)
    {
        //
    }
}
