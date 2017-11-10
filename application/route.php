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
Route::get('api/:version/user/:user_id/getuserinfo','api/:version.User/getUserInfo');    //获取用户信息接口
Route::put('api/:version/user/:user_id/updatesex','api/:version.User/updateSex');    //修改用户性别

Route::post('api/:version/user/:user_id/uploadimg','api/:version.User/uploadimg');
Route::get('api/:version/ad/getadlist','api/:version.Ad/getadlist');
Route::get('api/:version/ad/getad','api/:version.Ad/getad');   //获取启动页广告
Route::get('api/:version/order/getnews','api/:version.Order/getnews');   //获取最新快报接口
Route::get('api/:version/good/gethots','api/:version.Good/gethots');   //获取热门推荐接口
Route::get('api/:version/good/:good_id/getdetails','api/:version.Good/getdetails');   //获取商品详情接口
Route::get('api/:version/attr/:good_id/getattr','api/:version.Attr/getattr');   //获取商品属性接口

Route::get('api/:version/region/getlist','api/:version.Region/getRegionList');   //获取地区列表
Route::get('api/:version/version/:type/checkversion','api/:version.Version/checkVersion');   //版本检测接口

//汽车列表  接口
Route::get('api/:version/category/gettopcategory','api/:version.Category/getTopCategory');   //获取汽车整车顶级分类接口
Route::get('api/:version/category/:cat_id/getgoodlist','api/:version.Category/getCatGoodsList');   //获取汽车整车顶级分类接口
Route::get('api/:version/category/:cat_id/getgoodlist','api/:version.Category/getCatGoodsList');   //获取汽车整车顶级分类接口
Route::get('api/:version/good/getrecomlist','api/:version.Good/getRecomList');   //获取精品推荐列表接口
Route::get('api/:version/brand/getbrandlist','api/:version.Brand/getBrandList');   //查询所有品牌列表接口
Route::get('api/:version/good/:brand_id/getbrandgoods','api/:version.Good/getbrandgoods');   //查询某个品牌下所有的商品列表

//任务接口
Route::get('api/:version/task/:user_id/gettasklist','api/:version.Task/getTaskList');   //查询任务列表
Route::get('api/:version/user/:user_id/task/:task_id/getdetail','api/:version.Task/getDetail');   //查询任务详情


Route::get('api/:version/order/:user_id/getlist','api/:version.Order/getOrderList');   //获取用户订单列表接口
Route::get('api/:version/order/:rec_id/getorderdetail','api/:version.Order/getOrderDetail');   //查询订单详情接口
Route::post('api/:version/user/:user_id/good/:good_id/order/submitorder','api/:version.Order/submitOrder');   //提交订单接口



//短信验证码接口还没有写  post




// http://www.tpshop2.0.com/home/goods/goodsInfo/id/77.html



