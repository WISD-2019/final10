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

<!-- 新增彈出按鈕 -->
<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
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
      <form action="{{ route('admin.account.create') }}" method="POST"> 
      {{ csrf_field() }}
      <div class="modal-body">
      <label>帳號編號</label>
      <input type="text" class="form-control" name="id" id="id" value=<?php echo $lastid+1 ;?> readonly="readonly" >
      <label >姓名</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="一二三">
      <label >電話</label>
      <input type="text" class="form-control" name="phone" id="phone" placeholder="0912345678">
      <label >電子信箱</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="123456@gmail.com"> 
      <label >身分證</label>
      <input type="text" class="form-control" name="idcard" id="idcard" placeholder="P123456789">     
      <label >密碼</label>
      <input type="text" class="form-control" name="password" id="password" placeholder="00000000" pattern="[a-zA-Z0-9]{8,}" title="請輸入英文或數字共8個字以上" required>
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











<!-- /.資料表 -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="30" style="text-align: center">id</th>
                        <th width="80" style="text-align: center">姓名</th>
                        <th width="200" style="text-align: center">電子信箱</th>
                        <th width="100" style="text-align: center">密碼</th>
                        <th width="100" style="text-align: center">身分別</th>
                        <th width="200" style="text-align: center">備註</th>
                    </tr>
                </thead>
                <tbody id="Mytable">
                @foreach($user as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{($user->email)}}</td>
                        <td>{{($user->password)}}</td>
                        <td>{{($user->type)}}</td>
                        <td>
                          <button type="button" class="btnSelect btn btn-primary" data-toggle="modal" data-target="#exampleModal2" >
                            修改
                          </button>
                          /
                          <button type="button" class="deleteSelect btn btn-danger" data-toggle="modal" data-target="#exampleModal3">
                            刪除
                          </button>                            
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!--'修改'彈出視窗的內容 Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">修改帳號資料</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.account.update') }}" method="POST"> 
      {{ csrf_field() }}
      <div class="modal-body">
      <label>帳號編號</label>
      <input type="text" class="form-control" name="update_id" id="update_id" value=<?php echo $lastid+1 ;?> readonly="readonly" >
      <label >姓名</label>
      <input type="text" class="form-control" name="update_name" id="update_name" placeholder="一二三">
      <label >電子信箱</label>
      <input type="text" class="form-control" name="update_email" id="update_email" placeholder="123456@gmail.com">      
      <label >密碼</label>
      <input type="text" class="form-control" name="update_password" id="update_password" placeholder="00000000" pattern="[a-zA-Z0-9]{8,}" title="請輸入英文或數字共8個字以上" required>
      <label >身分別</label>
      <input type="text" class="form-control" name="update_status" id="update_status" placeholder="1">

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-primary">修改</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- 給'修改'彈出視窗資料的java script -->
<script>
 $(document).ready(function(){

// code to read selected table row cell data (values).
$("#Mytable").on('click','.btnSelect',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 

     var col0=currentRow.find("td:eq(0)").html();
     var col1=currentRow.find("td:eq(1)").html(); // get current row 2nd table cell TD value
     var col2=currentRow.find("td:eq(2)").html(); // get current row 3rd table cell  TD value
     var col3=currentRow.find("td:eq(4)").html();
     
   
     $('#update_id').val(col0.trim());
     $('#update_name').val(col1.trim());
     $('#update_email').val(col2.trim());
     $('#update_status').val(col3.trim());
   


});
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">確認刪除</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        確認是否要刪除資料
      </div>
      <form action="{{ route('admin.account.destroy') }}" method="POST"> 
      {{ csrf_field() }}
       <input type = "hidden" id = "delete_id" name = "delete_id" value = "0">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-danger">確認刪除</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- 給'刪除'彈出視窗資料的java script -->
<script>
 $(document).ready(function(){

// code to read selected table row cell data (values).
$("#Mytable").on('click','.deleteSelect',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 

     var col0=currentRow.find("td:eq(0)").html();

     $('#delete_id').val(col0.trim());
});
});
</script>

@endsection
