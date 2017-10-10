<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:43:"./template/pc/rainbow/order\order_list.html";i:1506391063;s:38:"./template/pc/rainbow/user\header.html";i:1507538854;s:36:"./template/pc/rainbow/user\menu.html";i:1507625398;s:40:"./template/pc/rainbow/public\footer.html";i:1506391063;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的订单</title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/myaccount.css" />
    <script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="__PUBLIC__/js/layer/layer.js" type="text/javascript"></script>
    <script type="text/javascript" src="__ROOT__/public/static/js/layer/laydate/laydate.js"></script>
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
            <span>我的订单</span>
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
                    <div class="navitems2 p" id="navitems5">
                        <ul>
                            <li>
                                <a href="<?php echo U('Order/order_list'); ?>" class="<?php if(\think\Request::instance()->param('type') == ''): ?>selected<?php endif; ?>">全部订单</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Order/order_list',array('type'=>'WAITPAY')); ?>" class="<?php if(\think\Request::instance()->param('type') == 'WAITPAY'): ?>selected<?php endif; ?>">待付款</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Order/order_list',array('type'=>'WAITSEND')); ?>" class="<?php if(\think\Request::instance()->param('type') == 'WAITSEND'): ?>selected<?php endif; ?>">待发货</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Order/order_list',array('type'=>'WAITRECEIVE')); ?>" class="<?php if(\think\Request::instance()->param('type') == 'WAITRECEIVE'): ?>selected<?php endif; ?>">待收货</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Order/comment',array('status'=>'0')); ?>" class="<?php if(\think\Request::instance()->param('type') == 'WAITCCOMMENT'): ?>selected<?php endif; ?>">待评论</a>
                            </li>
                            <!--<li>-->
                            <!--<a href="javascript:void(0);" class="">预售订单</a>-->
                            <!--</li>-->
                        </ul>
                        <div class="wrap-line" <?php if(\think\Request::instance()->param('type') == 'WAITPAY'): ?>style="width: 130px; left: 140px;"<?php elseif(\think\Request::instance()->param('type') == 'WAITSEND'): ?>style="width: 130px; left: 270px;"<?php elseif(\think\Request::instance()->param('type') == 'WAITRECEIVE'): ?>style="width: 130px; left: 400px;"<?php else: ?>style="width: 130px; left: 10px;"<?php endif; ?> >
                        <span style="left:15px;"></span>
                    </div>
                </div>
                <div class="menu_search p">
                    <form id="search_order" action="<?php echo U('Order/order_list'); ?>" method="get">
                        <input class="sea_ol" type="text" name="search_key" id="search_key" value="<?php echo \think\Request::instance()->param('search_key'); ?>"  placeholder="商品名称，订单编号" />
                        <input class="sea_et" type="submit" value="查询" style="cursor: pointer;"/>
                    <!--    <span class="coice">
                            更多筛选条件
                            <i class="jt-x"></i>
                        </span>
                        <div class="time-qjc">
                            下单时间：<input id="start_time" name="start_time" value="" style="width:150px;padding:7px 10px;border:1px solid #ccc;outline: none;"/>
                            <span>至</span>
                            <input id="end_time" name="end_time" style="width:150px;padding:7px 10px;border:1px solid #ccc;outline: none;" />
                            <div class="nearl-zj">
                                <ul>
                                    <li><a onclick="time_for_one_month();">最近一个月</a></li>
                                    <li><a onclick="time_for_three_month();">最近三个月</a></li>
                                    <li><a onclick="time_for_one_year();">最近一年</a></li>
                                </ul>
                            </div>
                            <div class="mu-btn">
                                <a onclick="check_search_order();" href="jsvascript:">查询</a>
                            </div>
                        </div>-->
                    </form>
                </div>
                <div class="orderbook-list">
                    <div class="book-tit">
                        <ul>
                            <li class="sx1">商品信息</i></li>
                            <li class="sx2">单价</li>
                            <li class="sx3">数量</li>
                            <li class="sx4">支付总金额</li>
                            <li class="sx5 s5clic">订单状态<i class="jt-x"></i></li>
                            <li class="sx6">操作</li>
                        </ul>
                    </div>
                    <div class="hid-derei">
                        <ul>
                            <li><a href="<?php echo U('Order/order_list'); ?>">全部订单</a></li>
                            <li><a href="<?php echo U('Order/order_list',array('type'=>'WAITPAY')); ?>">待付款</a></li>
                            <li><a href="<?php echo U('Order/order_list',array('type'=>'WAITSEND')); ?>">待发货</a></li>
                            <li><a href="<?php echo U('Order/order_list',array('type'=>'WAITRECEIVE')); ?>">待收货</a></li>
                            <li><a href="<?php echo U('Order/comment',array('status'=>'0')); ?>">待评论</a></li>
                            <li><a href="<?php echo U('Order/order_list',array('type'=>'FINISH')); ?>">已完成</a></li>
				    		<li><a href="<?php echo U('Order/order_list',array('type'=>'CANCEL')); ?>">已取消</a></li>
                            <!--<li><a href="">预售订单</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="order-alone-li lastset_cm">
                    <?php if(empty($lists) || (($lists instanceof \think\Collection || $lists instanceof \think\Paginator ) && $lists->isEmpty())): ?>
                        <div class="car-none-pl">
                            <i class="account-acco1"></i>您还没有订单，<a href="/">快去逛逛吧~</a>
                        </div>
                        <?php else: if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                            <table width="100%" border="" cellspacing="" cellpadding="">
                                <tr class="time_or">
                                    <td colspan="6">
                                        <div class="fl_ttmm">
                                            <span class="time-num">下单时间：<em class="num"><?php echo date('Y-m-d H:i:s',$list['add_time']); ?></em></span>
                                            <span class="time-num">订单编号：<em class="num"><?php echo $list['order_sn']; ?></em></span>
                                            <!--<span class="time-num">卖家：<a href="tencent://message/?uin=<?php echo $store_list[$list[store_id]][store_qq]; ?>&Site=TPshop商城&Menu=yes"><em class="num"><?php echo $store_list[$list[store_id]][store_name]; ?><i class="ear"></i></em></a></span>-->
                                            <div class="paysoon">
                                                <?php if($list['pay_btn'] == 1): ?>
                                                    <a class="ps_lj" href="<?php echo U('Home/Cart/cart4',array('order_id'=>$list[order_id])); ?>"  target="_blank">立即支付</a>
                                                <?php endif; if($list['order_button'][cancel_info] == 1): ?>
                                                     <a class="consoorder" href="<?php echo U('Order/cancel_order_info',array('order_id'=>$list[order_id])); ?>">取消详情</a>
                                                <?php endif; if($list['receive_btn'] == 1): ?>
                                                    <a class="ps_lj" href="javascript:;" onclick="order_confirm(<?php echo $list['order_id']; ?>);">确认收货</a><?php endif; if($list['cancel_btn'] == 1): if($list[pay_status] == 0): ?>
                                                    <a class="consoorder" href="javascript:void(0);" onClick="cancel_order(<?php echo $list['order_id']; ?>)" >取消订单</a>
                                                <?php else: ?>
                                                	<a class="consoorder" href="javascript:void(0);" data-url="<?php echo U('Home/Order/refund_order',['order_id'=>$list['order_id']]); ?>" onClick="refund_order(this)" >取消订单</a>
                                                	<?php endif; else: ?>
                                                    <!--<div class="dele" onclick="verConfirm('确认删除该订单?','<?php echo U('Home/Order/del_order',array('order_id'=>$list['order_id'], 'type'=>\think\Request::instance()->param('type'))); ?>')"></div>-->
                                                <?php endif; ?>
                                                <!--<div class="dele"></div>-->
                                            </div>
                                        </div>
                                        <div class="fr_ttmm"></div>
                                    </td>
                                </tr>
                                <?php if(is_array($list['goods_list']) || $list['goods_list'] instanceof \think\Collection || $list['goods_list'] instanceof \think\Paginator): $k = 0; $__LIST__ = $list['goods_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($k % 2 );++$k;if($k == 1): ?>
                                        <tr class="conten_or">
                                            <td class="sx1">
                                                <div class="shop-if-dif">
                                                    <div class="shop-difimg">
                                                        <img src="<?php echo goods_thum_images($goods['goods_id'],60,60); ?>" width="60" height="60" />
                                                    </div>
                                                    <div class="shop_name"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>"><?php echo $goods['goods_name']; ?></a></div>
                                                </div>
                                            </td>
                                            <td class="sx2"><span>￥</span><span><?php echo $goods['member_goods_price']; ?></span></td>
                                            <td class="sx3">
                                                <span>x<?php echo $goods['goods_num']; ?></span>
                                                <?php if($goods[is_send] > 1): ?>
                                                    <a class="applyafts">已申请售后</a>
                            					<?php else: if(($list[return_btn] == 1) and ($list[shipping_status] == 1)): ?>
	                                                    <a href="<?php echo U('Home/Order/return_goods',array('rec_id'=>$goods['rec_id'])); ?>" class="applyafts">申请售后</a>
	                                                <?php endif; endif; ?>
                                            </td>
                                            <td class="sx4" rowspan="<?php echo count($list['goods_list']); ?>">
                                                <div class="pric_rhz">
                                                    <p class="d_pri"><span>￥</span><span><?php echo $list['order_amount']; ?></span></p>
                                                    <p class="d_yzo">
                                                        <spna>含运费：</spna>
                                                        <span><?php echo $list['shipping_price']; ?></span></p>
                                                    <p class="d_yzo"><a href="javascript:void(0);"><?php echo $list['pay_name']; ?></a></p>
                                                </div>
                                            </td>
                                            <td class="sx5" rowspan="<?php echo count($list['goods_list']); ?>">
                                                <div class="detail_or">
                                                    <p class="d_yzo">
                                                        <?php echo $list['order_status_desc']; ?>
                                                    </p>
                                                    <p>
                                                        <?php if($list[order_prom_type] == 5): ?>
                                                            <a href="<?php echo U('Order/virtual_order',array('order_id'=>$list['order_id'])); ?>">查看详情</a>
                                                        <?php else: ?>
                                                            <a href="<?php echo U('Order/order_detail',array('id'=>$list['order_id'])); ?>">查看详情</a>
                                                        <?php endif; ?>
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="sx6" rowspan="<?php echo count($list['goods_list']); ?>">
                                                <div class="rbac">
                                                    <p class=""><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>">再次购买</a></p>
                                                    <?php if(($list[comment_btn] == 1) and ($goods[is_comment] == 0)): ?>
                                                        <p class="inspect">
                                                            <a href="<?php echo U('Home/Order/comment',array('status'=>0)); ?>">评价</a>
                                                        </p>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php else: ?>
                                        <tr class="conten_or">
                                            <td class="sx1">
                                                <div class="shop-if-dif">
                                                    <div class="shop-difimg">
                                                        <img src="<?php echo goods_thum_images($goods['goods_id'],60,60); ?>" width="60" height="60"/>
                                                    </div>
                                                    <div class="shop_name"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>"><?php echo $goods['goods_name']; ?></a></div>
                                                </div>
                                            </td>
                                            <td class="sx2"><span>￥</span><span><?php echo $goods['member_goods_price']; ?></span></td>
                                            <td class="sx3">
                                                <span>x<?php echo $goods['goods_num']; ?></span>
                                                <?php if(($list[return_btn] == 1) and ($goods[is_send] < 2)): ?>
                                                    <a href="<?php echo U('Home/Order/return_goods',array('rec_id'=>$goods['rec_id'])); ?>" class="applyafts">申请售后</a>
                                                <?php endif; if($goods[is_send] > 1): ?>
                                                    <a class="applyafts">已申请售后</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </table>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
            </div>
            <div class="operating fixed" id="bottom">
                <div class="fn_page clearfix">
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
        $('.s5clic').click(function(){
            $('.hid-derei').slideToggle(400);
            $(this).animate({opacity:"1"},200,function(){
                $(this).toggleClass('sxbb')
            })
        })
    })
    //取消订单
    function cancel_order(id){
        layer.confirm('确定取消订单?', {
                    btn: ['确定','取消'] //按钮
                }, function(){
                    // 确定
                    location.href = "/index.php?m=Home&c=Order&a=cancel_order&id="+id;
                }, function(index){
                    layer.close(index);
                }
        );
    }

    function jump()
    {
        var max_page = "<?php echo $page_array['total_page']; ?>";
        var jump_page = $('#jump_page').val();
        if(jump_page>0 && jump_page<=max_page){
            location.href = "<?php echo urldecode(U('Home/Order/order_list',$get_no_p,''));?>"+"/p/"+$('#jump_page').val();
        }else{
            layer.alert('请输入正确的页数', {icon: 2});
        }
    }
    //确定收货
    function order_confirm(order_id){
        layer.confirm("你确定收到货了吗?",{
            btn:['确定','取消']
        },function(){
            $.ajax({
                type : 'post',
                url : '/index.php?m=Home&c=Order&a=order_confirm&order_id='+order_id,
                dataType : 'json',
                success : function(data){
                    if(data.status == 1){
                        window.location.href = data.url;
                    }else{
                        layer.open({content:data.msg,time:2});
                        verify();
                    }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                    layer.alert('网络失败，请刷新页面后重试', {icon: 2});
                }
            })
        }, function(index){
            layer.close(index);
        });
    }
    
	function refund_order(obj){
		layer.open({
			type: 2,
			title: '<b>订单取消申请</b>',
			skin: 'layui-layer-rim',
			shadeClose: true,
			shade: 0.5,
			area: ['600px', '500px'],
			content: $(obj).attr('data-url'),
		});
	}
</script>
</body>
</html>