<!DOCTYPE html>
<html lang="en">
@extends('layouts.master')
@section('title', '你預約的房間')



@section('content')

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
                            <th width="130" style="text-align: center">預約編號</th>
                            <th width="120" style="text-align: center">房間</th>
                            <th width="200" style="text-align: center">浴室乾溼分明</th>
                            <th width="150" style="text-align: center">木質地板</th>
                            <th width="120" style="text-align: center">陽台</th>
                            <th width="120" style="text-align: center">房型</th>
                            <th width="150" style="text-align: center">總金額</th>
                            <th width="150" style="text-align: center">預約時間</th>
                            <th width="100" style="text-align: center">備註</th>
                            <th width="200" style="text-align: center">退訂時間點</th>
                        </tr>
                        </thead>

                        @foreach($user_res as $reservation)
                            <tr>
                                <td>{{ $reservation ->id}}</td>
                                <td>{{ $reservation ->resroom->room->id}}</td>
                                @if($reservation->resroom->room->dry_wet=='Y' || $reservation->resroom->room->dry_wet=='y')
                                    <td>是 </td>
                                @else
                                    <td>否 </td>
                                @endif
                                @if($reservation ->resroom->room->wood=='Y' || $reservation ->resroom->room->wood=='y')
                                    <td>是 </td>
                                @else
                                    <td>否 </td>
                                @endif
                                @if($reservation ->resroom->room->balcony=='Y' || $reservation ->resroom->room->balcony=='y')
                                    <td>是 </td>
                                @else
                                    <td>否 </td>
                                @endif
                                <td>{{ $reservation ->resroom->room->type}}人房</td>
                                <td>{{ $reservation ->cost}}</td>
                                <td>{{ $reservation ->resroom->in_room}}</td>
                                @if($reservation ->out_time=='' )
                                <td>                                
                                    <form action="/welcome" method="POST">
                                        {{ csrf_field() }}
                                        <input type = "hidden" id = "delete_id" name = "delete_id" value = "{{ $reservation ->id}}">

                                        <button type="submit" class="btn btn-danger">取消預約</button>
                                    </form>
                                </td>                                
                                @else
                                <td>
                                </td>
                                @endif
                                <td>{{ $reservation ->out_time}}</td>
                            </tr>
                        @endforeach
                    </table>
                    </p>
                </div>
            </div>
        </div>
    </article>

    <hr>
@endsection

