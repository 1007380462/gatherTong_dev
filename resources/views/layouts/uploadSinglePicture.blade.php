{{--上传单张图片--}}
@section('uploadSinglePicture')
        <div class="container kv-main">
                <input name="singlePicture" id="file-0a" class="file" type="file" multiple data-min-file-count="1">
                <br>
        </div>
   {{--     <script type="text/javascript">
            $(function()
            {
                $('#file-0a').click(function(){
                    $.getScript("{{URL::asset('/')}}js/uploadSinglePicture/fileinput.js?version=01");
                });
            });
        </script>--}}
        <script>
        $("#file-0").fileinput({
            'allowedFileExtensions' : ['jpg', 'png','gif'],
        });
        $("#file-1").fileinput({
            uploadUrl: '#', // you must set a valid URL here else you will get an error
            allowedFileExtensions : ['jpg', 'png','gif'],
            overwriteInitial: false,
            maxFileSize: 1000,
            maxFilesNum: 1,
            //allowedFileTypes: ['image', 'video', 'flash'],
            slugCallback: function(filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });

        $("#file-3").fileinput({
            showUpload: true,
            showCaption: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any",
            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
        });
        $("#file-4").fileinput({
            uploadExtraData: {kvId: '10'}
        });
        $(".btn-warning").on('click', function() {
            if ($('#file-4').attr('disabled')) {
                $('#file-4').fileinput('enable');
            } else {
                $('#file-4').fileinput('disable');
            }
        });

        $(".btn-info").on('click', function() {
            $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
        });
        $(document).ready(function() {
            $("#test-upload").fileinput({
                'showPreview' : false,
                'allowedFileExtensions' : ['jpg', 'png','gif'],
                'elErrorContainer': '#errorBlock'
            });
        });
    </script>
    @endsection


@section('uploadSinglePicture-css')
  {{--  <link href="{{URL::asset('/')}}css/uploadSinglePicture/default.css?version=01" rel='stylesheet' type='text/css'>--}}
    <link href="{{URL::asset('/')}}css/uploadSinglePicture/fileinput.css?version=01" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('/')}}css/uploadSinglePicture/normalize.css?version=01" rel='stylesheet' type='text/css'>
    @endsection

@section('uploadSinglePicture-js')
    <script src="{{URL::asset('/')}}js/uploadSinglePicture/fileinput.js?version=01"></script>
    <script src="{{URL::asset('/')}}js/uploadSinglePicture/fileinput_locale_zh.js?version=01"></script>
    @endsection

@section('uploadSinglePicture-js-initFileInput')
    <script>
        //初始化fileinput控件（第一次初始化）
        function initFileInput(ctrlName, uploadUrl) {
            var control = $('#' + ctrlName);
            control.fileinput({
                language: 'zh', //设置语言
                uploadUrl: uploadUrl, //上传的地址
                allowedFileExtensions : ['jpg', 'png','gif'],//接收的文件后缀
                showUpload: true, //是否显示上传按钮
                showCaption: true,//是否显示标题
                browseClass: "btn btn-primary", //按钮样式
                previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
            });
        }
    </script>
    @endsection
