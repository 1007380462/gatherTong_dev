<?php
namespace App\Modules\Front\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/4/28
 * Time: 15:48
 */
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;

class LoginController extends Controller{

    /**
     * deal login
     */
    public function getLogin()
    { 
      echo "sdsd";
         return view('front.login');
    }

    /**
     * deal logout;
     */
    public function getLogout()
    {
        //delete session information

       return redirect()->to('front/index');
    }

    public function getThirdLogin(Request $request){
    return view('front.thirdLogin');
    }
    /**
     *use it to get jpg picture for loginBack.
     */
    public function getImg($id){
           //获得public根目录下的assets子目录下的一些东西。
        $path=public_path()."/assets/img/backgrounds/".$id.".jpg";
        $image = file_get_contents($path);  //假设当前文件夹已有图片001.jpg
        header('Content-type: image/jpg');
        echo $image;
    }


}
