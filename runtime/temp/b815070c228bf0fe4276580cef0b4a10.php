<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"./template/pc/rainbow/user\goods_collect.html";i:1507883317;s:38:"./template/pc/rainbow/user\header.html";i:1507883317;s:36:"./template/pc/rainbow/user\menu.html";i:1507883317;s:40:"./template/pc/rainbow/public\footer.html";i:1507883317;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的收藏</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/myaccount.css" />
		<script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="__PUBLIC__/js/layer/layer-min.js"></script>
		<script src="__PUBLIC__/js/pc_common.js"></script>
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
			       	<span>我的收藏</span>
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
								<h1>我的收藏</h1>
								<!--<a href=""><span class="co_blue">账户余额说明</span></a>-->
							</div>
							<div class="time-sala ma-to-20">
								<ul>
									<li class="<?php if($Thinl['get']['type'] != 2): ?>red<?php else: ?>mal-l<?php endif; ?>"><a href="<?php echo U('Home/User/goods_collect'); ?>">商品收藏</a></li>
									<!--<li class="<?php if($Thinl['get']['type'] == 2): ?>red<?php else: ?>mal-l<?php endif; ?>"><a href="<?php echo U('Home/User/goods_collect',array('type'=>2)); ?>">店铺收藏</a></li>-->
								</ul>
							</div>
							<div class="he"></div>
							<!--<div class="collec_list">-->
								<!--<ul>-->
									<!--<li class="bg-dar"><a href="javascript:void(0);">商品收藏</a></li>-->
									<!--<li><a href="javascript:void(0);">全部（2）</a></li>-->
									<!--<li><a href="javascript:void(0);">女装配饰（2）</a></li>-->
								<!--</ul>-->
								<!--<ul>-->
									<!--<li class="bg-dar"><a href="javascript:void(0);">活动商品</a></li>-->
									<!--<li><a href="javascript:void(0);">全部（2）</a></li>-->
								<!--</ul>-->
							<!--</div>-->
							<div class="orderbook-list sc_collect">
				    			<div class="book-tit">
				    				<ul>
				    					<li class="sx2">&nbsp;</li>
				    					<li class="sx1">商品</li>
				    					<li class="sx3">单价</li>
				    					<li class="sx4">库存</li>
				    					<li class="sx5">操作</li>
				    				</ul>
				    			</div>
				    		</div>
				    		<div class="sc_collect book-tit shop-listanadd">
								<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
									<ul>
										<li class="sx2"><input class="checkall_annt" type="checkbox" name="selected[]"  value="<?php echo $list['collect_id']; ?>"/>&nbsp;&nbsp;</li>
										<li class="sx1">
											<div class="shop-if-dif texle">
												<div class="shop-difimg">
													<img src="<?php echo goods_thum_images($list['goods_id'],400,400); ?>" width="100" height="100">
												</div>
												<div class="shop_name"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$list['goods_id'])); ?>"><?php echo $list['goods_name']; ?></a></div>
											</div>
										</li>
										<li class="sx3"><span><em>￥</em><?php echo $list['shop_price']; ?></span></li>
										<li class="sx4">
                                            <span>
                                             <?php if($list['is_on_sale'] == 0): ?>已下架
                                             <?php elseif($list['store_count'] == 0): ?>商品已售罄<?php else: ?>库存充足<?php endif; ?>
                                            </span>
                                        </li>
										<li class="sx5">
											<div class="adhscar">
												<a class="add_p_shop" onclick="AjaxAddCart(<?php echo $list[goods_id]; ?>,1,0);">加入购物车</a>
												<a class="dele_g" onclick="del_all(<?php echo $list[collect_id]; ?>)" href="javascript:">删除</a>
											</div>
										</li>
									</ul>
								<?php endforeach; endif; else: echo "" ;endif; if(empty($lists) || (($lists instanceof \think\Collection || $lists instanceof \think\Paginator ) && $lists->isEmpty())): ?>
									<p class="ncyekjl">--暂无记录--</p>
								<?php endif; ?>
				    		</div>
							<?php if(!(empty($lists) || (($lists instanceof \think\Collection || $lists instanceof \think\Paginator ) && $lists->isEmpty()))): ?>
							<div class="all_pluscar p">
			    				<!--<div class="sx2"><input class="checkall_annt" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" type="checkbox" id="all2" /><label for="all2">全选</label></div>-->
			    				<!--<div class="addcar_plus">-->
			    					<!--<a class="add_p_shop">加入购物车</a>-->
			    					<!--<a class="dele_p_shop" onclick="del_all();">删除</a>-->
			    				<!--</div>-->
								<div class="operating fixed" id="bottom">
									<div class="fn_page clearfix">
										<?php echo $page; ?>
									</div>
								</div>
			    			</div>
							<?php endif; ?>
						</div>
			    	</div>
			    </div>
			</div>
		</div>
		<!--footer-s-->
		<div class="footer p"><div class="tpshop-service">
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
</div> </div>
		<!--footer-e-->
		<script type="text/javascript">
			$(function(){
				$('.time-sala ul li').click(function(){
					$(this).addClass('red').siblings().removeClass('red');
				})
			})
			function del_all(del_ids)
			{
                //询问框
                layer.confirm('您确定要取消收藏', {
                    btn: ['确定','取消'] //按钮
                }, function(){
                    window.location.href='/index.php?m=Home&c=User&a=del_goods_collect&id='+del_ids;
                });

			}
		</script>
	</body>
</html>