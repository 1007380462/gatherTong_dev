<?php
namespace App\Modules\Front\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/4/28
 * Time: 13:11
 * deal organization
 */
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class OrganizationController extends Controller{

    /**
     * 进入organization
     */
    public function getOrganizationSpace(Request $request)
    {

        return view('front.organization');
    }

    /**
     * 社团的列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getOrganizationList(Request $request){

        return view('front.organization');
    }

    /**
     * 创建社团
     *
     * @param Request $request
     */
    public function getCreateOrganization(Request $request){
        return view('front.organizationCreate');
    }

    /**
     * 编辑社团信息
     *
     * @param Request $request
     */
    public function editOrganization(Request $request){

    }

    /**
     * 处理上传的单张图片
     *
     * @param Request $request
     */
    public function postSinglePicture(Request $request){
        $tmp_file = $_FILES['singlePicture']['tmp_name'];
        $img_type = $_FILES['singlePicture']['type'];
        $img_type = explode('/', $img_type);
        $img_type = $img_type[1];
        $mtime=explode(' ',microtime());
        $startTime=$mtime[1]+$mtime[0];
        $destination_name = $startTime. '.' . $img_type;//存储文件的命名。
        $destination = public_path() . '/upload/img' . '/' . $destination_name;//文件存储目录
        move_uploaded_file($tmp_file, $destination);
        //$_FILES["file"]["error"] - 由文件上传导致的错误代码
        $arr=array('pictureId'=>$destination_name);
        return json_encode($arr);
    }

}