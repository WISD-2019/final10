@extends('admin.layouts.master')

@section('title', '編輯文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯文章 <small>編輯文章內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 文章管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('admin.layouts.partials.validation')
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.posts.update', $customer->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}


            <div class="form-group">
                <label>姓名：</label>
                <input name="name" class="form-control" placeholder="請輸入文章標題" value="{{$customer->name}}">
            </div>

            <div class="form-group">
                <label>電話：</label>
                <textarea name="phone" class="form-control" rows="5">{{$customer->phone}}</textarea>
            </div>

            <div class="form-group">
                <label>身分證：</label>
                <textarea name="idcard" class="form-control" rows="5">{{$customer->idcard}}</textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">更新</button>
            </div>

        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
