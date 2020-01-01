@extends('admin.layouts.master')

@section('title', '新增文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增文章 <small>請輸入文章內容</small>
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
        <form action="{{ route('admin.posts.store') }}" method="POST" role="form">
            {{ csrf_field() }}
            <input name="user_id" class="form-control" placeholder="請輸入姓名" value="2">
            <div class="form-group">
                <label>姓名：</label>
                <input name="name" class="form-control" placeholder="請輸入姓名">
            </div>

            <div class="form-group">
                <label>電話：</label>
                <textarea name="phone" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label>身分證：</label>
                <textarea name="idcard" class="form-control" rows="5"></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
