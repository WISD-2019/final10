<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
                        <a href="{{ url('/home') }}">Home</a>
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
                    線上預約訂房
                </div>

                <div class="links">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <div class="post-preview">

                                    <h2 class="post-title">
                                        房間1
                                    </h2>
                                    <h3 class="post-subtitle">
                                        2人房
                                        <br><br>
                                        可預約時間:<?php echo $testa; ?>
                                    </h3>

                                </div>

                                <hr>

                                <div class="post-preview">
                                    <h2 class="post-title">
                                        房間2

                                    </h2>
                                    <h3 class="post-subtitle">
                                        4人房
                                        <br><br>
                                        可預約時間:<?php echo $testb; ?>
                                    </h3>
                                </div>

                                <hr>

                                <div class="post-preview">
                                    <h2 class="post-title">
                                        房間3

                                    </h2>
                                    <h3 class="post-subtitle">
                                        6人房
                                        <br><br>
                                        可預約時間:<?php echo $testc; ?>
                                    </h3>
                                </div>

                                <hr>

                                <div class="post-preview">
                                    <h2 class="post-title">
                                        房間4


                                    </h2>
                                    <h3 class="post-subtitle">
                                        8人房
                                        <br><br>
                                        可預約時間:<?php echo $testd; ?>
                                    </h3>

                                </div>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
