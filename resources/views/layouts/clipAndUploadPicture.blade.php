@section('clipAndUploadPicture-css')
    <link href="{{URL::asset('/')}}css/clipAndUploadPicture-main.css" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/')}}css/jquery.Jcrop.css" rel="stylesheet" type="text/css" />
@endsection

@section('clipAndUploadPicture-js')
    <script src="{{URL::asset('/')}}js/jquery.js"></script>
    <script src="{{URL::asset('/')}}js/jquery.Jcrop.js"></script>
    <script src="{{URL::asset('/')}}js/script.js"></script>
@endsection

@section('clipAndUploadPicture')
{{--<div class="demo" >
    <div class="bbody">--}}
        <!-- upload form -->
        {{--<form id="upload_form" enctype="multipart/form-data" method="post" action="clip-picture" onsubmit="return checkForm()">--}}
            <!-- hidden crop params -->
            <input type="hidden" id="x1" name="x1" />
            <input type="hidden" id="y1" name="y1" />
            <input type="hidden" id="x2" name="x2" />
            <input type="hidden" id="y2" name="y2" />

           {{-- <h2>Step1: Please select image file</h2>--}}
            <div><input type="file"  name="image_file" id="image_file" onchange="fileSelectHandler()" />
            </div>

            <div class="error"></div>

            <div class="step2">
                {{--<h2>Step2: Please select a crop region</h2>--}}
                <img id="preview" />
              {{--  <div class="info">
                    <label>File size</label> <input type="text" id="filesize" name="filesize" />
                    <label>Type</label> <input type="text" id="filetype" name="filetype" />
                    <label>Image dimension</label> <input type="text" id="filedim" name="filedim" />
                    <label>W</label> <input type="text" id="w" name="w" />
                    <label>H</label> <input type="text" id="h" name="h" />
                </div>--}}
                <input hidden type="submit" value="Upload" />
                <button type="button" onclick="clipAndUploadPicture()">上传</button>
            </div>
       {{-- </form>--}}
{{--    </div>
</div>--}}
@endsection

@section('clipAndUploadPicture-js-function')
    <script>
        function clipAndUploadPicture(){
            $.ajax({
                type: 'POST',
                url: '/front/organization/clip-picture',
                data: { x1 : $('#x1').attr('value'),
                    y1:$('#y1').attr('value'),
                    x2:$('#x2').attr('value'),
                    y2:$('#y2').attr('value'),
                    imgData:$('#preview').attr('src')
                },
                dataType: 'json',
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

@section('clipAndUploadPicture-img')
    <img src="{{URL::asset('/')}}upload/img/1464858690.0437.jpeg" id="clipAndUploadPicture-img" />
    @endsection