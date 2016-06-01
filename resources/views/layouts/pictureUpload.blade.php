@section('pictureUpload')
    <div id="wrapper" class="">
        <div id="container" class="col-lg-offset-2 col-md-6">
            <div id="uploader">
                <div class="queueList">
                    <div id="dndArea" class="placeholder">
                        <div id="filePicker"></div>
                    </div>
                </div>
                <div class="statusBar" style="display:none;">
                    <div class="progress">
                        <span class="text">0%</span>
                        <span class="percentage"></span>
                    </div><div class="info"></div>
                    <div class="btns">
                        <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pictureUpload-js')
    {{--需要jquery1.8--}}
    <script type="text/javascript" src="{{URL::asset('/')}}js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('/')}}js/pictureUpload/js/webuploader.js"></script>
    <script type="text/javascript" src="{{URL::asset('/')}}js/pictureUpload/js/upload.js"></script>
@endsection

@section('pictureUpload-css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/')}}js/pictureUpload/css/webuploader.css" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/')}}css/pictureUpload/css/style.css" />
@endsection