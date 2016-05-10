<?php
namespace App\Modules\Front\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: wmr
 * Date: 2016/4/28
 * Time: 10:36
 */
use App\Http\Controllers\Controller;
use Torann\GeoIP\GeoIPFacade;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * web first page
     *
     */
    public function getIndex()
    {

        $location = GeoIP::getLocation('232.223.11.11');
        var_dump($location);die;
        return view('front.index');
    }

}