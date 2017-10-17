<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:41:"./template/pc/rainbow/user\visit_log.html";i:1507883317;s:38:"./template/pc/rainbow/user\header.html";i:1507883317;s:36:"./template/pc/rainbow/user\menu.html";i:1507883317;s:40:"./template/pc/rainbow/public\footer.html";i:1507883317;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的足迹</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/myaccount.css" />
		<script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bg-f5">
		<script src="__PUBLIC__/js/global.js" type="text/javascript"></script>
<link rel="stylesheet" href="__STATIC__/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
<script src="__PUBLIC__/static/js/layer/layer.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="__STATIC__/css/base.css"/>
<style>
	.list1 li{float:left;}
</style>
<div class="tpshop-tm-hander home-index-top p">
	<div class="top-hander clearfix">
		<div class="w1224 pr clearfix">
			<div class="fl">
			    <?php if(strtolower(ACTION_NAME) != 'goodsinfo'): ?>
                      <link rel="stylesheet" href="__STATIC__/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
                      <div class="sendaddress pr fl">
                          <span>送货至：</span>
                          <!-- <span>深圳<i class="share-a_a1"></i></span>-->
                          <span>
                              <ul class="list1">
                                  <li class="summary-stock though-line">
                                      <div class="dd" style="border-right:0px;width:200px;">
                                          <div class="store-selector add_cj_p">
                                              <div class="text"><div></div><b></b></div>
                                              <div onclick="$(this).parent().removeClass('hover')" class="close"></div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </span>
                      </div>
                      <script src="__STATIC__/js/location.js"></script>
                <?php endif; ?>
				<div class="fl nologin">
					<a class="red" href="<?php echo U('Home/user/login'); ?>">登录</a>
					<a href="<?php echo U('Home/user/reg'); ?>">注册</a>
				</div>
				<div class="fl islogin hide">
					<a class="red userinfo" href="<?php echo U('Home/user/index'); ?>"></a>
					<a  href="<?php echo U('Home/user/logout'); ?>"  title="退出" target="_self">安全退出</a>
				</div>
			</div>
			<ul class="top-ri-header fr clearfix">
				<li><a target="_blank" href="<?php echo U('Home/Order/order_list'); ?>">我的订单</a></li>
				<li class="spacer"></li>
				<li><a target="_blank" href="<?php echo U('Home/User/visit_log'); ?>">我的浏览</a></li>
				<li class="spacer"></li>
				<li><a target="_blank" href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
				<li class="spacer"></li>
			</ul>
		</div>
	</div>
</div>
<div class="nav-middan-z p home-index-head">
	<div class="header w1224">
		<div class="ecsc-logo">
			<a href="/" class="logo"> <img src="__STATIC__/images/logo2.png"></a>
		</div>
		<div class="m-index">
			<a href="<?php echo U('Home/User/index'); ?>" class="index">我的商城</a>
			<a href="/" class="home">返回商城首页</a>
		</div>
		<div class="m-navitems">
			<ul class="fixed p">
				<li><a href="<?php echo U('Home/Index/index'); ?>">首页</a></li>
				<li>
					<div class="u-dl">
						<div class="u-dt">
							<span>账户设置</span>
							<i></i>
						</div>
						<div class="u-dd">
							<a href="<?php echo U('Home/User/info'); ?>">个人信息</a>
							<!--<a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a>-->
							<a href="<?php echo U('Home/User/address_list'); ?>">收货地址</a>
						</div>
					</div>
				</li>
				<li class="u-msg"><a class="J-umsg" href="<?php echo U('Home/User/message_notice'); ?>">消息<span><?php if($user_message_count > 0): ?><?php echo $user_message_count; endif; ?></span></a></li>
				<li class="search_li">
				   <form id="sourch_form" id="sourch_form" method="post" action="<?php echo U('Home/Goods/search'); ?>">
		           	<input class="search_usercenter_text" name="q" id="q" type="text" value="<?php echo \think\Request::instance()->param('q'); ?>"/>
		           	<a class="search_usercenter_btn" href="javascript:;" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();">搜索</a>
		           </form>
		        </li>
			</ul>
		</div>
		<div class="u-g-cart fr" id="hd-my-cart">
			<a href="<?php echo U('Home/Cart/index'); ?>">
			<div class="c-n fl">
				<i class="share-shopcar-index"></i>
				<span>我的购物车</span>
				<em class="shop-nums" id="cart_quantity"></em>
			</div>
			</a>
			<div class="u-fn-cart" id="show_minicart">
				<div class="minicartContent" id="minicart">
				</div>
			</div>
		</div>
	</div>
