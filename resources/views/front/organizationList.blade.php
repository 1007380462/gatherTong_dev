{{--社团空间--}}
@extends('layouts.app')
@include('layouts.navigation')

@section('content')
    @yield('navigation-style')
    <div class="container">
            <div class="row">
                <div class="span2 col-sm-2">
                    <ul id="nav_box" class="nav nav-tabs nav-stacked" >
                        <li>
                            <a href="{{ url('seller/seller-info') }}" style="background-color: #f2efe3" class="clickB collapsed">首页</a>
                        </li>
                        <li>
                            <a href="#systemSetting" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">商品</a>
                            <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                <li><a href="{{ url('good/good-info') }}">商品列表</a></li>
                                <li><a href="{{ url('good/good-stockout') }}">缺货商品</a></li>
                                <li><a href="{{ url('good/good-classify') }}">商品分类</a></li>
                                <li><a href="{{ url('good/good-type') }}">商品类型</a></li>
                                <li><a href="{{ url('good/good-brand') }}">商品品牌</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#systemSetting1" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">订单</a>
                            <ul id="systemSetting1" class="nav nav-list collapse secondmenu" style="height: 0px;">
                                <li><a href="{{ url('order/order-info') }}">订单列表</a></li>
                                <li><a href="{{ url('order/relation-order') }}">关联订单列表</a></li>
                                <li><a href="{{ url('order/order-delivery') }}">发货单</a></li>
                                <li><a href="{{ url('order/reship') }}">退货单</a></li>
                                <li><a href="{{ url('order/payment') }}">收款单</a></li>
                                <li><a href="{{ url('order/refunds') }}">退款单</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#systemSetting2" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">商户</a>
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
                            编号
                        </th>
                        <th>
                            产品
                        </th>
                        <th>
                            交付时间
                        </th>
                        <th>
                            状态
                        </th>
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
                        <td>
                            Default
                        </td>
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
                        <td>
                            Approved
                        </td>
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
                        <td>
                            Declined
                        </td>
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
                        <td>
                            Pending
                        </td>
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
                        <td>
                            Call in to confirm
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection