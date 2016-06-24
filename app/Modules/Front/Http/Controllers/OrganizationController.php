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
        //增加权限控制
          $userInfo=array();
        return view('front.organizationSpace',$userInfo);
    }

    /**
     * 社团的列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getOrganizationList(Request $request){
        return view('front.organizationList');
    }

    /**
     * 创建社团
     *
     * @param Request $request
     */
    public function getCreateOrganization(Request $request){
        //增加权限控制
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


    /**
     * 处理上传的经过剪切的单张图片，用于头像
     *
     * @param Request $request
     */
    public function postClipPictureOld(Request $request){
        $img=$_POST['imgData'];
        imagejpeg($img,null,90);
        die;
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $targ_w = $targ_h = 150;
            $jpeg_quality = 90;

            $src =public_path() .'/upload/img/1464858690.0437.jpeg';
            $img_r = imagecreatefromjpeg($src);
            $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

            imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
                $targ_w,$targ_h,$_POST['w'],$_POST['h']);

            header('Content-type: image/jpeg');
            $destination = public_path() . '/upload/img/1212.jpeg';
            imagejpeg($dst_r,$destination,$jpeg_quality);
            $destination = public_path() . '/upload/img/1212.png';
            imagepng ($dst_r,$destination);
            $destination = public_path() . '/upload/img/1212.gif';
            imagegif($dst_r,$destination);
            //下面是将生成的图片直接显示正在页面上。
            //imagejpeg($dst_r,null,$jpeg_quality);
            exit;
        }

    }

    /**
     * 获取剪切图片，暂时没有用
     * @param Request $request
     * @return string
     */
    public function postClipPicture(Request $request){
        $img=$_POST['imgData'];
        $mtime=explode(' ',microtime());
        $startTime=$mtime[1]+$mtime[0];

        $destination_name = $startTime;//存储文件的命名。
        $destination = public_path() . '/upload/img' . '/' . $destination_name;//文件存储目录
        if(preg_match('/^(data:\s*image\/(\w+);base64,)/',$img,$result)){
            $type=$result[2];
            $new_file=$destination.'.'.$type;
            if(file_put_contents($new_file,base64_decode(str_replace($result[1],'',$img)))){
                return '{"result":true}';
            }else{
              return '{"result":false}';
            }
        }else{
            return '{"result":false}';
        }

        $x1=$_POST['x1'];
        $y1=$_POST['y1'];
        $x2=$_POST['x2'];
        $y2=$_POST['y2'];
        $src=$new_file;
            $targ_w = $targ_h = 150;
            $jpeg_quality = 90;
            $img_r = imagecreatefrompng($src);
            $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
            /*imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
                $targ_w,$targ_h,$_POST['w'],$_POST['h']);*/
            imagecopyresampled($dst_r,$img_r,0,0,$x1,$y1,$targ_w,$targ_h,$x2,$y2);
            header('Content-type: image/jpeg');
            $destination = public_path() . '/upload/img/1212.jpeg';
            imagejpeg($dst_r,$destination,$jpeg_quality);
            $destination = public_path() . '/upload/img/1212.png';
            imagepng ($dst_r,$destination);
            $destination = public_path() . '/upload/img/1212.gif';
            imagegif($dst_r,$destination);
            //下面是将生成的图片直接显示正在页面上。
            //imagejpeg($dst_r,null,$jpeg_quality);
            exit;
    }

    /**
     * 获取上传的图片
     * @param Request $request
     */
    public  function postUploadImgCommon(Request $request){
        return 'dsd';
       // var_dump($_FILES);die;
        $tmp_file = $_FILES['fileList']['tmp_name'];
        $img_type = $_FILES['fileList']['type'];
        $img_type = explode('/', $img_type);
        $img_type = $img_type[1];
        $mtime=explode(' ',microtime());
        $startTime=$mtime[1]+$mtime[0];
        $destination_name = $startTime. '.' . $img_type;//存储文件的命名。
        $destination = public_path() . '/upload/img' . '/' . $destination_name;//文件存储目录
        move_uploaded_file($tmp_file, $destination);
        //$_FILES["file"]["error"] - 由文件上传导致的错误代码
        $arr=array('pictureId'=>$destination_name);
        return $destination_name;
        return json_encode($arr);
    }
}