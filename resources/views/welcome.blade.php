<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>線上預約訂房</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f9d6d5;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/go_home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h3 class="post-title">線上預約訂房</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="120" style="text-align: center">房間編號</th>
                                        <th width="120" style="text-align: center">浴室乾溼分明</th>
                                        <th width="120" style="text-align: center">木質地板</th>
                                        <th width="120" style="text-align: center">陽台</th>
                                        <th width="120" style="text-align: center">房型</th>
                                        <th width="150" style="text-align: center">價錢</th>
                                        <th width="250" style="text-align: center">可預約時間</th>
                                    </tr>
                                </thead>
                                <tbody id="Mytable">
                                @foreach($allroom as $room)
                                    <tr>
                                        <td><h3 class="post-subtitle">{{$room->id}} </h3></td>
                                        @if($room->dry_wet=='Y' || $room->dry_wet=='y')
                                        <td><h3 class="post-subtitle">是 </h3></td>
                                        @else
                                        <td><h3 class="post-subtitle">否 </h3></td>
                                        @endif
                                        @if($room->wood=='Y' || $room->wood=='y')
                                        <td><h3 class="post-subtitle">是 </h3></td>
                                        @else
                                        <td><h3 class="post-subtitle">否 </h3></td>
                                        @endif
                                        @if($room->balcony=='Y' || $room->balcony=='y')
                                        <td><h3 class="post-subtitle">有 </h3></td>
                                        @else
                                        <td><h3 class="post-subtitle">沒有 </h3></td>
                                        @endif                        
                                        <td><h3 class="post-subtitle">{{($room->type)}}人房</td>
                                        <td><h3 class="post-subtitle">{{($room->price)}}</h3></td>
                                        <td>
                                            <h3 class="post-subtitle">
                                        @foreach($room->resrooms as $resroom)
                                            <?php   $out=date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;  $out=$resroom->out_room;   ?>
                                        @endforeach
                                        {{$out}}
                                            <?php   $out=date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;   ?>
                                            </h3>
                                        </td>
                                    </tr>
                                
                                @endforeach
                                <hr>
                                </tbody>
                            </table>            
                        </div>        
                    </div>    
                </div>
            </div>
        </div>
    </body>
</html>
