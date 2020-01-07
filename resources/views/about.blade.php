<!DOCTYPE html>
<html lang="en">
@extends('layouts.master')
@section('title', '您的預約房間')


<body>
@section('content')


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>您的預約房間</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    金額：{{$total}}<p>
                    是否付款：尚未付款<p>
                    預約房間的房間號： {{$c}} 號<p>
                    房型： {{$room->type}} 人房
                    &nbsp;&nbsp;&nbsp;
                    木質地板：
                    @if($room->wood=='Y' || $room->wood=='y')
                        是 
                    @else
                        否 
                    @endif
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    陽台：
                    @if($room->balcony=='Y' || $room->balcony=='y')
                        有 
                    @else
                        沒有 
                    @endif                        
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    是否乾溼分離：
                    @if($room->dry_wet=='Y' || $room->dry_wet=='y')
                        是 
                    @else
                        否 
                    @endif                    
                    <p>
                    預定入住時間：{{$a}}<p>
                    預定退房時間：{{$b}}<p>
                    <form action="/go_home" method="GET">
                        {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">確定並回到首頁</button>
                    </form>
            </div>
        </div>
    </div>

    <hr>



@endsection
</body>

</html>
