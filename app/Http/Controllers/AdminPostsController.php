<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;

use App\Customer;

class AdminPostsController extends Controller
{
    public function index()
    {
        $Customer=Customer::orderBy('created_at','DESC')->get();
        $data=['customer'=>$Customer];
        return view('admin.posts.index',$data);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit($id)
    {
        $Customer=Customer::find($id);
        $data=['customer'=>$Customer];

        return view('admin.posts.edit', $data);
    }

    public function store(request $request)
    {
        Customer::create($request->all());
        return redirect()->route('admin.posts.index');
    }

    public function update(request $request,$id)
    {
    $post=Customer::find($id);
    $post->update($request->all());
    return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
    Customer::destroy($id);
    return redirect()->route('admin.posts.index');
    }


}
