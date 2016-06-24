{{--社团空间--}}
@extends('layouts.app')
@include('layouts.navigation')
@include('layouts.carouselFigure')

@section('content')
    @yield('carouselFigure-css')

    @yield('navigation-style')
    @yield('carouselFigure-js')

    <div class="container" style="background-size:100% ;padding-left: 0px;padding-right:0px">
        <div class="row" style="background-size:100%">
            <div id="banner_tabs" class="flexslider" >
                <ul class="slides" style="padding-left:0px;margin-top: 0px">
                    <li style="margin-top: -20px; " >
                        <a title="" target="_blank" href="#" >
                            <img width="1920" height="482" alt="" style="background: url(/img/carouselFigure/banner1.jpg) no-repeat center;" src=" {{URL::asset('/')}}img/carouselFigure/alpha.png">
                        </a>
                    </li>
                    <li style="margin-top: -20px; " >
                        <a title="" href="#">
                            <img width="1920" height="482" alt="" style="background: url(/img/carouselFigure/banner2.jpg) no-repeat center;" src=" {{URL::asset('/')}}img/carouselFigure/alpha.png">
                        </a>
                    </li>
                    <li style="margin-top: -20px; " >
                        <a title="" href="#">
                            <img width="1920" height="482" alt="" style="background: url(/img/carouselFigure/banner3.jpg) no-repeat center;" src=" {{URL::asset('/')}}img/carouselFigure/alpha.png">
                        </a>
                    </li>
                </ul>
                <ul class="flex-direction-nav">
                    <li><a class="flex-prev" href="javascript:;">Previous</a></li>
                    <li><a class="flex-next" href="javascript:;">Next</a></li>
                </ul>
                <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
                    <li><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>2</a></li>
                </ol>
            </div>
        </div>

            <div class="row">
                <div class="span2 col-sm-2">
                    <ul id="nav_box" class="nav nav-tabs nav-stacked" >
                        <li>
                            <a href="{{ url('seller/seller-info') }}" style="background-color: #f2efe3" class="clickB collapsed">首页</a>
                        </li>
                        <li>
                            <a href="#systemSetting" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">社团秀</a>
                            <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                <li><a href="{{ url('good/good-info') }}">慈善公益类</a></li>
                                <li><a href="{{ url('good/good-stockout') }}">体育运动类</a></li>
                                <li><a href="{{ url('good/good-classify') }}">文化艺术类</a></li>
                                <li><a href="{{ url('good/good-type') }}">学术科技类</a></li>
                                <li><a href="{{ url('good/good-brand') }}">兴趣爱好类</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#systemSetting1" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">社团资料</a>
                            <ul id="systemSetting1" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                <li><a href="{{ url('order/order-info') }}">社团相册</a></li>
                                <li><a href="{{ url('order/relation-order') }}">社团视频</a></li>
                                <li><a href="{{ url('order/relation-order') }}">规章制度</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#systemSetting2" style="background-color: #f2efe3" class="nav-header collapsed clickB">社团基金</a>
                        </li>

                        <li>
                            <a href="/front/organization/create-organization" style="background-color: #f2efe3" class="nav-header collapsed clickB" >创建社团</a>
                        </li>

                        <li>
                            <a href="#systemSetting2" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">帮助</a>
                            <ul id="systemSetting2" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                <li><a href="{{ url('seller/seller-info') }}">商户列表</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                {{--导航栏js--}}
                @yield('navigation-js')
            {{--左侧导航栏--}}
            <div hidden class="span2 col-sm-2">
                <ul class="nav ">
                    <li class="nav-header">
                        列表标题
                    </li>
                    <li class="active">
                        <a href="#">首页</a>
                    </li>
                    <li>
                        <a href="#">库</a>
                    </li>
                    <li>
                        <a href="#">应用</a>
                    </li>
                    <li class="nav-header">
                        功能列表
                    </li>
                    <li>
                        <a href="#">资料</a>
                    </li>
                    <li>
                        <a href="#">设置</a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="#">帮助</a>
                    </li>
                </ul>
            </div>

              {{--实现把字写在图片上面，用于首页的轮播图--}}
              {{--  <div style="position:relative;width:100px;height:100px;">
                    <img src="{{URL::asset('/')}}upload/img/first.jpeg"/>
                    <div style="position:absolute;width:100px;height:100px;z-indent:2;left:0;top:0;">
                        文字
                    </div>
                </div>--}}

            {{--社团列表--}}
            <div class="span6 col-sm-6">
                <h2>
                    社团名称
                </h2>
                <p>
                    社团简介
                    本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
                    程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
                </p>
                <p>
                    <a class="btn" href="#">查看更多 »</a>
                </p>
                <h2>
                    社团名称
                </h2>
                <p>
                    社团简介
                    本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
                </p>
                <p>
                    <a class="btn" href="#">查看更多 »</a>
                </p>
            </div>
            {{--社团最右边表格--}}
            <div class="span4 col-sm-4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            社团
                        </th>
                        <th>
                            社员
                        </th>
                        <th>
                            成立时间
                        </th>
                      {{--  <th>
                            状态
                        </th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            01/04/2012
                        </td>
                     {{--   <td>
                            Default
                        </td>--}}
                    </tr>
                    <tr class="success">
                        <td>
                            1
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            01/04/2012
                        </td>
                    {{--    <td>
                            Approved
                        </td>--}}
                    </tr>
                    <tr class="error">
                        <td>
                            2
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            02/04/2012
                        </td>
                     {{--   <td>
                            Declined
                        </td>--}}
                    </tr>
                    <tr class="warning">
                        <td>
                            3
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            03/04/2012
                        </td>
                    {{--    <td>
                            Pending
                        </td>--}}
                    </tr>
                    <tr class="info">
                        <td>
                            4
                        </td>
                        <td>
                            TB - Monthly
                        </td>
                        <td>
                            04/04/2012
                        </td>
                      {{--  <td>
                            Call in to confirm
                        </td>--}}
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection