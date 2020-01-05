<!DOCTYPE html>
<html lang="en">
@extends('layouts.master')
@section('title', 'Clean Blog - About')


<body>
@section('content')


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>成功預約</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                您的姓名:{{$a}}<p>
                預定入住時間:{{$b}}<p>
                預定退房時間:{{$c}}<p>
            </div>
        </div>
    </div>

    <hr>



@endsection
</body>

</html>
