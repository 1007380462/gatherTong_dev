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



}