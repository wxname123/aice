<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//
//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//    //'goodsInfo/[:id]' => ['Home/Goods/goodsInfo',['method' => 'get', 'ext' => 'html'],'cache'=>3600]
//    //Home/Goods/goodsInfo/id/104.html
//];
use think\Route;
// 注册路由到index模块的News控制器的read操作
//Route::get('goodsInfo/:id','api/goods/goodsInfo',['cache'=>['Home/Goods/goodsInfo',300]]);// 访问方式 http://www.tpshop2.0.com/goodsInfo/77.html

Route::post('api/:version/user/regist','api/:version.User/regist');// 访问方式 http://www.tpshop2.0.com/goodsInfo/77.html
Route::post('api/:version/user/login','api/:version.User/login');
Route::post('api/:version/user/password/reset','api/:version.User/reset');
Route::post('api/:version/user/:user_id/uploadimg','api/:version.User/uploadimg');
Route::get('api/:version/ad/getadlist','api/:version.Ad/getadlist');
Route::get('api/:version/ad/getad','api/:version.Ad/getad');   //获取启动页广告



//短信验证码接口还没有写  post




// http://www.tpshop2.0.com/home/goods/goodsInfo/id/77.html



