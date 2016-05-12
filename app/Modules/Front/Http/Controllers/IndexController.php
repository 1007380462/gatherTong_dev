<?php
namespace App\Modules\Front\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: wmr
 * Date: 2016/4/28
 * Time: 10:36
 */
use App\Http\Controllers\Controller;
use App\User;
use Mews\Captcha\Facades\Captcha;
use Qiniu\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Torann\GeoIP\GeoIPFacade as GeoIP;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * web first page
     *
     */
    public function getIndex()
    {
        //return Captcha::create('default');//创建验证码
     //   QrCode::generate('make me into a QrCode',public_path().'/qrcode.svg');
        $location = GeoIP::getLocation('202.108.22.103');//getLocation的参数可有可无。
       /* array(
            "ip"           => "232.223.11.11",
            "isoCode"      => "US",
            "country"      => "United States",
            "city"         => "New Haven",
            "state"        => "CT",
            "postal_code"  => "06510",
            "lat"          => 41.28,
            "lon"          => -72.88,
            "timezone"     => "America/New_York",
            "continent"    => "NA",
            "default"      => false
        );*/
        $ip = $location['ip'];
        $city = $location['city'];
        $lat = $location['lat'];
        $lon = $location['lon'];
        return view('front.index');
    }

    /**
     *excel列表的导出；
     */
    public function getReplacementDownload()
    {
        $filename = '旧车置换-' . date('Y-m-d H:i:s');
        $list = User::select('created_at','name')->orderBy('id', 'desc')->paginate(2)->toArray();
        $data = $list['data'];
        foreach($data as $k=>$v){
            $city=$v['city'];
            $data[$k]['city']=CityUtil::getNameByCode($city);
        }
        Excel::create($filename, function ($excel) use ($data) {
            $arr = [['录入时间','姓名']];
            $data = array_merge($arr, $data);
            $excel->sheet('Sheetname', function ($sheet) use ($data) {
                $sheet->fromArray($data, null, 'A1', false, false);
            });
        })->download('xls');
    }

    /**
     * 生成验证码
     */
    public function getCaptcha(){
        return Captcha::create('default');
    }

    /**
     * 验证
     */
    public function postCheckCaptcha(Request $request){
        $cpt=$request->input('cpt');
        //$bool=Captcha::check($cpt);
        $bool=true;
        if(empty($bool)){
            var_dump('the result of check captcha is fail');
        }
        var_dump('the result of check captcha is success');
    }

}