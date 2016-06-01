<?php

/**
 * Created by PhpStorm.
 * User: wmr1
 * Date: 2016/5/22
 * Time: 20:36
 */
class FirstTest extends TestCase
{
    public function testFirst(){
        $this->visit('/front/activity/show-activity')
            ->see('front/activity/dhow-activity');
    }

}