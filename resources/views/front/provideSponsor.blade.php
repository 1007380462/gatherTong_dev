@extends('layouts.app')
@include('layouts.time')
@include('layouts.UEditor')

@section('content')
    <script type="text/javascript" src="{{URL::asset('/')}}js/YMDClass.js?version=01"></script>
    <script type="text/javascript" src="{{URL::asset('/')}}js/time/laydate.js?version=01"></script>
    @yield('time-day-js')
    @yield('time-second-js')
    {{--time--}}
    @yield('time-day-css')
    {{--每行间隔--}}
    <style>
        .row {
            margin-top: 8px;
            margin-bottom: 8px;
        }
    </style>

    <div class="container">

        <div id="legend" class="">
            <legend class="" style="margin-left: 100px;margin-top:30px">提供赞助</legend>
        </div>

        {{--联系人--}}
        <div class="row">
            <div class="col-md-1"> 联系人</div>
            <div class="col-md-2">
                <input class="form-control" type="text" id="connect_user" value="">
            </div>
        </div>

        {{--是否公开--}}
        <div hidden class="row">
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
                <input type="text" class="form-control" id="tel" value="" >
                <div style="color: red">
                    @if(count($errors)>0)
                        @if($errors->has('tel'))
                            {{ '*' }}
                        @endif
                    @endif
                </div>
            </div>
        </div>

        {{--目标院校，有多个--}}
        <div hidden class="row">
            <div class="col-md-1">目标院校</div>
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

        {{--时间选择精确到天--}}
        <div class="row">
            <div class="col-md-1">开始时间</div>
            @yield('time-day-start')
        </div>


        <div class="row">
            <div class="col-md-1">结束时间</div>
            @yield('time-day-end')
        </div>

        {{--公司名称--}}
        <div class="row">
            <div class="col-md-1">组织名称</div>
            <div class="col-md-4">
                <input type="text"class="form-control" id="company_name" value="" >
            </div>
        </div>

        {{--具体内容 使用百度编辑器--}}
        <div class="row">
            <div class="col-md-1">具体内容</div>
            <div class="col-md-8">
                @yield('UEditor')
            </div>
        </div>

        {{--提交内容--}}
        <div class="row">
            <div class="col-sm-offset-2 col-sm-10">
                {{--  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>--}}
                <input class="form-control"  name="seller_id" type="hidden" value=""/>
                <button type="button" onclick="submit()" class="btn btn-default">提交</button>
            </div>
        </div>

    </div>

<script>
    function submit(){
         var data={
             connect_user : $('#connect_user').val(),
             connect_number:$('#tel').val(),
             start_year:$('#start_year').val(),
             start_month:$('#start_month').val(),
             start_day:$('#start_day').val(),
             end_year:$('#end_year').val(),
             end_month:$('#end_month').val(),
             end_day:$('#end_day').val(),
             company_name:$('#company_name').val()
         };
       // console.dir(data);

        $.ajax({
            type:'POST',
            url:'',
         /*   data:{ x1 : $('#x1').attr('value'),
                y1:$('#y1').attr('value'),
                x2:$('#x2').attr('value'),
                y2:$('#y2').attr('value'),
                imgData:$('#preview').attr('src')
            },*/
            data:data,
            success:'',
            dataType:'json'
        });
    }
</script>
@endsection


