{{--社团空间--}}
@extends('layouts.app')
@section('content')
        {{--导航栏css--}}
    <style type="text/css">
        body{margin:0;padding:0;overflow-x:hidden;}
        html, body{height:100%;}
        img{border:none;}
        *{font-family:'微软雅黑';font-size:12px;color:#626262;}
         dl,dt,dd{display:block;margin:0;}
        a{text-decoration:none;}
        #bg{background-image:url(../images/content/dotted.png);}
        .container{width:100%;height:100%;margin:auto;}
        /*left*/
        .leftsidebar_box{width:160px;height:auto !important;overflow:visible !important;position:fixed;
            height:100% !important;background-color:#FFFFFF;}
        .line{height:2px;width:100%;background-image:url(images/left/line_bg.png);background-repeat:repeat-x;}
        .leftsidebar_box dt{padding-left:40px;padding-right:10px;background-repeat:no-repeat;
            background-position:10px center;color:#f5f5f5;font-size:14px;position:relative;line-height:48px;cursor:pointer;}
         .leftsidebar_box dd{background-color:#8EB8D1;padding-left:40px;}
        .leftsidebar_box dd a{color:#f5f5f5;line-height:20px;}
        .leftsidebar_box dt img{position:absolute;right:10px;top:20px;}
        .system_log dt{background-image:url(images/left/system.png)}
        .custom dt{background-image:url(images/left/custom.png)}
        .channel dt{background-image:url(images/left/channel.png)}
        .app dt{background-image:url(images/left/app.png)}
        .cloud dt{background-image:url(images/left/cloud.png)}
        .syetem_management dt{background-image:url(images/left/syetem_management.png)}
        .source dt{background-image:url(images/left/source.png)}
        .statistics dt{background-image:url(images/left/statistics.png)}
        .leftsidebar_box dl dd:last-child{padding-bottom:10px;}
    </style>

    <div class="container">
        <div class="row">
            <div class="span2 col-sm-2">
                {{--左边导航栏--}}
                <div class="leftsidebar_box">
                    <div class="line"></div>
                    <dl class="system_log">
                        <dt onClick="changeImage()">系统记录</dt>
                        <dd class="first_dd"><a href="#">充值记录</a></dd>
                        <dd><a href="#">短信充值记录</a></dd>
                        <dd><a href="#">消费记录</a></dd>
                        <dd><a href="#">操作记录</a></dd>
                    </dl>

                    <dl class="custom">
                        <dt onClick="changeImage()">客户管理</dt>
                        <dd class="first_dd"><a href="#">客户管理</a></dd>
                        <dd><a href="#">试用/成交客户管理</a></dd>
                        <dd><a href="#">未成交客户管理</a></dd>
                        <dd><a href="#">即将到期客户管理</a></dd>
                    </dl>

                    <dl class="channel">
                        <dt>渠道管理</dt>
                        <dd class="first_dd"><a href="#">渠道主页</a></dd>
                        <dd><a href="#">渠道标准管理</a></dd>
                        <dd><a href="#">系统通知</a></dd>
                        <dd><a href="#">渠道商管理</a></dd>
                        <dd><a href="#">渠道商链接</a></dd>
                    </dl>

                    <dl class="app">
                        <dt onClick="changeImage()">APP管理</dt>
                        <dd class="first_dd"><a href="#">App运营商管理</a></dd>
                        <dd><a href="#">开放接口管理</a></dd>
                        <dd><a href="#">接口类型管理</a></dd>
                    </dl>

                    <dl class="syetem_management">
                        <dt>系统管理</dt>
                        <dd class="first_dd"><a href="#">后台用户管理</a></dd>
                        <dd><a href="#">角色管理</a></dd>
                        <dd><a href="#">客户类型管理</a></dd>
                        <dd><a href="#">栏目管理</a></dd>
                        <dd><a href="#">微官网模板组管理</a></dd>
                        <dd><a href="#">商城模板管理</a></dd>
                        <dd><a href="#">微功能管理</a></dd>
                        <dd><a href="#">修改用户密码</a></dd>
                    </dl>

                    <dl class="source">
                        <dt>素材库管理</dt>
                        <dd class="first_dd"><a href="#">图片库</a></dd>
                        <dd><a href="#">链接库</a></dd>
                        <dd><a href="#">推广管理</a></dd>
                    </dl>

                    <dl class="statistics">
                        <dt>统计分析</dt>
                        <dd class="first_dd"><a href="#">客户统计</a></dd>
                    </dl>
                </div>
            </div>
                   {{--导航栏js--}}
            <script type="text/javascript">
                $(".leftsidebar_box dt").css({"background-color":"#E5E5E5"});
                $(".leftsidebar_box dt img").attr("src","images/left/select_xl01.png");
                $(function(){
                    $(".leftsidebar_box dd").hide();
                    $(".leftsidebar_box dt").click(function(){
                        $(".leftsidebar_box dt").css({"background-color":"#E5E5E5"})
                        $(this).css({"background-color": "#ABABAB"});
                        $(this).parent().find('dd').removeClass("menu_chioce");
                        $(".leftsidebar_box dt img").attr("src","images/left/select_xl01.png");
                        $(this).parent().find('img').attr("src","images/left/select_xl.png");
                        $(".menu_chioce").slideUp();
                        $(this).parent().find('dd').slideToggle();
                        $(this).parent().find('dd').addClass("menu_chioce");
                    });
                })
            </script>

            <div class="span6 col-sm-6" id="activity_list">
                <h2>
                    标题
                </h2>
                <p>
                    本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
                </p>
                <p>
                    <a class="btn" href="#">查看更多 »</a>
                </p>
                <h2>
                    标题
                </h2>
                <p>
                    本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
                </p>
                <p>
                    <a class="btn" href="#">查看更多 »</a>
                </p>
            </div>
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
