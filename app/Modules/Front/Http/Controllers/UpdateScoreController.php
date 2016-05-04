<?php
namespace App\Modules\Front\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/4/29
 * Time: 15:26
 */
use App\Http\Controllers\Controller;

/*
 * 对用户的打分分为两部分
 * 1.是访问过程中进行。
 * 2.对于耗时和对数据库操作比较大的操作进行定时任务处理。
 * 对每个登录用户的行为进行打分操作，
 * 用户的升级，转正受其影响
 */
class UpdateScoreController extends Controller{

    /**
     * 根据操作判断接下来的操作
     * @param $userId string
     * @param $operator array
     */
    public function  Judge($userId,$operator=array()){
              $result = $this->JudgeOperator($userId,$operator);
              if(!empty($result)){
                  $this->UpdateUser($userId,$result);
              }else{

              }
    }

    /**
     * 根据用户的当前信息修改用户的信息
     * @param $userId
     * @param $result
     */
    public function UpdateUser($userId,$result){

    }

    /**
     * 匹配用户操作
     * @param $userId
     * @param array $operator
     */
    public function JudgeOperator($userId,$operator=array()){

    }
    /**
     * 给用户加分
     * @param $userId
     * @param $score
     */
    public function AddScore($userId,$score=null){

    }

    /**
     * 给用户减分
     * @param $userId
     * @param $score
     */
    public function ReduceScore($userId,$score=null){

    }

}