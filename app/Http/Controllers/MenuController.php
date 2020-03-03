<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Factory;

class MenuController extends Controller
{
    //创建菜单
    public function greate(){
        $buttons = [
            [
                "type" => "click",
                "name" => "成绩查询",
                "key"  => "GRADE_SEARCH"
            ],
            [
                "type" => "view",
                "name" => "我要报名",
                "url"  => "http://182.254.228.218/signup"
            ],
        ];
        $config=config('wechat.official_account.default');
        $app = Factory::officialAccount($config);
        $result=$app->menu->create($buttons);
        dd($result);
    }
}