</div>
<script src="__STATIC__/js/common.js"></script>
<!--------收货地址，物流运费-开始-------------->
<script src="__STATIC__/js/location.js"></script>
<!--------收货地址，物流运费--结束-------------->


        <div class="home-index-middle">
            <div class="w1224">
                <div class="g-crumbs">
                    <a href="<?php echo U('Home/User/index'); ?>">我的商城</a>
                    <i class="litt-xyb"></i>
                    <span>我的足迹</span>
                </div>
                <div class="home-main">
                    <div class="le-menu fl">
	<div class="menu-ul">
		<ul>
			<li class="ma"><i class="account-acc1"></i>交易中心</li>
			<li><a href="<?php echo U('Home/Order/order_list'); ?>">我的订单</a></li>
			<!--<li><a href="">我的预售</a></li>-->
			<li><a href="<?php echo U('Home/Order/comment'); ?>">我的评价</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc2"></i>资产中心</li>
			<li><a href="<?php echo U('Home/User/coupon'); ?>">我的优惠券</a></li>
			<li><a href="<?php echo U('Home/User/recharge'); ?>">账户余额</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc3"></i>关注中心</li>
			<li><a href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
			<li><a href="<?php echo U('Home/User/visit_log'); ?>">我的足迹</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc4"></i>个人中心</li>
			<li><a href="<?php echo U('Home/User/info'); ?>">个人信息</a></li>
			<li><a href="<?php echo U('Home/User/address_list'); ?>">地址管理</a></li>
			<li><a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc5"></i>服务中心</li>
			<li><a href="<?php echo U('Home/Order/return_goods_list'); ?>">退货管理</a></li>
			<li><a href="<?php echo U('Home/User/message_notice'); ?>">消息通知</a></li>
		</ul>
	</div>
