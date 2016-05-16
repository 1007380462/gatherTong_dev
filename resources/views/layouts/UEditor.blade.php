{{--加载百度编辑器--}}
@section('UEditor')
        <!-- 加载编辑器的容器 -->
<script id="container" name="content" type="text/plain">
</script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container', {
        toolbars: [[
            'undo', 'redo', '|', 'bold', 'italic', 'underline', '|', 'forecolor', '|', 'paragraph',
            'fontfamily', 'fontsize', '|', 'directionalityltr', 'directionalityrtl', '|', 'justifyleft',
            'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'simpleupload', 'insertimage', 'emotion', 'scrawl', 'map', 'insertcode', 'pagebreak', '|',
            'inserttable', 'deletetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol',
            'mergeright', 'mergedown', '|', 'preview',
        ]]
    });
    ue.ready(function () {
        /*ue.execCommand('serverparam', '_token', 'csrf_token()');*/
        //此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
        ue.execCommand('serverparam');
    });
</script>
    @endsection