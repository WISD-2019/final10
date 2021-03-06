@extends('admin.layouts.master')

@section('title', '主控台')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            主控台 <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> 主控台，請先建立4個房間以上
            </li>
        </ol>
    </div>
</div>

    <div class="col-lg-12">
        <a href="{{ route('admin.posts.account') }}" class="btn btn-success">帳號管理</a>
    </div>

    <p>&nbsp;</p>

    <div class="col-lg-12">
        <a href="{{ route('admin.posts.customer') }}" class="btn btn-success">客戶管理</a>
    </div>

    <p>&nbsp;</p>
    
    <div class="col-lg-12">
        <a href="{{ route('admin.posts.reservation') }}" class="btn btn-success">訂單管理</a>
    </div>

    <p>&nbsp;</p>
    
    <div class="col-lg-12">
        <a href="{{ route('admin.posts.room') }}" class="btn btn-success">房間管理</a>
    </div>

    <p>&nbsp;</p>
    
    <div class="col-lg-12">
        <a href="/" class="btn btn-success">回 前 端</a>
    </div>

    
<!-- /.row -->

<div class="row">
    
    <p>&nbsp;</p>
</div>
<!-- /.row -->

@endsection
