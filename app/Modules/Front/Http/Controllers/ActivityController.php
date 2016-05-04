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
use Guzzle\Http\Message\Request;

class ActivityController extends Controller{

    /**
     *活动首页
     */
    public function getShowActivity(){
        return view('front.activityList');
    }

    /**
     * @param Request $request
     * 处理无限分页
     */
    public function postActivityList(Request $request){
        //$number=$request->input('number');
        $list = Activity::order('id','desc')
            ->paginate(10);
         return $list;

    }
}