</div>
                    <div class="ri-menu fr">
                        <div class="menumain p">
                            <div class="goodpiece">
                                <h1>我的足迹</h1>
                                <!--<a href=""><span class="co_blue">帮助</span></a>-->
                            </div>
                            <div class="foot-print p">
                                <ul>
                                    <li <?php if(\think\Request::instance()->param('cat_id') == ''): ?>class="red"<?php endif; ?>>
                                    <a href="<?php echo U('User/visit_log'); ?>">全部（<?php echo $visit_total; ?>）</a>
                                    </li>
                                    <?php if(is_array($catids) || $catids instanceof \think\Collection || $catids instanceof \think\Paginator): if( count($catids)==0 ) : echo "" ;else: foreach($catids as $key=>$vv): ?>
                                        <li <?php if(\think\Request::instance()->param('cat_id') == $vv[cat_id]): ?>class="red"<?php endif; ?>>
                                        <a href="<?php echo U('User/visit_log',array('cat_id'=>$vv[cat_id])); ?>" ><?php echo $vv['name']; ?>（<?php echo $vv['csum']; ?>）</a>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <!--<span class="moanmo_b"><a href="">更多<i class="mm_b"></i></a></span>-->
                            </div>
                            <div class="perinc_pri p">
                                <div class="near_threet">
                                    以下是你最近30天的商品浏览记录
                                </div>
                                <div class="dxchoi">
                                    <!--<a href="<?php echo U('User/visit_log',array('cat_id'=>$vv[cat_id] ,'prom_type'=>3)); ?>" >-->
                                        <!--<input type="checkbox" name="" id="cx" value=""/><label for="cx">仅显示促销</label>-->
                                    <!--</a>-->
                                    <!--<input type="checkbox" name="" id="jj" value=""/><label for="jj">仅显示降价</label>-->
                                    <!--<a href="javascript:void(0);">清空</a>-->
                                </div>
                            </div>
                            <div class="feetprin p ma-to-20">
                                <div class="shop-list-splb m-prod-list">
                                    <!--足迹 -s-->
                                    <?php if(is_array($visit_log) || $visit_log instanceof \think\Collection || $visit_log instanceof \think\Paginator): if( count($visit_log)==0 ) : echo "" ;else: foreach($visit_log as $key2=>$vo): ?>
                                        <div class="u-title">
                                            <i class="<?php if($key == 0): ?>gray_ryh<?php endif; ?>"></i>
                                            <span class="z-date"><?php echo $key2; ?></span>
                                            <span class="z-time"><?php echo date('Y-m-d',$vo[0][visittime]); ?></span>
										<span class="z-del">
											<a class="J-delHistory" style="display:none" href="javascript:;" type="2" text="2016-12-13">删除</a>
										</span>
                                        </div>
                                        <ul>
                                            <!--商品-s-->
                                            <?php if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                                                <li>
                                                    <div class="s_xsall">
                                                        <div class="xs_img">
                                                            <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$vv['goods_id'])); ?>">
                                                                <img src="<?php echo goods_thum_images($vv['goods_id'],230,230); ?>" style="display: inline;"></a></div>
                                                        <div class="shop_name2">
                                                            <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$vv['goods_id'])); ?>">
                                                                <?php echo $vv['goods_name']; ?>
                                                            </a>
                                                        </div>
                                                        <div class="price-tag">
                                                            <span class="now"><em class="li_xfo">￥</em><em><?php echo $vv['shop_price']; ?></em></span>
                                                            <!--<span class="old"><em>￥</em><em>200</em></span>-->
                                                        </div>
                                                    </div>
                                                    <div class="dele" onclick="del_visit(<?php echo $vv['visit_id']; ?>)"></div>
                                                </li>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <!--商品-e-->
                                        </ul>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <!--足迹 -e-->
                                </div>
                            </div>
                            <p class="end_cord" style="display: none;">已到最后，只保存最近30天的记录</p>
                            <div class="page p">
                               <?php echo $page; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!--footer-s-->
        <div class="footer p">
            <div class="tpshop-service">
	<ul class="w1224 clearfix">
		<li>
			<i class="ico ico-day7"></i>
			<p class="service">7天无理由退货</p>
		</li>
		<li>
			<i class="ico ico-day15"></i>
			<p class="service">15天免费换货</p>
		</li>
		<li>
			<i class="ico ico-quality"></i>
			<p class="service">正品行货 品质保障</p>
		</li>
		<li>
			<i class="ico ico-service"></i>
			<p class="service">专业售后服务</p>
		</li>
	</ul>
</div>
<div class="footer">
	<div class="w1224 clearfix">
		<div class="left-help-list clearfix">
		<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2 limit 5");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id = 2 limit 5"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
			<dl>
				<dt><?php echo $v[cat_name]; ?></dt>
				<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1 limit 5");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1 limit 5"); 
                                    S("sql_".$md5_key,$sql_result_v2,86400);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
				<dd><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a></dd>
				<?php endforeach; ?>
			</dl>
		<?php endforeach; ?>	
		</div>
		<div class="right-contact-us">
			<h3 class="title">联系我们</h3>
			<span class="phone"><?php echo $tpshop_config['shop_info_phone']; ?></span>
			<p class="tips">周一至周日8:00-18:00<br />(仅收市话费)</p>
			<div class="qr-code-list clearfix">
				<a class="qr-code" href="javascript:;"><img class="w-100" src="__STATIC__/images/qrcode.png" alt="" /></a>
				<a class="qr-code qr-code-tpshop" href="javascript:;"><img class="w-100" src="__STATIC__/images/qrcode.png" alt="" /></a>
			</div>
		</div>
	</div>
</div>
        </div>
		<!--footer-e-->
		<script type="text/javascript">
			$(function(){
				$('.foot-print ul li').click(function(){
					$(this).addClass('red').siblings().removeClass('red');
				})
			})
			
			function del_visit(visit_id){
				$.ajax({
					url: "/index.php?m=home&c=user&a=del_visit_log",
					type:'post',
					data:{visit_id:visit_id},
					dataType:'json',
					success:function(res){
						if(res.status == 1){
							layer.msg(res.msg, {icon: 1, time: 1000}); 
							window.location.reload()
						}else{
							layer.msg(res.msg, {icon: 2, time: 1000});
						}
					}
				})
			}
		</script>
	</body>
</html>