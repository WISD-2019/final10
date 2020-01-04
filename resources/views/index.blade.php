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
                <div class="post-preview">

                        <h2 class="post-title">
                            房間1
                        </h2>
                        <h3 class="post-subtitle">
                            雙人房
                        </h3>
                    </a>
                </div>
                <hr>
                <div class="post-preview">
                        <h2 class="post-title">
                            房間2
                        </h2>
                        <h3 class="post-subtitle">
                            4人房
                        </h3>
                </div>
                <hr>
                <div class="post-preview">
                        <h2 class="post-title">
                            房間3
                        </h2>
                        <h3 class="post-subtitle">
                            6人房
                        </h3>
                </div>
                <hr>
                <div class="post-preview">
                        <h2 class="post-title">
                            房間4
                        </h2>
                        <h3 class="post-subtitle">
                            8人房
                        </h3>

                </div>
                <hr>

            </div>
        </div>
    </div>


@endsection
</body>

</html>
