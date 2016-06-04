@section('clipPicture-one')
    <script type="text/javascript">
        $(function(){
            $('#cropbox').Jcrop({
                aspectRatio: 1,
                onSelect: updateCoords
            });
        });
        function updateCoords(c)
        {
            $('#x').val(c.x);
            $('#y').val(c.y);
            $('#w').val(c.w);
            $('#h').val(c.h);
        };

        function checkCoords()
        {
            if (parseInt($('#w').val())) return true;
            alert('Please select a crop region then press submit.');
            return false;
        };
    </script>

    <style type="text/css">
        #target {
            background-color: #ccc;
            width: 500px;
            height: 330px;
            font-size: 24px;
            display: block;
        }
    </style>

    <div class="row">
        <div class="span12">
            <div class="jc-demo-box">
                @endsection

                @section('clipPicture-two')
                        <!-- This is the form that our event handler fills -->
                {{-- <form action="clip-picture" method="post" onsubmit="return checkCoords();">--}}
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input hidden id="clipPicture" type="button" value="剪切" class="btn btn-large btn-inverse" />
                <button onclick="putData()" id="clipPicture"  type="button" value="剪切" class="btn btn-large bth-inverse">剪切</button>
                {{--</form>--}}
            </div>
        </div>
    </div>
@endsection


@section('clipPicture-js-function')
    <script>
        function putData(){
            $.ajax({
                type: 'POST',
                url: '/front/organization/clip-picture',
                data: { x : $('#x').attr('value'),
                    y:$('#y').attr('value'),
                    w:$('#w').attr('value'),
                    h:$('#h').attr('value') },
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

@section('clipPicture-js')
    <script src="{{URL::asset('/')}}js/jquery.js"></script>
    <script src="{{URL::asset('/')}}js/jquery.Jcrop.js"></script>
@endsection


@section('clipPicture-css')
    <link rel="stylesheet" href="{{URL::asset('/')}}css/jquery.Jcrop.css">
@endsection