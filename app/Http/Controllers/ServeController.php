<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Factory;

class ServeController extends Controller
{
    public function serve(){
        $config=config('wechat.official_account.default');
        $app = Factory::officialAccount($config);
        // 消息处理中间件
        $app->server->push(function ($message) {
            return "您好！欢迎使用 鼓歌艺术查分系统";
        });
        
        $response = $app->server->serve();
        return $response;
    }
}
