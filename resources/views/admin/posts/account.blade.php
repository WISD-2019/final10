@extends('admin.layouts.master')

@section('title', '帳號管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            帳號管理 <small>所有帳號列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 帳號管理
            </li>
        </ol>
    </div>
</div>

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <button type="button" class="btnSelect btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
          新增
        </button>
    </div>
</div>

<!--'新增'彈出視窗的內容 Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">新增帳號資料</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.posts.create') }}" method="POST"> 
      {{ csrf_field() }}
      <div class="modal-body">
      <label>帳號編號</label>
      <input type="text" class="form-control" name="id" id="id" value=<?php echo $lastid+1 ;?> readonly="readonly" >
      <label >姓名</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="一二三">
      <label >電子信箱</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="123456@gmail.com">      
      <label >密碼</label>
      <input type="text" class="form-control" name="password" id="password" placeholder="00000000">
      <label >身分別</label>
      <input type="text" class="form-control" name="status" id="status" placeholder="1">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-primary">新增</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>











<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="30" style="text-align: center">id</th>
                        <th width="100" style="text-align: center">姓名</th>
                        <th width="300" style="text-align: center">電子信箱</th>
                        <th width="100" style="text-align: center">密碼</th>
                        <th width="100" style="text-align: center">身分別</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{($user->email)}}</td>
                        <td>{{($user->password)}}</td>
                        <td>{{($user->status)}}</td>
                        <td>
{{--     post要修改                       --}}
                            <a href="{{route('admin.posts.edit',$user->id)}}">編輯</a>
                            /
                            <form action="{{ route('admin.posts.destroy', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-success">刪除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
