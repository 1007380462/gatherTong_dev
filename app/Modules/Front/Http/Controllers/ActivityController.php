<?php
namespace App\Modules\Front\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/4/28
 * Time: 13:10
 */
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class ActivityController extends Controller{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 显示初始活动
     */
    public function getShowActivity(){
         return view('front.activityList');
    }

    /**
     * 用于无限分页响应
     * @param Request $request
     */
    public function postShowActivity(Request $request){
        return 0;
    }
}