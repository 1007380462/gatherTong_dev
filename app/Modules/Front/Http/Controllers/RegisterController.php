<?php
namespace App\Modules\Front\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/4/28
 * Time: 16:31
 */
use App\Http\Controllers\Controller;
class RegisterController extends Controller{

    /**
     * deal register
     */
    public function getRegister()
    {
        return view('front.register');
    }

}