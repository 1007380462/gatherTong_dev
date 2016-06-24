@section('avatar')
    <div class="form-group">
        <div for="lastname" class="col-md-1">头像</div>
    {{--<label for="lastname" class="col-sm-2 control-label">头像</label>--}}
    <div class="col-md-3">
        <div id="cropContainerModal">
            {{--下面默认是没有的，是js自动生成的 --}}
            <img style="background-color: red" class="croppedImg" height="200px" width="208" src="{{URL::asset('/')}}img/avatar/croppedImg.jpeg"></div>
     {{--   <div class="cropControls cropControlsUpload">
                <i class="cropControlUpload"></i>
                <i class="cropControlRemoveCroppedImage"></i>
        </div>
            <form class="cropContainerModal_imgUploadForm" style="visibility: hidden;">
                <input type="file" name="img" id="cropContainerModal_imgUploadField">
            </form>--}}
    </div>
        </div>

@endsection

@section('avatar-js-function')
    {{--<script src="{{URL::asset('/')}}js/avatar/jquery.mousewheel.min.js"></script>--}}
    <script src="{{URL::asset('/')}}js/avatar/croppic.js"></script>
    <script src="{{URL::asset('/')}}js/avatar/main.js"></script>

    <script>
        var croppicHeaderOptions = {
            //uploadUrl:'img_save_to_file.php',
            cropData: {
                "dummyData": 1,
                "dummyData2": "asdas"
            },
            cropUrl: '{{URL::asset('/')}}img/avatar/img_crop_to_file.php',
            customUploadButtonId: 'cropContainerHeaderButton',
            modal: false,
            processInline: true,
            loaderHtml: '<div class="loader bubblingG">' +
            '<span id="bubblingG_1"></span>' +
            '<span id="bubblingG_2"></span>' +
            '<span id="bubblingG_3"></span></div> ',
            onBeforeImgUpload: function () {
                console.log('onBeforeImgUpload')
            },
            onAfterImgUpload: function () {
                console.log('onAfterImgUpload')
            },
            onImgDrag: function () {
                console.log('onImgDrag')
            },
            onImgZoom: function () {
                console.log('onImgZoom')
            },
            onBeforeImgCrop: function () {
                console.log('onBeforeImgCrop')
            },
            onAfterImgCrop: function () {
                console.log('onAfterImgCrop')
            },
            onReset: function () {
                console.log('onReset')
            },
            onError: function (errormessage) {
                console.log('onError:' + errormessage)
            }
        }
        var croppic = new Croppic('croppic', croppicHeaderOptions);

        var croppicContainerModalOptions = {
            uploadUrl: '{{URL::asset('/')}}img/avatar/img_save_to_file.php',
            cropUrl: '{{URL::asset('/')}}img/avatar/img_crop_to_file.php',
            modal: true,
            imgEyecandyOpacity: 0.4,
            loaderHtml: '<div class="loader bubblingG">' +
            '<span id="bubblingG_1"></span>' +
            '<span id="bubblingG_2">' +
            '</span><span id="bubblingG_3">' +
            '</span></div> ',
            onBeforeImgUpload: function () {
                console.log('onBeforeImgUpload')
            },
            onAfterImgUpload: function () {
                console.log('onAfterImgUpload')
            },
            onImgDrag: function () {
                console.log('onImgDrag')
            },
            onImgZoom: function () {
                console.log('onImgZoom')
            },
            onBeforeImgCrop: function () {
                console.log('onBeforeImgCrop')
            },
            onAfterImgCrop: function () {
                console.log('onAfterImgCrop')
            },
            onReset: function () {
                console.log('onReset')
            },
            onError: function (errormessage) {
                console.log('onError:' + errormessage)
            }
        }

        var cropContainerModal = new Croppic('cropContainerModal', croppicContainerModalOptions);


        var croppicContaineroutputOptions = {
            uploadUrl: '{{URL::asset('/')}}img/avatar/img_save_to_file.php',
            cropUrl: '{{URL::asset('/')}}img/avatar/img_crop_to_file.php',
            outputUrlId: 'cropOutput',
            modal: false,
            loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span>' +
            '<span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
            onBeforeImgUpload: function () {
                console.log('onBeforeImgUpload')
            },
            onAfterImgUpload: function () {
                console.log('onAfterImgUpload')
            },
            onImgDrag: function () {
                console.log('onImgDrag')
            },
            onImgZoom: function () {
                console.log('onImgZoom')
            },
            onBeforeImgCrop: function () {
                console.log('onBeforeImgCrop')
            },
            onAfterImgCrop: function () {
                console.log('onAfterImgCrop')
            },
            onReset: function () {
                console.log('onReset')
            },
            onError: function (errormessage) {
                console.log('onError:' + errormessage)
            }
        }

        var cropContaineroutput = new Croppic('cropContaineroutput', croppicContaineroutputOptions);

        var croppicContainerEyecandyOptions = {
            uploadUrl: '{{URL::asset('/')}}img/avatar/img_save_to_file.php',
            cropUrl: '{{URL::asset('/')}}img/avatar/img_crop_to_file.php',
            imgEyecandy: false,
            loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span>' +
            '<span id="bubblingG_2"></span>' +
            '<span id="bubblingG_3"></span>' +
            '</div> ',
            onBeforeImgUpload: function () {
                console.log('onBeforeImgUpload')
            },
            onAfterImgUpload: function () {
                console.log('onAfterImgUpload')
            },
            onImgDrag: function () {
                console.log('onImgDrag')
            },
            onImgZoom: function () {
                console.log('onImgZoom')
            },
            onBeforeImgCrop: function () {
                console.log('onBeforeImgCrop')
            },
            onAfterImgCrop: function () {
                console.log('onAfterImgCrop')
            },
            onReset: function () {
                console.log('onReset')
            },
            onError: function (errormessage) {
                console.log('onError:' + errormessage)
            }
        }

        var cropContainerEyecandy = new Croppic('cropContainerEyecandy', croppicContainerEyecandyOptions);

        var croppicContaineroutputMinimal = {
            uploadUrl: '{{URL::asset('/')}}img/avatar/img_save_to_file.php',
            cropUrl: '{{URL::asset('/')}}img/avatar/img_crop_to_file.php',
            modal: false,
            doubleZoomControls: false,
            rotateControls: false,
            loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span>' +
            '<span id="bubblingG_2"></span>' +
            '<span id="bubblingG_3"></span>' +
            '</div> ',
            onBeforeImgUpload: function () {
                console.log('onBeforeImgUpload')
            },
            onAfterImgUpload: function () {
                console.log('onAfterImgUpload')
            },
            onImgDrag: function () {
                console.log('onImgDrag')
            },
            onImgZoom: function () {
                console.log('onImgZoom')
            },
            onBeforeImgCrop: function () {
                console.log('onBeforeImgCrop')
            },
            onAfterImgCrop: function () {
                console.log('onAfterImgCrop')
            },
            onReset: function () {
                console.log('onReset')
            },
            onError: function (errormessage) {
                console.log('onError:' + errormessage)
            }
        }
        var cropContaineroutput = new Croppic('cropContainerMinimal', croppicContaineroutputMinimal);

        var croppicContainerPreloadOptions = {
            uploadUrl: '{{URL::asset('/')}}img/avatar/img_save_to_file.php',
            cropUrl: '{{URL::asset('/')}}img/avatar/img_crop_to_file.php',
            loadPicture: '{{URL::asset('/')}}img/avatar/night.jpg',
            enableMousescroll: true,
            loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span>' +
            '<span id="bubblingG_2"></span><span id="bubblingG_3"></span>' +
            '</div> ',
            onBeforeImgUpload: function () {
                console.log('onBeforeImgUpload')
            },
            onAfterImgUpload: function () {
                console.log('onAfterImgUpload')
            },
            onImgDrag: function () {
                console.log('onImgDrag')
            },
            onImgZoom: function () {
                console.log('onImgZoom')
            },
            onBeforeImgCrop: function () {
                console.log('onBeforeImgCrop')
            },
            onAfterImgCrop: function () {
                console.log('onAfterImgCrop')
            },
            onReset: function () {
                console.log('onReset')
            },
            onError: function (errormessage) {
                console.log('onError:' + errormessage)
            }
        }
        var cropContainerPreload = new Croppic('cropContainerPreload', croppicContainerPreloadOptions);


    </script>


@endsection

@section('avatar-css')
    <link href="{{URL::asset('/')}}css/avatar/main.css" rel="stylesheet">
    <link href="{{URL::asset('/')}}css/avatar/croppic.css" rel="stylesheet">
@endsection