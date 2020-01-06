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
                                        房間:{{$a->id}}
                                    </h2>
                                    <h3 class="post-subtitle">
                                        房型:{{$a->type}}人房
                                        <br><br>
                                    是否乾溼分離:{{$a->dry_wet}}
                                    木質地板:{{$a->wood}}
                                    陽台:{{$a->balcony}}
                                    價錢:{{$a->price}}
                                    <br><br>
                                        可預約時間:<?php echo $testa; ?>
                                        <form action="/posts" method="POST">
                                            {{ csrf_field() }}
                                            <input type = "hidden" id = "delete_id" name = "id" value = "{{$a->id}}">

                                                <button type="submit" class="btn btn-danger">預約</button>
                                        </form>
                                </td>
                                <td><div class="post-preview">
                                        <h2 class="post-title">
                                            房間:{{$b->id}}
                                        </h2>
                                        <h3 class="post-subtitle">
                                            房型:{{$b->type}}人房
                                            <br><br>
                                            是否乾溼分離:{{$b->dry_wet}}
                                            木質地板:{{$b->wood}}
                                            陽台:{{$b->balcony}}
                                            價錢:{{$b->price}}
                                            <br><br>
                                            可預約時間:<?php echo $testb; ?>
                                            <form action="/posts" method="POST">
                                                {{ csrf_field() }}
                                                <input type = "hidden" id = "delete_id" name = "id" value = "{{$b->id}}">

                                                    <button type="submit" class="btn btn-danger">預約</button>
                                            </form>
                                        </h3>
                                    </div></td>
                            </tr>
                            <tr bgcolor="yellow">
                                <td><h2 class="post-title">
                                        房間:{{$c->id}}

                                    </h2>
                                    <h3 class="post-subtitle">
                                        房型:{{$c->type}}人房
                                        <br><br>
                                        是否乾溼分離:{{$c->dry_wet}}
                                        木質地板:{{$c->wood}}
                                        陽台:{{$c->balcony}}
                                        價錢:{{$c->price}}
                                        <br><br>
                                        可預約時間:<?php echo $testc; ?>
                                        <form action="/posts" method="POST">
                                            {{ csrf_field() }}
                                            <input type = "hidden" id = "delete_id" name = "id" value = "{{$c->id}}">

                                            <button type="submit" class="btn btn-danger">預約</button>
                                        </form>
                                    </h3>
                                <td><div class="post-preview">
                                        <h2 class="post-title">
                                            房間:{{$d->id}}
                                        </h2>
                                        <h3 class="post-subtitle">
                                            房型:{{$d->type}}人房
                                            <br><br>
                                            是否乾溼分離:{{$d->dry_wet}}
                                            木質地板:{{$d->wood}}
                                            陽台:{{$d->balcony}}
                                            價錢:{{$d->price}}
                                            <br><br>
                                            可預約時間:<?php echo $testd; ?>
                                            <form action="/posts" method="POST">
                                                {{ csrf_field() }}
                                                <input type = "hidden" id = "delete_id" name = "id" value = "{{$d->id}}">

                                                <button type="submit" class="btn btn-danger">預約</button>
                                            </form>
                                        </h3>
                                    </div></td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <br></br>
        <a href="contact" ><font  face="Arial" color="#cc33ff" size="7" al>你預約的房間</font></a>

</div>

@endsection
