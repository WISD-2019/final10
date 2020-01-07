@extends('admin.layouts.master')

@section('title', '房間管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            房間管理 <small>所有房間列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 房間管理
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
        <h5 class="modal-title" id="exampleModalLabel">新增房間資料</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.room.create') }}" method="POST"> 
      {{ csrf_field() }}
      <div class="modal-body">
      <label>房間編號</label>
      <input type="text" class="form-control" name="id" id="id" value=<?php echo $lastid+1 ;?> readonly="readonly" >
      <label >浴室乾溼分明</label>
      <select id="dry_wet" name="dry_wet" class="form-control ">
        <option value="Y" selected>是</option>
        <option value="N">否</option>
      </select>
      <label >木質地板</label>
      <select id="wood" name="wood" class="form-control ">
        <option value="Y" selected>是</option>
        <option value="N">否</option>
      </select>
      <label >陽台</label>
      <select id="balcony" name="balcony" class="form-control ">
        <option value="Y" selected>是</option>
        <option value="N">否</option>
      </select>
      <label >房型(幾人房)</label>
      <select id="type" name="type" class="form-control ">
        <option value="1" selected>一人房</option>
        <option value="2">二人房</option>
        <option value="3">三人房</option>
        <option value="4">四人房</option>
        <option value="5">五人房</option>
        <option value="6">六人房</option>
      </select>
      <label >價錢</label>
      <input type="text" class="form-control" name="price" id="price" placeholder="1234" pattern="[0-9]*" title="請輸入數字" required>
      
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
                        <th width="120" style="text-align: center">浴室乾溼分明</th>
                        <th width="120" style="text-align: center">木質地板</th>
                        <th width="120" style="text-align: center">陽台</th>
                        <th width="120" style="text-align: center">房型</th>
                        <th width="150" style="text-align: center">價錢</th>
                        <th width="80" style="text-align: center">備註</th>
                    </tr>
                </thead>
                <tbody id="Mytable">
                @foreach($chgpage as $room)
                    <tr>
                        <td>{{$room->id}}</td>
                        @if($room->dry_wet=='Y' || $room->dry_wet=='y')
                          <td>是 </td>
                        @else
                          <td>否 </td>
                        @endif
                        @if($room->wood=='Y' || $room->wood=='y')
                          <td>是 </td>
                        @else
                          <td>否 </td>
                        @endif
                        @if($room->balcony=='Y' || $room->balcony=='y')
                          <td>有 </td>
                        @else
                          <td>沒有 </td>
                        @endif                        
                        <td>{{($room->type)}}人房</td>
                        <td>{{($room->price)}}</td>
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
            {{$chgpage->links()}}
        </div>
        
    </div>
    
</div>



<!--'修改'彈出視窗的內容 Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">修改房間資料(重新修改)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.room.update') }}" method="POST"> 
      {{ csrf_field() }}
      <div class="modal-body">
      <label>房間編號</label>
      <input type="text" class="form-control" name="update_id" id="update_id"  readonly="readonly" >
      <label >浴室乾溼分明</label>
      <select id="update_dry_wet" name="update_dry_wet" class="form-control ">
        <option value="Y" selected>是</option>
        <option value="N">否</option>
      </select>
      <label >木質地板</label>
      <select id="update_wood" name="update_wood" class="form-control ">
        <option value="Y" selected>是</option>
        <option value="N">否</option>
      </select>
      <label >陽台</label>
      <select id="update_balcony" name="update_balcony" class="form-control ">
        <option value="Y" selected>是</option>
        <option value="N">否</option>
      </select>
      <label >房型(幾人房)</label>
      <select id="update_type" name="update_type" class="form-control ">
        <option value="1" selected>一人房</option>
        <option value="2">二人房</option>
        <option value="3">三人房</option>
        <option value="4">四人房</option>
        <option value="5">五人房</option>
        <option value="6">六人房</option>
      </select>
      <label >價錢</label>
      <input type="text" class="form-control" name="update_price" id="update_price" placeholder="1234" pattern="[0-9]*" title="請輸入數字" required>

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
     var col5=currentRow.find("td:eq(5)").html();
     
   
     $('#update_id').val(col0.trim());
     $('#update_price').val(col5.trim());
   


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
      <form action="{{ route('admin.room.destroy') }}" method="POST"> 
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
