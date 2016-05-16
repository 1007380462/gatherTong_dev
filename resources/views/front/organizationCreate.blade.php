@extends('layouts.app')
@include('layouts.uploadSinglePicture')
@section('content')

    <script type="text/javascript" src="{{URL::asset('/')}}js/YMDClass.js?version=01"></script>
    <script type="text/javascript" src="{{URL::asset('/')}}js/time/laydate.js?version=01"></script>
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
    @yield('uploadSinglePicture-js')
    @yield('uploadSinglePicture-css')

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
            <div hidden class="form-group">
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
                        <input name="time" class="laydate-icon"
                               onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
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

            {{--图片上传和裁剪--}}
            <div class="form-group">
                <!-- Text input-->
                <label for="lastname" class="col-sm-2 control-label">LOGO</label>

                <div class="col-md-12">
                    <!-- Content -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- <h3 class="page-header">Demo:</h3> -->
                                <div class="img-container">
                                    <img id="image" src="../assets/img/picture.jpg" alt="Picture">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- <h3 class="page-header">Preview:</h3> -->
                                <div class="docs-preview clearfix">
                                    <div class="img-preview preview-lg"></div>
                                    <div class="img-preview preview-md"></div>
                                    <div class="img-preview preview-sm"></div>
                                    <div class="img-preview preview-xs"></div>
                                </div>

                                <!-- <h3 class="page-header">Data:</h3> -->
                               {{-- <div class="docs-data">
                                    <div class="input-group input-group-sm">
                                        <label class="input-group-addon" for="dataX">X</label>
                                        <input type="text" class="form-control" id="dataX" placeholder="x">
                                        <span class="input-group-addon">px</span>
                                    </div>
                                    <div class="input-group input-group-sm">
                                        <label class="input-group-addon" for="dataY">Y</label>
                                        <input type="text" class="form-control" id="dataY" placeholder="y">
                                        <span class="input-group-addon">px</span>
                                    </div>
                                    <div class="input-group input-group-sm">
                                        <label class="input-group-addon" for="dataWidth">Width</label>
                                        <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                        <span class="input-group-addon">px</span>
                                    </div>
                                    <div class="input-group input-group-sm">
                                        <label class="input-group-addon" for="dataHeight">Height</label>
                                        <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                        <span class="input-group-addon">px</span>
                                    </div>
                                    <div class="input-group input-group-sm">
                                        <label class="input-group-addon" for="dataRotate">Rotate</label>
                                        <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                        <span class="input-group-addon">deg</span>
                                    </div>
                                    <div class="input-group input-group-sm">
                                        <label class="input-group-addon" for="dataScaleX">ScaleX</label>
                                        <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                    </div>
                                    <div class="input-group input-group-sm">
                                        <label class="input-group-addon" for="dataScaleY">ScaleY</label>
                                        <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                    </div>
                                </div>--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-9 docs-buttons">
                                <!-- <h3 class="page-header">Toolbar:</h3> -->
                                {{--<div  hidden class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                                             <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                                      <span class="fa fa-arrows"></span>
                                               </span>
                                    </button>

                                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                                           <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                                    <span class="fa fa-crop"></span>
                                            </span>
                                    </button>

                                </div>--}}

                              {{--  <div hidden class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                   <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
                                      <span class="fa fa-search-plus"></span>
                                    </span>
                                    </button>

                                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
                                      <span class="fa fa-search-minus"></span>
                                        </span>
                                    </button>
                                </div>--}}

                               {{-- <div hidden class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)">
                                          <span class="fa fa-arrow-left"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
                                      <span class="fa fa-arrow-right"></span>
                                    </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)">
                                      <span class="fa fa-arrow-up"></span>
                                    </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
                                      <span class="fa fa-arrow-down"></span>
                                    </span>
                                    </button>
                                </div>--}}

                                {{--<div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
                                      <span class="fa fa-rotate-left"></span>
                                    </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
                                      <span class="fa fa-rotate-right"></span>
                                    </span>
                                    </button>
                                </div>--}}
                          {{--旋转--}}
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

                                {{--<div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
                                      <span class="fa fa-check"></span>
                                    </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
                                  <span class="fa fa-remove"></span>
                                </span>
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
                                  <span class="fa fa-lock"></span>
                                </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
                                          <span class="fa fa-unlock"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">--}}

                                  {{--  <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
                                  <span class="fa fa-refresh"></span>
                                </span>
                                    </button>--}}

                                    <label class="btn btn-primary btn-upload" for="inputImage"
                                           title="Upload image file">
                                        <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                                                  <span class="fa fa-upload"></span>
                                                </span>
                                    </label>
                                    {{--<button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
                                          <span class="fa fa-power-off"></span>
                                  </span>
                                    </button>--}}
                                </div>

                              {{--  <div class="btn-group btn-group-crop">
                                    <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
                                                  Get Cropped Canvas
                                                </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">160&times;
                                            90
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">320&times;180
                                    </span>
                                    </button>
                                </div>--}}

                                <!-- Show the cropped image in modal -->
                             {{--   <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true"
                                     aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}<!-- /.modal -->

                               {{-- <button type="button" class="btn btn-primary" data-method="getData" data-option data-target="#putData">
                            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
                               Get Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="setData" data-target="#putData">
                       <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)">
                            Set Data
                               </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getContainerData" data-option data-target="#putData">
                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)">
                            Get Container Data
                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getImageData" data-option data-target="#putData">
                              <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
                                Get Image Data
                              </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getCanvasData" data-option data-target="#putData">
                              <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
                                Get Canvas Data
                              </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="setCanvasData" data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)">
                                    Set Canvas Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getCropBoxData" data-option data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
                                    Get Crop Box Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="setCropBoxData" data-target="#putData">
                                          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
                                            Set Crop Box Data
                                          </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">
                              <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
                                0,0
                              </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">
                              <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
                                100%
                              </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
                                  <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
                                    180°
                                  </span>
                                </button>
--}}
                               {{-- <input type="text" class="form-control" id="putData"
                                       placeholder="Get data to here or set data with this value">--}}
                            </div>
                            <div class="col-md-3 docs-toggles">
                                <!-- <h3 class="page-header">Toggles:</h3> -->
                               {{-- <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
                                          16:9
                                        </span>
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
                                              4:3
                                            </span>
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
                                          1:1
                                        </span>
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
                                              2:3
                                            </span>
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
                                          Free
                                        </span>
                                    </label>
                                </div>--}}

                               {{-- <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                                            <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                                              VM0
                                            </span>
                                            </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                  VM1
                                </span>
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                                          VM2
                                        </span>
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                                          VM3
                                        </span>
                                    </label>
                                </div>--}}

                               {{-- <div class="dropdown dropup docs-options">
                                    <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                                        Toggle Options
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="responsive" checked>
                                                responsive
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="restore" checked>
                                                restore
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkCrossOrigin" checked>
                                                checkCrossOrigin
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkOrientation" checked>
                                                checkOrientation
                                            </label>
                                        </li>

                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="modal" checked>
                                                modal
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="guides" checked>
                                                guides
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="center" checked>
                                                center
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="highlight" checked>
                                                highlight
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="background" checked>
                                                background
                                            </label>
                                        </li>

                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="autoCrop" checked>
                                                autoCrop
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="movable" checked>
                                                movable
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="rotatable" checked>
                                                rotatable
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="scalable" checked>
                                                scalable
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="zoomable" checked>
                                                zoomable
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="zoomOnTouch" checked>
                                                zoomOnTouch
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="zoomOnWheel" checked>
                                                zoomOnWheel
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cropBoxMovable" checked>
                                                cropBoxMovable
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cropBoxResizable" checked>
                                                cropBoxResizable
                                            </label>
                                        </li>
                                        <li role="presentation">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="toggleDragModeOnDblclick" checked>
                                                toggleDragModeOnDblclick
                                            </label>
                                        </li>
                                    </ul>
                                </div>--}}

                            </div><!-- /.docs-toggles -->
                        </div>
                    </div>

                </div>
            </div>

        </fieldset>

        <div class="form-group">
            <!-- Text input-->
            <label for="lastname" class="col-sm-2 control-label">图片</label>
            <div class="col-md-8">
              @yield('uploadSinglePicture')
            </div>
        </div>
        {{--提交--}}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{--  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>--}}
                <input name="seller_id" type="hidden" value=""/>
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>

    </form>
    {{--表单的客户端验证，需要后端配合，formRequest的第一个参数就是后台的一个验证规则文件--}}
    {!! JsValidator::formRequest('App\Http\Requests\OrganizationCreateForm') !!}
@endsection