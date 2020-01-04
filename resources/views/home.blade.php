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
                            <tr bgcolor="#6495ed">
                                <td><h2 class="post-title">
                                        房間1
                                    </h2>
                                    <h3 class="post-subtitle">
                                        2人房
                                        <br><br>
                                        可預約時間:<?php echo $testa; ?></td>



                                <td><div class="post-preview">
                                        <h2 class="post-title">
                                            房間2

                                        </h2>
                                        <h3 class="post-subtitle">
                                            4人房
                                            <br><br>
                                            可預約時間:<?php echo $testb; ?>
                                        </h3>
                                    </div></td>
                            </tr>
                            <tr bgcolor="yellow">
                                <td><h2 class="post-title">
                                        房間3

                                    </h2>
                                    <h3 class="post-subtitle">
                                        6人房
                                        <br><br>
                                        可預約時間:<?php echo $testc; ?>

                                    </h3>
                                <td><div class="post-preview">
                                        <h2 class="post-title">
                                            房間4


                                        </h2>
                                        <h3 class="post-subtitle">
                                            8人房
                                            <br><br>
                                            可預約時間:<?php echo $testd; ?>
                                        </h3>
                                    </div></td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
