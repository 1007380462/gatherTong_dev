@extends('layouts.app')
@section('content')

    <script type="text/javascript" src="{{URL::asset('/')}}js/YMDClass.js?version=01"></script>
    <script type="text/javascript" src="{{URL::asset('/')}}js/time/laydate.js?version=01"></script>
       {{--time--}}
    <style type="text/css">
        *{margin:0;padding:0;list-style:none;}
        html{background-color:#E3E3E3; font-size:14px; color:#000; font-family:'微软雅黑'}
        h2{line-height:30px; font-size:20px;}
        a,a:hover{ text-decoration:none;}
        pre{font-family:'微软雅黑'}
        .box{width:970px; padding:10px 20px; background-color:#fff; margin:10px auto;}
        .box a{padding-right:20px;}
        .demo1,.demo2,.demo3,.demo4,.demo5,.demo6{margin:25px 0;}
        h3{margin:10px 0;}
        .layinput{height: 22px;line-height: 22px;width: 150px;margin: 0;}
    </style>

    <div id="legend" class="">
        <legend class="" style="margin-left: 100px;">创建活动</legend>
    </div>

    <form class="form-horizontal" role="form" action="{{url('seller/edit')}}" method="post"
          enctype="multipart/form-data">
        <fieldset>
            @if(count($errors)>0)
                @if($errors->has('tel'))
                    {{ '*' }}
                @endif
            @endif
                    {{--活动名称--}}
            <div class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">活动名称</label>

                <div class="col-md-2">
                    <input name="seller_zh" type="text" class="form-control" id="lastname"
                           value="">
                </div>
            </div>

               {{--商户编号--}}
            <div hidden class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">商户编号</label>

                <div class="col-md-2">
                    <input name="bn" type="text" class="form-control" id="lastname"
                           value="" required>

                    <div style="color: red">
                        @if(count($errors)>0)
                            @if($errors->has('bn'))
                                {{ '*' }}
                            @endif
                        @endif
                    </div>
                </div>
            </div>

             {{--商户等级--}}
            <div hidden class="form-group">
                <!--Select Basic-->
                <label for="name" class="col-sm-2 control-label">商户等级</label>

                <div class="col-md-2">
                    <select class="form-control col-md-4" name="seller_lv_id">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div>
             {{--商户类型--}}
            <div hidden class="form-group">
                <!--Select Basic-->
                <label for="name" class="col-sm-2 control-label">商户类型</label>

                <div class="col-md-2">
                    <select class="form-control col-md-4" name="seller_type">
                        <option>车后服务</option>
                        <option>汽车商城</option>
                        <option>易捷商城</option>
                    </select>
                </div>
            </div>
             {{--联系人职务--}}
            <div hidden class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">联系人职务</label>

                <div class="col-md-2">
                    <input type="text" class="form-control" id="lastname"
                           value="" name="position">

                    <div style="color: red">
                        @if(count($errors)>0)
                            @if($errors->has('position'))
                                {{ '*' }}
                            @endif
                        @endif
                    </div>
                </div>
            </div>
                {{--人员类型--}}
            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">人员类型</label>
                <div class="col-md-6">
                    @if(0)
                        <label class="checkbox-inline">
                            <input type="radio" name="sex" id="optionsRadios1"
                                   value="1">正式人员
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="sex" id="optionsRadios2"
                                   value="0" checked> 正式+编外人员
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="sex" id="optionsRadios2"
                                   value="0" checked> 无要求
                        </label>
                    @else
                        <label class="checkbox-inline">
                            <input type="radio" name="sex" id="optionsRadios1"
                                   value="1" checked>正式人员
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="sex" id="optionsRadios2"
                                   value="0"> 正式+编外人员
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="sex" id="optionsRadios2"
                                   value="0"> 无要求
                        </label>
                    @endif
                </div>
            </div>
                {{--公开与否--}}
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">公开与否</label>
                    <div class="col-md-2">
                        @if(0)
                            <label class="checkbox-inline">
                                <input type="radio" name="sex" id="optionsRadios1"
                                       value="1">公开
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="sex" id="optionsRadios2"
                                       value="0" checked> 非公开
                            </label>
                        @else
                            <label class="checkbox-inline">
                                <input type="radio" name="sex" id="optionsRadios1"
                                       value="1" checked>公开
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="sex" id="optionsRadios2"
                                       value="0"> 非公开
                            </label>
                        @endif
                    </div>
                </div>
           {{--联系人电话--}}
            <div class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">联系人电话</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="lastname"
                           value="" name="tel">
                    <div style="color: red">
                        @if(count($errors)>0)
                            @if($errors->has('tel'))
                                {{ '*' }}
                            @endif
                        @endif
                    </div>
                </div>
            </div>
              {{--参加人数--}}
            <div class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">参加人数</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="lastname"
                           value="" name="mobile">
                    <div style="color: #ff0000">
                        @if(count($errors)>0)
                            @if($errors->has('mobile'))
                                {{ '*' }}
                            @endif
                        @endif
                    </div>
                </div>
            </div>
                     {{--商户全称--}}
            <div hidden class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">商户全称</label>

                <div class="col-md-2">
                    <input type="text" class="form-control" id="lastname"
                           value="" required name="seller_name">

                    <div style="color: red">
                        @if(count($errors)>0)
                            @if($errors->has('seller_name'))
                                {{ '*' }}
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            {{--商户简称--}}
            <div  hidden class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">商户简称</label>

                <div class="col-md-2">
                    <input type="text" class="form-control" id="lastname"
                           value="" required name="short_name">

                    <div style="color: red">
                        @if(count($errors)>0)
                            @if($errors->has('short_name'))
                                {{ '*' }}
                            @endif
                        @endif
                    </div>
                </div>
            </div>
             {{--时间选择精确到天--}}
            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">开始时间</label>

                <div class="col-md-6">
                    <div class="col-md-2"><select name="start_year" class="form-control col-md-2"></select></div>
                    <div class="col-md-2"><select name="start_month" class="form-control col-md-2"></select></div>
                    <div class="col-md-2"><select name="start_day" class="form-control col-md-2"></select></div>
                    <script>
                        //new YMDselect('year1','month1');
                        //new YMDselect('year1','month1',1990);
                        //new YMDselect('year1','month1',1990,2);
                        //new YMDselect('year1','month1','day1');
                        new YMDselect('start_year', 'start_month', 'start_day');
                        //new YMDselect('year1','month1','day1',1990,2);
                        //new YMDselect('year1','month1','day1',1990,2,10);
                    </script>
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">结束时间</label>

                <div class="col-md-6">
                    <div class="col-md-2"><select name="end_year" class="form-control col-md-2"></select></div>
                    <div class="col-md-2"><select name="end_month" class="form-control col-md-2"></select></div>
                    <div class="col-md-2"><select name="end_day" class="form-control col-md-2"></select></div>
                    <script>
                        //new YMDselect('year1','month1');
                        //new YMDselect('year1','month1',1990);
                        //new YMDselect('year1','month1',1990,2);
                        //new YMDselect('year1','month1','day1');
                        new YMDselect('end_year', 'end_month', 'end_day');
                        //new YMDselect('year1','month1','day1',1990,2);
                        //new YMDselect('year1','month1','day1',1990,2,10);
                    </script>
                </div>
            </div>

               {{--时间选择精确到秒--}}
            <div class="form-group">
                    <!-- Text input-->
                    <label for="lastname" class="col-sm-2 control-label">时间</label>
                    <div class="col-md-2">
                        <div class="demo2">
                            <input name="time" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                        </div>

                    </div>
                </div>

            {{--活动地址--}}
            <div class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">活动地址</label>

                <div class="col-md-2">
                    <input type="text" class="form-control" id="lastname"
                           value="" name="addr">

                    <div style="color: red">
                        @if(count($errors)>0)
                            @if($errors->has('addr'))
                                {{ '*' }}
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            {{--具体内容 使用百度编辑器--}}
            <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">具体内容</label>
                <div class="col-md-8">
                    <!-- 加载编辑器的容器 -->
                    <script id="container" name="content" type="text/plain">
                    </script>
                    <!-- 实例化编辑器 -->
                    <script type="text/javascript">
                        var ue = UE.getEditor('container', {
                            toolbars: [[
                                'undo', 'redo', '|', 'bold', 'italic', 'underline', '|', 'forecolor', '|', 'paragraph',
                                'fontfamily', 'fontsize', '|', 'directionalityltr', 'directionalityrtl', '|', 'justifyleft',
                                'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                                'link', 'unlink', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                                'simpleupload', 'insertimage', 'emotion', 'scrawl', 'map', 'insertcode', 'pagebreak', '|',
                                'inserttable', 'deletetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol',
                                'mergeright', 'mergedown', '|', 'preview',
                            ]]
                        });
                        ue.ready(function () {
                            /*ue.execCommand('serverparam', '_token', 'csrf_token()');*/
                            //此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                            ue.execCommand('serverparam');
                        });
                    </script>
                </div>
            </div>

        </fieldset>

        {{--提交--}}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{--  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>--}}
                <input name="seller_id" type="hidden" value=""/>
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>

    </form>
@endsection