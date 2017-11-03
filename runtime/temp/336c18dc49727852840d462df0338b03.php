<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"./template/pc/rainbow/order\order_detail.html";i:1509620897;s:38:"./template/pc/rainbow/user\header.html";i:1509620884;s:40:"./template/pc/rainbow/public\footer.html";i:1507883317;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的账户-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/myaccount.css" />
    <link rel="shortcut  icon" type="image/x-icon" href="__STATIC__/images/favicon.ico" media="screen"  />
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
			    <!--<?php if(strtolower(ACTION_NAME) != 'goodsinfo'): ?>-->
                      <!--<link rel="stylesheet" href="__STATIC__/css/location.css" type="text/css">&lt;!&ndash; 收货地址，物流运费 &ndash;&gt;-->
                      <!--<div class="sendaddress pr fl">-->
                          <!--<span>送货至：</span>-->
                          <!--&lt;!&ndash; <span>深圳<i class="share-a_a1"></i></span>&ndash;&gt;-->
                          <!--<span>-->
                              <!--<ul class="list1">-->
                                  <!--<li class="summary-stock though-line">-->
                                      <!--<div class="dd" style="border-right:0px;width:200px;">-->
                                          <!--<div class="store-selector add_cj_p">-->
                                              <!--<div class="text"><div></div><b></b></div>-->
                                              <!--<div onclick="$(this).parent().removeClass('hover')" class="close"></div>-->
                                          <!--</div>-->
                                      <!--</div>-->
                                  <!--</li>-->
                              <!--</ul>-->
                          <!--</span>-->
                      <!--</div>-->
                      <!--<script src="__STATIC__/js/location.js"></script>-->
                <!--<?php endif; ?>-->
				<div class="fl nologin">
					<a class="red" href="<?php echo U('index.php/Home/user/login'); ?>">登录</a>
					<!--<a href="<?php echo U('Home/user/reg'); ?>">注册</a>-->
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
            <a href="<?php echo U('User/index'); ?>">我的商城</a><i class="litt-xyb"></i>
            <a href="<?php echo U('Order/order_list'); ?>">订单中心</a><i class="litt-xyb"></i>
            <span><b>订单：<?php echo $order_info['order_sn']; ?></b></span>
        </div>
        <div class="home-main">
            <div class="com-topyue">
                <div class="wacheng fl">
                    <p class="ddn1"><span>订单号：</span><span><?php echo $order_info['order_sn']; ?></span></p>
                    <?php if($order_info['order_prom_type'] == 4): ?>
                        <p class="ddn1"><span>订单类型：</span><span>预售订单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                        <?php if($order_info['pre_sell_is_finished'] == 2): ?>
                            <p class="ddn1"><span>关闭原因：</span><span>商家取消活动，返换订金</span></p>
                            <h3 style="font: 700 24px/34px 'Microsoft YaHei';color: #e4393c; padding-top:20px;">订单关闭</h3>
                        <?php endif; if($order_info['pre_sell_is_finished'] == 1): if(time() > $order_info['pre_sell_retainage_end']): ?>
                                <p class="ddn1"><span>关闭原因：</span><span>已过支付尾款时间</span></p>
                                <h3 style="font: 700 24px/34px 'Microsoft YaHei';color: #e4393c; padding-top:20px;">订单关闭</h3>
                            <?php endif; endif; endif; if($order_info['pay_btn'] == 1): ?>
                        <h3 style="font: 700 24px/34px 'Microsoft YaHei';color: #e4393c; padding-top:20px;">等待付款</h3>
                        <a class="ddn3" style="margin-top:20px;" href="<?php echo U('Home/Cart/cart4',array('order_id'=>$order_info[order_id])); ?>">立即付款</a>
                        <?php else: ?>
                        <h1 class="ddn2"><?php echo $order_info['order_status_desc']; ?></h1>
                        <!--<a class="ddn3" href="">评价</a>-->
                    <?php endif; if($order_info['receive_btn'] == 1): ?>
                        <a class="ddn3" style="margin-top:20px;" href="javascript:;" onclick="order_confirm(<?php echo $order_info['order_id']; ?>)">确认收货</a>
                    <?php endif; if($order_info['cancel_btn'] == 1): if($order_info[pay_status] == 0): ?>
                            <a class="ddn3" style="margin-top:10px;color:#666;" href="javascript:;" onclick="cancel_order(<?php echo $order_info['order_id']; ?>)">取消订单</a>
                        <?php else: ?>
                            <a class="consoorder ddn3" href="javascript:void(0);" data-url="<?php echo U('Home/Order/refund_order',array('order_id'=>$order_info[order_id])); ?>" onClick="refund_order(this)" >取消订单</a>
                        <?php endif; endif; if($order_info['order_prom_type'] == 4 AND $order_info['pay_status'] == 2 AND $order_info['pre_sell_is_finished'] == 1 AND (time() >= $order_info['pre_sell_retainage_start'] AND time() <= $order_info['pre_sell_retainage_end'])): ?>
                        <a class="ddn3" style="margin-top:20px;" href="<?php echo U('/Home/Cart/cart4',array('order_id'=>$order_info[order_id])); ?>'">支付尾款</a>
                    <?php endif; ?>

                    <p class="ddn4"><a href="<?php echo U('order_detail',array('id'=>$order_info[order_id],'act'=>'print')); ?>" target="_blank"><i class="y-comp6"></i>打印订单</a></p>
                </div>
                <div class="wacheng2 fr">
                    <p class="dd2n">感谢您在商城购物，欢迎您对本次交易及所购商品进行评价。</p>
                    <div class="liuchaar p">
                        <ul>
                            <li>
                                <div class="aloinfe">
                                    <i class="y-comp"></i>
                                    <div class="ddfon">
                                        <p>订单与身份认证</p>
                                        <p><?php echo date('Y-m-d',$order_info['add_time']); ?></p>
                                        <p><?php echo date('H:i:s',$order_info['add_time']); ?></p>
                                    </div>
                                </div>
                            </li>

                            <li><i class='y-comp91 <?php if($order_info[pay_time] == 0): ?>top322<?php endif; ?>'></i></li>

                            <li>
                                <div class="aloinfe fime1">
                                    <i class='y-comp2 <?php if($order_info[pay_time] == 0): ?>lef64<?php endif; ?>'></i>
                                    <div class="ddfon">
                                        <p>付款成功</p>
                                        <?php if($order_info[pay_time] > 0): ?>
                                            <p><?php echo date('Y-m-d H:i:s',$order_info['pay_time']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                            <!--<li><i class='y-comp91 <?php if($order_info[shipping_time] == 0): ?>top322<?php endif; ?>'></i></li>-->
                            <!--<li>-->
                                <!--<div class="aloinfe fime2">-->
                                    <!--<i class='y-comp3 <?php if($order_info[shipping_time] == 0): ?>lef64<?php endif; ?>'></i>-->
                                    <!--<div class="ddfon">-->
                                        <!--<p>卖家发货</p>-->
                                        <!--<?php if($order_info[shipping_time] > 0): ?>-->
                                            <!--<p><?php echo date('Y-m-d',$order_info['pay_time']); ?></p>-->
                                            <!--<p><?php echo date('H:i:s',$order_info['pay_time']); ?></p>-->
                                        <!--<?php endif; ?>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</li>-->
                            <li><i class='y-comp91 <?php if($order_info[shipping_time] == 0): ?>top322<?php endif; ?>'></i></li>
                            <li>
                                <div class="aloinfe fime3">
                                    <i class='y-comp4 <?php if($order_info[shipping_time] == 0): ?>lef64<?php endif; ?>'></i>
                                    <div class="ddfon">
                                        <p>提车成功</p>
                                        <?php if($order_info[shipping_time] > 0): ?>
                                            <p><?php echo date('Y-m-d H:i:s',$order_info['shipping_time']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                            <li><i class='y-comp91 <?php if($order_info[confirm_time] == 0): ?>top322<?php endif; ?>'></i></li>
                            <li>
                                <div class="aloinfe fime4">
                                    <i class='y-comp5 <?php if($order_info[confirm_time] == 0): ?>lef64<?php endif; ?>'></i>
                                    <div class="ddfon">
                                        <p>完成</p>
                                        <?php if($order_info[confirm_time] > 0): ?>
                                            <p><?php echo date('Y-m-d H:i:s',$order_info['confirm_time']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php if($order_info['shipping_status'] == 1): ?>
            <div class="home-main reseting ma-to-20">
                <div class="com-topyue">
                    <div class="wacheng fl">
                        <div class="shioeboixe">
                            <div class="sohstyle p">
                                <div class="odjpyes">
                                    <img src="__STATIC__/images/kuaidi-1.jpg"/>
                                </div>
                                <div class="osnhptek">
                                    <p><span>送货方式：</span><span><?php echo $order_info['shipping_name']; ?></span></p>
                                    <p><span>快递单号：</span><span><?php echo $order_info['invoice_no']; ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wacheng2 fr">
                        <div class="listchatu">
                            <ul id="express_info">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                queryExpress();
                function queryExpress()
                {
                    var shipping_code = "<?php echo $order_info['shipping_code']; ?>";
                    var invoice_no = "<?php echo $order_info['invoice_no']; ?>";
                    $.ajax({
                        type : "GET",
                        dataType: "json",
                        url:"/index.php?m=Home&c=Api&a=queryExpress&shipping_code="+shipping_code+"&invoice_no="+invoice_no,//+tab,
                        success: function(data){
                            var html = '';
                            if(data.status == 200){
                                $.each(data.data, function(i,n){
                                    if(i == 0){
                                        html += "<li class='first'><i class='node-icon'></i><span class='time'>"+n.time+"</span><span class='txt'>"+n.context+"</span></li>";
                                    }else{
                                        html += "<li><i class='node-icon'></i><span class='time'>"+n.time+"</span><span class='txt'>"+n.context+"</span></li>";
                                    }
                                });
                            }else{
                                html += "<li class='first'><i class='node-icon'></i><span class='txt'>"+data.message+"</span></li>";
                            }
                            $("#express_info").html(html);
                        }
                    });
                }
            </script>
        <?php endif; ?>
        <div class="home-main ma-to-20">
            <div class="rshrinfmas">
                <div class="spff">
                    <h2>收货人信息</h2>
                    <div class="psbaowq">
                        <p><span class="fircl">收货人：</span><span class="lascl"><?php echo $order_info['consignee']; ?></span></p>
                        <p><span class="fircl">提车门店：</span>
                            <span class="lascl"><?php echo $region_list[$order_info['province']]; ?>,<?php echo $region_list[$order_info['city']]; ?>,<?php echo $region_list[$order_info['district']]; ?>,<?php echo $order_info['address']; ?></span>
                        </p>
                        <p><span class="fircl">手机号码：</span><span class="lascl"><?php echo $order_info['mobile']; ?></span></p>
                    </div>
                </div>
                <div class="spff">
                    <h2>付款信息</h2>
                    <div class="psbaowq">
                        <p><span class="fircl">付款方式：</span><span class="lascl"><?php echo $order_info['pay_name']; ?></span></p>
                        <p><span class="fircl">付款时间：</span><span class="lascl"><?php if($order_info[pay_status] == 1 or $order_info[pay_status] == 2): ?><?php echo date('Y-m-d H:i:s',$order_info['pay_time']); else: ?>未支付<?php endif; ?></span></p>
                        <?php if($order_info['order_prom_type'] != 4): ?>
                            <p><span class="fircl">商品金额：</span><span class="lascl"><em>￥</em><?php echo $order_info['goods_price']; ?></span></p>
                        <?php endif; ?>
                        <p><span class="fircl">提车手续费：</span><span class="lascl"><em>￥</em>3000</span></p>
                        <p><span class="fircl">余额支付：</span><span class="lascl"><em>￥</em><?php echo $order_info['user_money']; ?></span></p>
                        <!-- 预售商品 start -->
                        <?php if($order_info['order_prom_type'] == 4 AND $order_info['paid_money'] > 0): if($order_info['pay_status'] == 1): ?>
                                <p><span class="fircl">已付尾款：</span><span class="lascl"><em>￥</em><?php echo $order_info['order_amount']; ?></span></p>
                            <?php endif; ?>
                            <tr>
                                <p><span class="fircl">已付订金：</span><span class="lascl"><em>￥</em><?php echo $order_info['paid_money']; ?></span></p>
                            </tr>
                            <tr>
                                <p><span class="fircl">发货时间：</span><span class="lascl"><em></em><?php echo $order_info['pre_sell_deliver_goods']; ?></span></p>
                            </tr>
                        <?php endif; ?>
                        <!-- 预售商品 end -->
                    </div>
                </div>
                <div class="spff mar0">
                    <h2>发票信息</h2>
                    <div class="psbaowq">
                        <p><span class="fircl">发票类型：</span><span class="lascl">普通发票</span></p>
                        <p><span class="fircl">发票抬头：</span><span class="lascl"><?php echo $order_info['invoice_title']; ?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="beenovercom">
            <div class="shoptist">
                <span><?php echo $tpshop_config['shop_info_store_name']; ?><a href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq']; ?>&Site=TPshop商城&Menu=yes" target="_blank"><i class="y-comp9"></i></a></span>
            </div>
            <div class="orderbook-list">
                <div class="book-tit">
                    <ul>
                        <li class="sx1">商品</li>
                        <li class="sx2">商品编号</li>
                        <li class="sx3">购买单价</li>
                        <li class="sx4">赠送积分</li>
                        <li class="sx5">商品数量</li>
                        <li class="sx6">操作</li>
                    </ul>
                </div>
            </div>
            <div class="order-alone-li">
                <?php if(is_array($order_info['goods_list']) || $order_info['goods_list'] instanceof \think\Collection || $order_info['goods_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order_info['goods_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
                    <table width="100%" border="" cellspacing="" cellpadding="">
                        <tr class="conten_or">
                            <td class="sx1">
                                <div class="shop-if-dif">
                                    <div class="shop-difimg">
                                        <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>"><img src="<?php echo goods_thum_images($goods['goods_id'],78,78); ?>"></a>
                                    </div>
                                    <div class="cebigeze">
                                        <div class="shop_name"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>"><?php echo $goods['goods_name']; ?></a></div>
                                        <p class="mayxl"><?php echo $goods['spec_key_name']; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="sx2"><?php echo $goods['goods_sn']; ?></td>
                            <td class="sx3"><span>￥</span><span><?php echo $goods['member_goods_price']; ?></span></td>
                            <td class="sx4">
                                <span><?php echo $goods['give_integral']; ?></span>
                            </td>
                            <td class="sx5">
                                <span><?php echo $goods['goods_num']; ?></span>
                            </td>
                            <td class="sx6">
                                <div class="twrbac">
                                    <?php if(($order_info['comment_btn'] == 1) and ($goods['is_comment'] == 0)): ?>
                                        <a href="<?php echo U('Home/Order/comment_list',array('order_id'=>$order_info['order_id'],'goods_id'=>$goods['goods_id'])); ?>">评价</a>
                                    <?php endif; if(($order_info[return_btn] == 1) and ($goods[is_send] < 2)): ?>
                                        <span>|</span>
                                        <a href="<?php echo U('Home/Order/return_goods',['rec_id'=>$goods[rec_id]]); ?>">申请售后</a>
                                    <?php endif; ?>
                                    <p>
                                        <a class="songobuy" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>">再次购买</a>
                                    </p>
                                    <?php if($goods[is_send] == 0): ?><a>未发货</a><?php endif; if($goods[is_send] == 1): ?><a>已发货</a><?php endif; if($goods[is_send] > 1): ?><a>已申请售后</a><?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="numzjsehe">
            <p><span class="sp_tutt">商品总额：</span><span class="smprice"><em>￥</em><?php echo $order_info['goods_price']; ?></span></p>
            <p><span class="sp_tutt">提车手续费：</span><span class="smprice"><em>￥</em>3000</span></p>
            <p><span class="sp_tutt">应付手续费：</span><span class="smprice red"><em>￥</em>3000</span></p>
        </div>
    </div>
</div>
<!--footer-s-->

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

<!--footer-e-->
<script>
    //未支付取消订单
    function cancel_order(id){
        layer.confirm("确定取消订单?",{
            btn:['确定','取消']
        },function(){
            location.href = "/index.php?m=Home&c=Order&a=cancel_order&id="+id;
        }, function(tmp){
            layer.close(tmp);
        })
    }
    //已支付取消订单
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
                        showErrorMsg(data.msg);
                        window.location.href = data.url;
                    }else{
                        showErrorMsg(data.msg);
                    }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                    showErrorMsg('网络失败，请刷新页面后重试');
                }
            })
        }, function(index){
            layer.close(index);
        });
    }
</script>
</body>
</html>