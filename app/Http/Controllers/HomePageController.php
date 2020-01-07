<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Room;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $roomall=Room::SELECT('id')->get();
//        foreach($roomall->resrooms as $resroom){
//
//            foreach($post‐>commentsas$comment){
//                echo$comment‐>content.'<br>';
//            }
//
//        }
//        dd($roomall);

        // $outtime=Room::find(1);
        // $get_date1='123';
        // foreach($outtime-> resrooms as $resrooms) {
        //     $get_date1= $resrooms->out_room . '<br>';

        // }
        // $outtime=Room::find(2);
        // $get_date2='123';
        // foreach($outtime-> resrooms as $resrooms) {
        //     $get_date2 = $resrooms->out_room . '<br>';
        // }
        // $outtime=Room::find(3);
        // $get_date3='123';
        // foreach($outtime-> resrooms as $resrooms) {
        //     $get_date3 = $resrooms->out_room . '<br>';
        // }
        // $outtime=Room::find(4);
        // $get_date4='123';
        // foreach($outtime-> resrooms as $resrooms) {
        //     $get_date4 = $resrooms->out_room . '<br>';
        // }

        $allroom=Room::all();

        
        $data = ['allroom'=>$allroom];
        return view('welcome',$data);





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
    }
}
