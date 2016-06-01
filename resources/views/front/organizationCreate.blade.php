@extends('layouts.app')
@include('layouts.uploadSinglePicture')
@include('layouts.time')
@include('layouts.UEditor')
@section('content')

    <script type="text/javascript" src="{{URL::asset('/')}}js/YMDClass.js?version=01"></script>
    <script type="text/javascript" src="{{URL::asset('/')}}js/time/laydate.js?version=01"></script>
    @yield('time-day-js')
    @yield('time-second-js')
    {{--time--}}
    @yield('time-day-css')

    {{--time--}}
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        html {
            background-color: #E3E3E3;
            font-size: 14px;
            color: #000;
            font-family: '微软雅黑'
        }

        h2 {
            line-height: 30px;
            font-size: 20px;
        }

        a, a:hover {
            text-decoration: none;
        }

        pre {
            font-family: '微软雅黑'
        }

        .box {
            width: 970px;
            padding: 10px 20px;
            background-color: #fff;
            margin: 10px auto;
        }

        .box a {
            padding-right: 20px;
        }

        .demo1, .demo2, .demo3, .demo4, .demo5, .demo6 {
            margin: 25px 0;
        }

        h3 {
            margin: 10px 0;
        }

        .layinput {
            height: 22px;
            line-height: 22px;
            width: 150px;
            margin: 0;
        }
    </style>

    {{--单图上传--}}
    @yield('uploadSinglePicture-css')
    @yield('uploadSinglePicture-js')
    @yield('uploadSinglePicture-js-initFileInput')

    {{--图片上传--}}
    <script type="text/javascript" src="{{URL::asset('/')}}js/clipPictureUpload/cropper.js?version=01"></script>
    <script type="text/javascript" src="{{URL::asset('/')}}js/clipPictureUpload/main.js?version=01"></script>
    <link href="{{URL::asset('/')}}css/clipPictureUpload/cropper.css?version=01" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('/')}}css/clipPictureUpload/main.css?version=01" rel='stylesheet' type='text/css'>

    <div id="legend" class="">
        <legend class="" style="margin-left: 100px;">创建社团</legend>
    </div>

    <form class="form-horizontal" role="form" action="{{url('seller/edit')}}" method="post"
          enctype="multipart/form-data">
        <fieldset>
            @if(count($errors)>0)
                @if($errors->has('tel'))
                    {{ '*' }}
                @endif
            @endif
            {{--社团名称--}}
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
                           value="" >

                    <div style="color: red">

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
                    <input type="text" class="form-control" id="lastname" value=""  name="">

                    <div style="color: red">
                    </div>
                </div>
            </div>
            {{--商户简称--}}
            <div hidden class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">商户简称</label>

                <div class="col-md-2">
                    <input type="text" class="form-control" id="lastname"
                           value=""  name="">

                    <div style="color: red">
                    </div>
                </div>
            </div>

            {{--时间选择精确到天--}}
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">开始时间</label>
                    @yield('time-day-start')
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">结束时间</label>
                    @yield('time-day-end')
                </div>

            {{--时间选择精确到秒--}}
                @yield('time-second')

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
                        @yield('UEditor')
                    </div>
                </div>

            {{--图片上传和裁剪--}}
            {{--<div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">LOGO</label>

                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="img-container">
                                    <img id="image" src="../assets/img/picture.jpg" alt="Picture">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="docs-preview clearfix">
                                    <div class="img-preview preview-lg"></div>
                                    <div class="img-preview preview-md"></div>
                                    <div class="img-preview preview-sm"></div>
                                    <div class="img-preview preview-xs"></div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-9 docs-buttons">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">
                                  <span class="fa fa-arrows-h"></span>
                                </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;-1)">
                                      <span class="fa fa-arrows-v"></span>
                                    </span>
                                    </button>
                                </div>
                                    <label class="btn btn-primary btn-upload" for="inputImage"
                                           title="Upload image file">
                                        <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                                                  <span class="fa fa-upload"></span>
                                                </span>
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-3 docs-toggles">
                            </div>
                        </div>
                    </div>

                </div>--}}

        {{--单图上传--}}
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">图片</label>
            <div class="col-md-4">
                <input hidden name="singlePicture" id="singlePicture-two">
              @yield('uploadSinglePicture')
            </div>
        </div>
        <script>
            //初始化fileinput控件（第一次初始化）
            initFileInput("file-0a", "/front/organization/single-picture");/*user/editPortrait是*/
        </script>

        {{--提交--}}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{--  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>--}}
                <input name="seller_id" type="hidden" value=""/>
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>

        </fieldset>
    </form>
    {{--表单的客户端验证，需要后端配合，formRequest的第一个参数就是后台的一个验证规则文件--}}
    {!! JsValidator::formRequest('App\Http\Requests\OrganizationCreateForm') !!}
@endsection