{{--首页--}}
@extends('layouts.app')
@section('content')
    <style>
    .container {
    padding-right: 15px;
    padding-left: 150px;
   /* margin-right: auto;*/
    /*margin-left: auto;*/
    }
    </style>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span4">
            </div>
            <div class="span4 container">
                <h2>
                    标题
                </h2>
                <p>
                    本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
                </p>
                <p>
                    <a class="btn" href="{{url('front/organization')}}">查看更多 »</a>
                </p>
            </div>
            <div class="span4 container">
                <h2>
                    标题
                </h2>
                <p>
                    本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
                </p>
                <p>
                    <a class="btn" href="{{url('front/activity')}}">查看更多 »</a>
                </p>
            </div>
            <div class="span4">
            </div>
        </div>
    </div>
@endsection
