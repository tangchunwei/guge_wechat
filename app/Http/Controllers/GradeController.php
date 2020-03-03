<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    //TODO 显示查询界面
    public function index(){
        return view('wechat.grade');
    }
    //TODO 成绩查询
    public function search(){
        return view('wechat.show_grade');
    }
}
