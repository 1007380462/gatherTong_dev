@section('navigation-left')

    <ul id="nav_box" class="nav nav-tabs nav-stacked" >
        <li>
            <a href="{{ url('seller/seller-info') }}" style="background-color: #f2efe3" class="clickB collapsed">首页</a>
        </li>
        <li>
            <a href="#systemSetting" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">商品</a>
            <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                <li><a href="{{ url('good/good-info') }}">商品列表</a></li>
                <li><a href="{{ url('good/good-stockout') }}">缺货商品</a></li>
                <li><a href="{{ url('good/good-classify') }}">商品分类</a></li>
                <li><a href="{{ url('good/good-type') }}">商品类型</a></li>
                <li><a href="{{ url('good/good-brand') }}">商品品牌</a></li>
            </ul>
        </li>

        <li>
            <a href="#systemSetting1" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">订单</a>
            <ul id="systemSetting1" class="nav nav-list collapse secondmenu" style="height: 0px;">
                <li><a href="{{ url('order/order-info') }}">订单列表</a></li>
                <li><a href="{{ url('order/relation-order') }}">关联订单列表</a></li>
                <li><a href="{{ url('order/order-delivery') }}">发货单</a></li>
                <li><a href="{{ url('order/reship') }}">退货单</a></li>
                <li><a href="{{ url('order/payment') }}">收款单</a></li>
                <li><a href="{{ url('order/refunds') }}">退款单</a></li>

            </ul>
        </li>

        <li>
            <a href="#systemSetting2" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">商户</a>
            <ul id="systemSetting2" class="nav nav-list collapse secondmenu" style="height: 0px;">
                <li><a href="{{ url('seller/seller-info') }}">商户列表</a></li>
            </ul>
        </li>
    </ul>
    @endsection
@section('navigation-style')
<style type="text/css">
    body{margin:0;padding:0;overflow-x:hidden;}
    html, body{height:100%;}
    img{border:none;}
    *{font-family:'微软雅黑';font-size:12px;color:#626262;}
    dl,dt,dd{display:block;margin:0;}
    a{text-decoration:none;}
    #bg{background-image:url(../images/content/dotted.png);}
    .container{width:100%;height:100%;margin:auto;}

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
    @endsection
@section('navigation-js')
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
    @endsection
{{--左边导航栏--}}
{{--  <div class="leftsidebar_box">
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

  </div>--}}
{{--简单的左侧导航栏--}}
{{-- <ul id="nav_box" class="nav nav-tabs nav-stacked" >
     <li>
         <a href="{{ url('seller/seller-info') }}" style="background-color: #f2efe3" class="clickB collapsed">首页</a>
     </li>
     <li>
         <a href="#systemSetting" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">商品</a>
         <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
             <li><a href="{{ url('good/good-info') }}">商品列表</a></li>
             <li><a href="{{ url('good/good-stockout') }}">缺货商品</a></li>
             <li><a href="{{ url('good/good-classify') }}">商品分类</a></li>
             <li><a href="{{ url('good/good-type') }}">商品类型</a></li>
             <li><a href="{{ url('good/good-brand') }}">商品品牌</a></li>
         </ul>
     </li>

     <li>
         <a href="#systemSetting1" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">订单</a>
         <ul id="systemSetting1" class="nav nav-list collapse secondmenu" style="height: 0px;">
             <li><a href="{{ url('order/order-info') }}">订单列表</a></li>
             <li><a href="{{ url('order/relation-order') }}">关联订单列表</a></li>
             <li><a href="{{ url('order/order-delivery') }}">发货单</a></li>
             <li><a href="{{ url('order/reship') }}">退货单</a></li>
             <li><a href="{{ url('order/payment') }}">收款单</a></li>
             <li><a href="{{ url('order/refunds') }}">退款单</a></li>

         </ul>
     </li>

     <li>
         <a href="#systemSetting2" style="background-color: #f2efe3" class="nav-header collapsed clickB" data-toggle="collapse">商户</a>
         <ul id="systemSetting2" class="nav nav-list collapse secondmenu" style="height: 0px;">
             <li><a href="{{ url('seller/seller-info') }}">商户列表</a></li>
         </ul>
     </li>
 </ul>--}}