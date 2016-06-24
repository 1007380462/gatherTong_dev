<?php
namespace App\Modules\Front\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class PlatformActivityController extends Controller{

    public function getIndex(Request $request){
        return view('front.platformActivity');
    }
}