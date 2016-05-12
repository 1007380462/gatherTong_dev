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

    <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
    ssdadasd
</script>

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
        ue.ready(function() {
            /*ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.*/
            ue.execCommand('serverparam');
        });
    </script>


    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span4">
            </div>
            <div class="span4 container">
                {{--{!! QrCode::generate('wumengrong is you god')!!}--}}
                <h2>
                    标题
                    <form action="{{ url('front/check-captcha') }}" method="post">
                        <input type="text" name="cpt" value="" />
                      <img src="{{ url('front/captcha') }}" onclick="this.src='{{ url('front/captcha') }}?r='+Math.random();" alt="">
                    <input type="submit" value="Submit" />
                    </form>
                </h2>
                <p>
                    本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
                </p>
                <p>
                    <a class="btn" href="{{url('front/organization/show-organization')}}">查看更多 »</a>
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
                    <a class="btn" href="{{url('front/activity/show-activity')}}">查看更多 »</a>
                </p>
            </div>
            <div class="span4">
            </div>
        </div>
    </div>
@endsection
