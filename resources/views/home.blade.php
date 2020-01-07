@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">房間可預約時間表</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table width="1000" border="1">
                        <?php  $i=0;  ?>
                        @foreach($allroom as $room)
                            <?php  $i=$i+1; if($i==4){$i=0;} ?>
                            @if($i%2==1)
                            
                                @if($i/2==0.5)
                                    <tr bgcolor="#6495ed">
                                @elseif($i/2==1.5)
                                
                                    <tr bgcolor="yellow">
                                @endif
                            @endif
                                <td><h2 class="post-title">
                                        房間:{{$room->id}}
                                    </h2>
                                    <br>
                                    <h3 class="post-subtitle">
                                        房型: {{$room->type}} 人房
                                        <br><br>
                                    是否乾溼分離:
                                    @if($room->dry_wet=='Y' || $room->dry_wet=='y')
                                    是 
                                    @else
                                    否 
                                    @endif
                                    木質地板:
                                    @if($room->wood=='Y' || $room->wood=='y')
                                    是 
                                    @else
                                    否 
                                    @endif
                                    陽台:
                                    @if($room->balcony=='Y' || $room->balcony=='y')
                                    有 
                                    @else
                                    沒有 
                                    @endif        
                                    <br><br>
                                    價錢:{{$room->price}}
                                    <br><br>
                                        可預約時間:
                                        @foreach($room->resrooms as $resroom)
                                            <?php   $out=date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;  $out=$resroom->out_room;   ?>
                                        @endforeach
                                        {{$out}}
                                            <?php   $out=date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;   ?>


                                        <form action="/posts" method="POST">
                                            {{ csrf_field() }}
                                            <input type = "hidden" id = "delete_id" name = "id" value = "{{$room->id}}">

                                            <button type="submit" class="btn btn-danger">預約</button>
                                        </form>
                                    </td>
                                @if($i%2==0)
                                        </tr>
                                @endif                                
                        @endforeach
                                
                        </table>
                </div>
            </div>
        </div>
    </div>
    <br></br>
        <a href="contact" ><font  face="Arial" color="#cc33ff" size="7" al>你預約的房間</font></a>

</div>

@endsection
