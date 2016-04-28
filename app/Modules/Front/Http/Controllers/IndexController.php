<?php
namespace App\Modules\Front\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/4/28
 * Time: 10:36
 */
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * web first page
     *
     */
    public function getIndex()
    {
        return view('front.index');
    }

    /**
     * deal login
     */
    public function getLogin()
    {

    }

    /**
     * deal register
     */
    public function getRegister()
    {

    }

    /**
     * deal logout;
     */
    public function getLogout()
    {

    }

    /**
     * 显示organization
     */
    public function getOrganization()
    {

    }

    /**
     * 显示activity
     */
    public function getActivity()
    {

    }

}