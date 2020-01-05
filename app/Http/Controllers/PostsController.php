<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        $a=$request->input("id");

        return view('index',['a'=>$a]);
    }
    public function show(Request $request)
    {
        //
        return view('post');
    }
    public function about(Request $request)
    {
        //
        return view('about');
    }
    public function contact(Request $request)
    {
        //
        return view('contact');
    }
}
