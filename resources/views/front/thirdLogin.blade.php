@extends('layouts.app')
@section('content')

    <div class="container" style="background-size:100% ;padding-left: 0px;padding-right:0px">

        {{--content--}}
        <div class="row">
            <div class="col-sm-8">
                <div class="tabbable" id="tabs-1">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#panel-1" data-toggle="tab" onclick="pullSponsor()">拉赞助</a>
                        </li>
                        <li>
                            <a href="#panel-2" data-toggle="tab" onclick="provideSponsor()">提供赞助</a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        {{--拉赞助显示--}}
                        <div class="tab-pane active" id="panel-1">
                            <div class="media" style="margin-top: 25px">
                                <a href="#" class="pull-left">
                                    <img height="100px" width="100px" src="{{URL::asset('/')}}img/avatar/logo.png"
                                         class="media-object" alt=''/>
                                </a>

                                <div class="media-body">
                                    <h4 class="media-heading">
                                        嵌入媒体标题
                                    </h4>
                                    请尽量使用HTML5兼容的视频格式和视频代码实现视频播放, 以达到更好的体验效果.
                                    <div style="width: 200px;margin-left: auto">
                                        <a class="btn btn-primary" href="#">浏览</a>
                                        <a class="btn" href="#">分享</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--提供赞助显示--}}
                        <div class="tab-pane" id="panel-2" style="margin-top: 25px">
                            <h3>
                                h3. 这是一套可视化布局系统.
                            </h3>
                            <img height="100px" width="100px" alt="140x140"
                                 src="{{URL::asset('/')}}img/avatar/logo.png"/>
                            <img height="100px" width="100px" alt="140x140"
                                 src="{{URL::asset('/')}}img/avatar/logo.png"/>
                            <img height="100px" width="100px" alt="140x140"
                                 src="{{URL::asset('/')}}img/avatar/logo.png"/>
                            <img height="100px" width="100px" alt="140x140"
                                 src="{{URL::asset('/')}}img/avatar/logo.png"/>

                            <p>
                                <em>Git</em>
                                是一个分布式的版本控制系统，最初由
                                <strong>Linus Torvalds</strong>编写，
                                用作Linux内核代码的管理。在推出后，Git在其它项目中也取得了很大成功，尤其是在Ruby社区中。
                            </p>

                            <div style="width: 200px;margin-left: auto">
                                <a class="btn btn-primary" href="#">浏览</a>
                                <a class="btn" href="#">分享</a>
                            </div>
                        </div>

                        {{--帖子显示--}}
                        <div hidden class="tab-pane" id="panel-3" style="margin-top: 25px">
                            <h3>
                                h3. 这是一套可视化布局系统.
                            </h3>
                            <img height="100px" width="100px" alt="140x140"
                                 src="{{URL::asset('/')}}img/avatar/logo.png"/>
                            <img height="100px" width="100px" alt="140x140"
                                 src="{{URL::asset('/')}}img/avatar/logo.png"/>
                            <img height="100px" width="100px" alt="140x140"
                                 src="{{URL::asset('/')}}img/avatar/logo.png"/>
                            <img height="100px" width="100px" alt="140x140"
                                 src="{{URL::asset('/')}}img/avatar/logo.png"/>

                            <p>
                                <em>Git</em>
                                是一个分布式的版本控制系统，最初由
                                <strong>Linus Torvalds</strong>编写，
                                用作Linux内核代码的管理。在推出后，Git在其它项目中也取得了很大成功，尤其是在Ruby社区中。
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                {{--标签用于 拉赞助或者提供赞助--}}
                <a href="/front/sponsor/pull-sponsor" class="btn btn-info btn-lg" id="releaseSponsor" target="_blank">
                    <span class="glyphicon glyphicon-pencil"></span> 发布
                </a>

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