<?php
namespace App\Modules\Front\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/4/28
 * Time: 13:10
 */
use App\Http\Controllers\Controller;

use App\Models\Activity;
use Illuminate\Support\Facades\Request;
class ActivityController extends Controller{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 显示初始活动
     */
    public function getShowOrganizationActivity(){
         return view('front.activityList');
    }

    /**
     * 创建活动
     *
     * @param Request $request
     */
    public function getCreateActivity(Request $request){
        return view('front.activityCreate');
    }
    /**
     * 用于无限分页响应
     * @param Request $request
     */

    public function postShowActivity(Request $request){
        return 0;
    }
}