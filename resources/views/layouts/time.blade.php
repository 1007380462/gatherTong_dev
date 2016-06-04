{{--精确到天_开始时间--}}
@section('time-day-start')
    <div class="col-md-6">
        <div style="padding-left: 0px" class="col-md-3"><select name="start_year" class="form-control"></select></div>
        <div class="col-md-3"><select name="start_month" class="form-control"></select></div>
        <div class="col-md-1"><select name="start_day" class="form-control"></select></div>
        {{--<div class="col-md-2"><select name="start_day" class="form-control col-md-2"></select></div>--}}
    </div>
        <script>
            //new YMDselect('year1','month1');
            //new YMDselect('year1','month1',1990);
            //new YMDselect('year1','month1',1990,2);
            //new YMDselect('year1','month1','day1');
            new YMDselect('start_year', 'start_month', 'start_day');
            //new YMDselect('year1','month1','day1',1990,2);
            //new YMDselect('year1','month1','day1',1990,2,10);
        </script>

    @endsection
@section('time-day-css')
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
    @endsection
@section('time-day-js')
    <script type="text/javascript" src="{{URL::asset('/')}}js/YMDClass.js?version=01"></script>
    @endsection

{{--精确到天_结束时间--}}
@section('time-day-end')
    <div class="col-md-6">
        <div style="padding-left: 0px" class="col-md-3"><select name="end_year" class="form-control" ></select></div>
        <div class="col-md-3"><select name="end_month"class="form-control" ></select></div>
        <div class="col-md-1"><select name="end_day" class="form-control"></select></div>
        <script>
            new YMDselect('end_year', 'end_month', 'end_day');
        </script>
    </div>
@endsection
    @section('time-day-css')
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
    @endsection
@section('time-day-js')
    <script type="text/javascript" src="{{URL::asset('/')}}js/YMDClass.js?version=01"></script>
@endsection

{{--精确到秒--}}
@section('time-second')

    <div class="demo2">
       <div class="col-md-1">时间</div>
        <div class="col-md-2">
        <input  placeholder="请输入日期" namr="time" class="laydate-icon form-control" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
        </div>
    </div>

  {{--  <div class="col-md-1">时间</div>
        <div class="col-md-2">
                <input class="form-control" name="time" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
        </div>--}}
    @endsection
@section('time-second-css')
@endsection
@section('time-second-js')
    <script type="text/javascript" src="{{URL::asset('/')}}js/time/laydate.js?version=01"></script>
@endsection