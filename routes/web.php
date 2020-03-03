<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/********初始化配置********/
// 服务端验证
Route::any('/wechat/serve', 'ServeController@serve');
// 创建菜单
Route::get('/wechat/menu', 'MenuController@greate');
/********成绩查询********/
// 显示界面
Route::get('/wechat/grade', 'GradeController@index');
// 显示查询结果
Route::get('/wechat/grade1', 'GradeController@search');
/********活动报名********/
// Route::get('/wechat/grade', 'GradeController@index');

