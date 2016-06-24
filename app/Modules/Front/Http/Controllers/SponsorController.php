<?php
namespace App\Modules\Front\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/6/23
 * Time: 14:12
 */
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
class SponsorController extends Controller{
    public function getIndex(Request $request){

        return view('front.sponsor');
    }

    public function getPullSponsor(Request $request){
        return view('front.pullSponsor');
    }

    public function postHandlePullSponsor(Request $request){

    }

    public function getProvideSponsor(Request $request){
        return view('front.provideSponsor');
    }

    public function postHandleProvideSponsor(Request $request){

    }
 }