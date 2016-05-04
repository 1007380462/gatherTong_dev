<?php
namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/4/29
 * Time: 13:20
 */
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
class SendMailController extends Controller{



    /**
     * 数据的验证
     * @return array
     */
    public function rule(){
        return [
            'email'=>'email|min:3',
            'message'=>'min:1',
        ];
    }

    /**
     * 接受邮件发送请求
     *
     * @param Request $request
     */
    public function getSendMail(Request $request){
        $this->validate($request,$this->rule());
        $email=$request->input('email');
        $message=$request->input('message');
        SendMailController::sendEmail($email,$message);
    }


    /**
     * 内部调用进行邮件的发送
     * @param $from
     * @param $to string|array
     * @param $data
     */
    public static function sendEmail($from ,$to,$data){
          //还没有处理完毕
        Mail::send('emails.reminder',
            ['user'=>$user],function($m){
                $m->to($user->email,$user->name)->subject($message);
            });

    }

    /**
     * 内部发送私信，可以群发
     * @param $from
     * @param $to string|array
     * @param $data
     */
    public static  function sendPrivateInfo($from=null,$to,$data){

    }

    /**
     * 发送公告
     * @param null $from
     * @param $to string|array
     * @param $data
     */
    public static function sendAnnounce($from=null,$to,$data){

    }

}
