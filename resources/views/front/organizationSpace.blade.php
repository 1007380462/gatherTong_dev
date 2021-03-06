@extends('layouts.app')

@section('content')
    @include('layouts.navigation')
    @include('layouts.carouselFigure')

    @yield('carouselFigure-css')

    @yield('navigation-style')
    @yield('carouselFigure-js')

    <div class="container" style="background-size:100% ;padding-left: 0px;padding-right:0px">

                 {{--carousel--}}
        <div class="row" style="background-size:100%;margin-left: -89.5px;margin-right: -89.5px ">
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
                  {{--社团的活动--}}
                    <li>
                        <a href="#navigation-activity" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">活动</a>
                        <ul id="navigation-activity" class="nav nav-list collapse secondmenu" style="height: 0px;">
                            <li><a href="javascript:void(0)" onclick="navigation_activity('a')">慈善公益类</a></li>
                            <li><a href="javascript:void(0)" onclick="navigation_activity()">体育运动类</a></li>
                            <li><a href="javascript:void(0)" onclick="navigation_activity()">文化艺术类</a></li>
                            <li><a onclick="navigation_activity()" href="javascript:void(0)">学术科技类</a></li>
                            <li><a onclick="navigation_activity()" href="javascript:void(0)">兴趣爱好类</a></li>
                        </ul>
                    </li>

                    {{--成员管理--}}
                    <li>
                        <a onclick="navigation_member()" href="javascript:void(0)" style="background-color: #f2efe3" class="nav-header collapsed clickB">成员管理</a>
                    </li>

                    {{--讨论区--}}
                   {{-- <li >
                        <a href="#systemSetting2" style="background-color: #f2efe3" class="nav-header collapsed clickB">讨论区</a>
                    </li>--}}

                    {{--本社团的内部资料--}}
                    <li>
                        <a href="#navigation-info" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">社团资料</a>
                        <ul id="navigation-info" class="nav nav-list collapse secondmenu" style="height: 0px;">
                            <li><a href="{{ url('order/order-info') }}">社团相册</a></li>
                            <li><a href="{{ url('order/relation-order') }}">社团视频</a></li>
                            <li><a href="{{ url('order/relation-order') }}">规章制度</a></li>
                        </ul>
                    </li>

                    {{--社团基金--}}
                    <li>
                        <a href="#systemSetting2" style="background-color: #f2efe3" class="nav-header collapsed clickB">社团基金</a>
                    </li>

                    {{--社团一些属性的设置--}}
                    <li>
                        <a href="#navigation-setting" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">设置</a>
                        <ul id="navigation-setting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                            <li><a href="{{ url('good/good-info') }}">权限设置</a></li>
                            <li><a href="{{ url('good/good-stockout') }}">社团信息设置</a></li>
                            <li hidden><a href="{{ url('good/good-classify') }}">文化艺术类</a></li>
                            <li hidden><a href="{{ url('good/good-type') }}">学术科技类</a></li>
                            <li hidden><a href="{{ url('good/good-brand') }}">兴趣爱好类</a></li>
                        </ul>
                    </li>
                    {{--帮助--}}
                    <li>
                        <a href="#navigation-help" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">帮助</a>
                        <ul id="navigation-help" class="nav nav-list collapse secondmenu" style="height: 0px;">
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
            <div hidden class="span6 col-sm-7">
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
             {{--成员管理--}}
            <div  class="span6 col-sm-7">
                <div>
                    <p>
                        正式社员:<?php echo $formal ?? '0' ?>
                    </p>
                <p>
                    编外社员:<?php echo $informal ?? '0' ?>
                </p>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            职位
                        </th>
                        <th>
                            姓名
                        </th>
                        <th>
                            学号
                        </th>
                        <th>
                            贡献度
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

            {{--活动显示--}}
            <div hidden class="span6 col-sm-7">
                    <h3>
                        h3.这是一套可视化布局系统.
                    </h3>
                    <img height="100px" width="100px" alt="100x100" src="{{URL::asset('/')}}img/avatar/logo.png" />
                    <img height="100px" width="100px" alt="100x100" src="{{URL::asset('/')}}img/avatar/logo.png" />
                    <img height="100px" width="100px" alt="100x100" src="{{URL::asset('/')}}img/avatar/logo.png" />
                    <img height="100px" width="100px" alt="100x100" src="{{URL::asset('/')}}img/avatar/logo.png" />
                    <p>
                        <em>Git</em>
                        是一个分布式的版本控制系统，最初由
                        <strong>Linus Torvalds</strong>编写，
                        用作Linux内核代码的管理。在推出后，Git在其它项目中也取得了很大成功，尤其是在Ruby社区中。
                    </p>
                    <div style="width: 200px;margin-left: auto">
                        <a class="btn btn-primary" href="#">浏览</a>
                        <a class="btn" href="#" >分享</a>
                    </div>
                </div>

            {{--社团信息设置--}}
            <div hidden class="span6 col-sm-7">

            </div>


            {{--社团最右边表格--}}
            <div class="span4 col-sm-3">
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

      {{--发送post请求获取json数据格式--}}
    <script>
        function navigation_activity(subclass){
            var data={
              s:'sds',
                b:'sds'
            };
            $.ajax({
                type:'POST',
                url:'',
                data:data,
                success:'',
                dataType:'json'
            });

        }
        function navigation_member(){
            var data={

            };
            $.ajax({
                type:'POST',
                url:'',
                data:data,
                success:'',
                dataType:'json'
            });
        }
    </script>

    {{--瀑布流无限分页,靠近窗口顶部时调用函数handler--}}
    <div id="overflow-scroll" >
        <div id="horizontal-waypoint">无限分页</div>
    </div>
    <script src="{{URL::asset('/')}}js/noframework.waypoints.min.js"></script>
    <script>
        var waypoint = new Waypoint({
            element: document.getElementById('horizontal-waypoint'),

            handler: function(direction) {
                if(direction=='down'){
                    //进行ajax请求获取下一页数据进行渲染
                    //jQuery.post(url,data,success(data, textStatus, jqXHR),dataType)
                    var number=0;

                    $.post("{{url('/front/activity/show-activity')}}",{number:number},function(data){
                        if(data==0)
                            return ;
                        number++;
                        /*下面的for循环会对ajax请求有影响，本来是到了底部就会刷新，现在只会刷新一次*/
                        for(var key in data){
                            //标题
                            var node=document.createElement("h2"); //创建一个h2节点
                            var textnode=document.createTextNode("标题"); //创建一个文本节点内容
                            node.appendChild(textnode); //将文本节点内容，添加到h2节点里面
                            document.getElementById("activity_list").appendChild(node); //h2节点，添加到test几点下面
                            //内容
                            var node=document.createElement("p");
                            var textnode=document.createTextNode("本可视化布局程序在HTML5浏览器上运行更加完美,");
                            node.appendChild(textnode);
                            document.getElementById("activity_list").appendChild(node);

                            //查看更多
                            var node=document.createElement("p");
                            var textnode=document.createTextNode("");
                            node.appendChild(textnode);
                            document.getElementById("activity_list").appendChild(node);

                            var node=document.createElement('a');
                            node.setAttribute('class','btn');
                            node.setAttribute('href','#');
                            var textNode=document.createTextNode('查看更多>>');
                            node.appendChild(textNode);
                            var lastNode=document.getElementById("activity_list").lastElementChild;
                            lastNode.appendChild(node);
                        }
                    });
                }
            },
            offset:"bottom-in-view",
            enabled:false,
        });

        function refresh(){
            waypoint.enable();
        }
        function ad(){
            Waypoint.refreshAll()
        }

        function funcTest(){
            window.setInterval("ad()",100);
        }
        window.onload=function(){
            refresh();
            funcTest();
        }

    </script>

@endsection