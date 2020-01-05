<!DOCTYPE html>
<html lang="en">
@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')


<body>
@section('content')


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>你預約的房間</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="120" style="text-align: center">房間</th>
                            <th width="150" style="text-align: center">浴室乾溼分明</th>
                            <th width="120" style="text-align: center">木質地板</th>
                            <th width="120" style="text-align: center">陽台</th>
                            <th width="120" style="text-align: center">房型</th>
                            <th width="150" style="text-align: center">價錢</th>
                            <th width="150" style="text-align: center">預約時間</th>
                            <th width="100" style="text-align: center">備註</th>
                            <th width="150" style="text-align: center">退訂時間</th>
                        </tr>
                        </thead>
{{--                            @foreach($a as $a)--}}
                            <tr>
                                <td>{{$a}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
{{--                            @endforeach--}}
                    </table>
                    </p>
                </div>
            </div>
        </div>
    </article>

    <hr>




@endsection
</body>

</html>
