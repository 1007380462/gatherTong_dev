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
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Log;
use Mews\Captcha\Facades\Captcha;
use Qiniu\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Torann\GeoIP\GeoIPFacade as GeoIP;
use App\Lib\CurlUtil;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * web first page
     *
     */
    public function getIndex()
    {
       /* Log::emergency($error);     //紧急状况，比如系统挂掉
        Log::alert($error);     //需要立即采取行动的问题，比如整站宕掉，数据库异常等，这种状况应该通过短信提醒
        Log::critical($error);     //严重问题，比如：应用组件无效，意料之外的异常
        Log::error($error);     //运行时错误，不需要立即处理但需要被记录和监控
        Log::warning($error);    //警告但不是错误，比如使用了被废弃的API
        Log::notice($error);     //普通但值得注意的事件
        Log::info($error);     //感兴趣的事件，比如登录、退出
        Log::debug($error);     //详细的调试信息*/

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

    /**
     * 测试旧车置换的推送
     */
    public function getPush()
    {
        $userId=144;
        $resource=1;
        if ($resource==1) { //推送一辆车
          //  $url='http://test.o2obest.cn:8051/api/appManage/push';
            $url='http://api.yiliangche.cn/api/appManage/push';
        }
        if ($resource == 2) {
          //  $url='http://115.28.63.41:8038/api/push/PushMes';
        }
        $timestamp=time();
        //使用post方式进行远程的url访问
        $verify=md5($timestamp.$userId.'3FEA65A048B1F1FAEB28510A6B67F330');
        $arr=array(
            'data'=>array(
                'userId'=>$userId,
                'timestamp'=>$timestamp,
                'from'=>'8',
                'title'=>'sadsd',
                'message'=>'asdsdfsfdas',
                'url'=>'dsdsdsddssd',
                'verify'=>$verify
            )
        );
        $result=CurlUtil::postRequest($url,$arr);
        var_dump($result);
    }


}