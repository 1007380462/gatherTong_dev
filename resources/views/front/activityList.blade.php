{{--社团空间--}}
@extends('layouts.app')
@include('layouts.navigation')
@section('content')
        {{--导航栏css--}}
        @yield('navigation-style')

    <div class="container">
        <div class="row">
            <div class="span2 col-sm-2">
              @yield('navigation-left')
            </div>
                   {{--导航栏js--}}
            @yield('navigation-js')

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
