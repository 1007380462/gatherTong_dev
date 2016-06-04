@section('uploadImg_common')
    <!-- 引用控制层插件样式 -->
    <link rel="stylesheet" href="{{URL::asset('/')}}css/zyUpload.css" type="text/css">
    <script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>
    <!-- 引用核心层插件 -->
    <script src="{{URL::asset('/')}}js/uploadImg_common/zyFile.js"></script>
    <!-- 引用控制层插件 -->
    <script src="{{URL::asset('/')}}js/uploadImg_common/zyUpload.js"></script>
    <!-- 引用初始化JS -->
    <script src="{{URL::asset('/')}}js/uploadImg_common/jq22.js"></script>

<div id="demo" class="demo"></div>
{{--用于获取后端传回的图片名称--}}
<input id="uploadImg_common" hidden value="">
@endsection
{{--没有必要时不要使用下面的ajax方法--}}
@section('uploadImg_common-js-function')
<script>
    function uploadImg_common(){
        $.ajax({
            type: 'POST',
            url: '/front/organization/upload-img-common',
            data: { 'img_data':$('#uploadImage_0').attr('src')
            },
           // dataType: 'json',
            /*    success: function(data){
             console.log(data.status);
             },
             error: function(xhr, type){
             alert('Ajax error!')
             }*/
        })
    }
</script>
@endsection