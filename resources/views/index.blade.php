<!DOCTYPE html>
<html lang="en">
@extends('layouts.master')
@section('title', 'Clean Blog')


<body>
@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>線上訂房</h1>
                    <hr class="small">
                    <span class="subheading">XXX民宿</span>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2 class="post-title">
                    <font face="Arial"  size="12">房間:{{$a}}</font>
                </h2>
                <form action="/about" method="Post">
                    {{ csrf_field() }}
                    <input type = "hidden" id = "delete_id" name = "delete_id" value = "{{$a}}">
                    入住時間：  <input type="datetime-local" name="bdaytime">
                <p>

                    退訂時間：<input type="datetime-local" name="bdaytime1">
                <p>
                    <button type="submit" class="btn btn-danger">確定預約</button>
                </form>

                </div>


            </div>
        </div>
    </div>


@endsection
</body>

</html>
