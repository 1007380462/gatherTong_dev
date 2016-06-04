@extends('layouts.app')
@include('layouts.time')
@include('layouts.UEditor')
@include('layouts.avatar')
@include('layouts.uploadImg_common')
{{--@include('layouts.pictureCropUpload')
@include('layouts.clipAndUploadPicture')
@include('layouts.clipPicture')--}}
{{--@include('layouts.uploadSinglePicture')--}}
{{--@yield('clipAndUploadPicture-css')--}}

@section('content')
    <script type="text/javascript" src="{{URL::asset('/')}}js/YMDClass.js?version=01"></script>
    <script type="text/javascript" src="{{URL::asset('/')}}js/time/laydate.js?version=01"></script>
    @yield('time-day-js')
    @yield('time-second-js')
    {{--time--}}
    @yield('time-day-css')

    {{--time--}}

    <style>
        .row {
            margin-top: 8px;
            margin-bottom: 4px;
        }
    </style>
    {{--图片剪切--}}
    @yield('clipPicture-js')
    @yield('clipPicture-css')

    {{--单图上传--}}
    @yield('uploadSinglePicture-css')
    @yield('uploadSinglePicture-js-initFileInput')


    {{--图片上传--}}
    @yield('pictureCropUpload-js')
    @yield('pictureCropUpload-css')

    {{--头像上传--}}
    @yield('avatar-css')
    @yield('avatar')
    @yield('avatar-js-function')

    <div id="legend" class="">
        <legend class="" style="margin-left: 100px;">创建活动</legend>
    </div>

    <div class="container">
        {{--社团名称--}}
        <div class="row">
            <div class="col-md-1"> 社团名称</div>
            <div class="col-md-4">
                <input name="seller_zh" class="form-control" type="text" id="lastname" value="">
            </div>
        </div>
        {{--人员类型--}}
        <div class="row">
            <div class="col-md-1">人员类型</div>
            <div class="col-md-6">
                @if(0)
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default" name="sex" id="optionsRadios1"
                               value="1">正式人员
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default" name="sex" id="optionsRadios2"
                               value="0" checked> 正式+编外人员
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default"  name="sex" id="optionsRadios2"
                               value="0" checked> 无要求
                    </label>
                @else
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default" name="sex" id="optionsRadios1"
                               value="1" checked>正式人员
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default" name="sex" id="optionsRadios2"
                               value="0"> 正式+编外人员
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default" name="sex" id="optionsRadios2"
                               value="0"> 无要求
                    </label>
                @endif
            </div>
        </div>
        {{--是否公开--}}
        <div class="row">
            <div class="col-md-1">公开与否</div>
            <div class="col-md-2">
                @if(0)
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default" name="sex" id="optionsRadios1"
                               value="1">公开
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default" name="sex" id="optionsRadios2"
                               value="0" checked> 非公开
                    </label>
                @else
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default" name="sex" id="optionsRadios1"
                               value="1" checked>公开
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" class="btn btn-default" name="sex" id="optionsRadios2"
                               value="0"> 非公开
                    </label>
                @endif
            </div>
        </div>
        {{--联系人电话--}}
        <div class="row">
            <div class="col-md-1">联系电话</div>

            <div class="col-md-2">
                <input type="text" class="form-control" id="lastname" value="" name="tel">
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
        <div class="row">
            <div class="col-md-1">参加人数</div>
            <div class="col-md-2">
                <input type="text" class="form-control"id="lastname" value="" name="mobile">
                <div style="color: #ff0000">
                    @if(count($errors)>0)
                        @if($errors->has('mobile'))
                            {{ '*' }}
                        @endif
                    @endif
                </div>
            </div>
        </div>
        {{--时间选择精确到天--}}
        <div class="row">
            <div class="col-md-1">开始时间</div>
            @yield('time-day-start')
        </div>
        <div></div>
        <div class="row">
            <div class="col-md-1">结束时间</div>
            @yield('time-day-end')
        </div>
        {{--时间选择精确到秒--}}
        <div class="row">
            @yield('time-second')
        </div>
        {{--活动地址--}}
        <div class="row">
            <div class="col-md-1">活动地址</div>
            <div class="col-md-2">
                <input type="text"class="form-control" id="lastname" value="" name="addr">
            </div>
        </div>
        {{--具体内容 使用百度编辑器--}}
        <div class="row">
            <div class="col-md-1">具体内容</div>
            <div class="col-md-8">
                @yield('UEditor')
            </div>
        </div>

        {{--单图上传--}}
        {{-- <div class="row">
             <div class="col-md-1">LOGO</div>
                 <div class="col-md-4">
                     <input class="form-control" hidden name="singlePicture" id="singlePicture-two">
                     @yield('uploadSinglePicture')
                 </div>
             </div>
             @yield('uploadSinglePicture-js')
             <script>
                 //初始化fileinput控件（第一次初始化）
                 initFileInput("file-0a", "/front/organization/single-picture");
             </script>--}}

        {{--提交内容--}}
        <div class="row">
            <div class="col-sm-offset-2 col-sm-10">
                {{--  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>--}}
                <input class="form-control"  name="seller_id" type="hidden" value=""/>
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>

        {{--单图上传可与头像上传共用--}}
        <div class="row">
            @yield('uploadImg_common')
            @yield('uploadImg_common-js-function')
        </div>

    </div>

    {{--表单的客户端验证，需要后端配合，formRequest的第一个参数就是后台的一个验证规则文件--}}
    {!! JsValidator::formRequest('App\Http\Requests\OrganizationCreateForm') !!}

@endsection