{{--上传单张图片--}}
@section('uploadSinglePicture')
        <div class="container kv-main">

            <form enctype="multipart/form-data">
                <input id="file-0a" class="file" type="file" multiple data-min-file-count="1">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>

        {{--    <hr>
            <form enctype="multipart/form-data">
                <label>Test invalid input type</label>
                <input id="file-0b" class="file" type="text" multiple data-min-file-count="1">
                <script>
                    $(document).on('ready', function(){$("#file-0b").fileinput();});
                </script>
            </form>
            <hr>
            <form enctype="multipart/form-data">
                <input id="file-0a" class="file" type="file" multiple data-min-file-count="3">
                <hr>
                <div class="form-group">
                    <input id="file-0b" class="file" type="file">
                </div>
                <hr>
                <div class="form-group">
                    <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                </div>
                <hr>
                <div class="form-group">
                    <input id="file-2" type="file" class="file" readonly data-show-upload="false">
                </div>
                <hr>
                <div class="form-group">
                    <label>Preview File Icon</label>
                    <input id="file-3" type="file" multiple=true>
                </div>
                <hr>
                <div class="form-group">
                    <input id="file-4" type="file" class="file" data-upload-url="#">
                </div>
                <hr>
                <div class="form-group">
                    <button class="btn btn-warning" type="button">Disable Test</button>
                    <button class="btn btn-info" type="reset">Refresh Test</button>
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-default" type="reset">Reset</button>
                </div>
                <hr>
                <div class="form-group">
                    <input type="file" class="file" id="test-upload" multiple>
                    <div id="errorBlock" class="help-block"></div>
                </div>
                <hr>
                <div class="form-group">
                    <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#" data-preview-file-icon="">
                </div>
            </form>--}}
        </div>
    </div>

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
    {{--<link href="{{URL::asset('/')}}css/uploadSinglePicture/fileinput.css?version=01" rel='stylesheet' type='text/css'>--}}
    <link href="{{URL::asset('/')}}css/uploadSinglePicture/normalize.css?version=01" rel='stylesheet' type='text/css'>
    @endsection
@section('uploadSinglePicture-js')
    <script src="{{URL::asset('/')}}js/uploadSinglePicture/fileinput.js?version=01"></script>
    <script src="{{URL::asset('/')}}js/uploadSinglePicture/fileinput_local_zh.js?version=01"></script>
    @endsection