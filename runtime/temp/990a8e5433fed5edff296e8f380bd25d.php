<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:37:"./template/pc/rainbow/cart\cart2.html";i:1509701029;s:45:"./template/pc/rainbow/public\sign-header.html";i:1509676922;s:40:"./template/pc/rainbow/public\footer.html";i:1507883317;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>"/>
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>"/>
    <script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/base.css"/>
    <script src="__PUBLIC__/js/global.js"></script>
    <script src="__PUBLIC__/js/pc_common.js"></script>
    <script src="__PUBLIC__/js/layer/layer.js"></script>
    <link href="__STATIC__/css/common.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="__STATIC__/css/jh.css">
</head>
<body>
<div class="m-top-bar editable" moduleid="1539923" style="position:relative;min-height:25px;">
    <div class="container">
        <ul class="fl">
            <div class="ls-dlzc fl nologin">
                <a href="<?php echo U('Home/user/login'); ?>">Hi,请登录</a>
            </div>
            <div class="ls-dlzc fl islogin">
                <a class="red userinfo" href="<?php echo U('Home/user/index'); ?>"></a>
                <a href="<?php echo U('Home/user/logout'); ?>">退出</a>
            </div>
            <script>
                $(function (){
                    var uname = getCookie('uname');
                    if (uname == '') {
                        $('.islogin').remove();
                        $('.nologin').show();
                    } else {
                        $('.nologin').remove();
                        $('.islogin').show();
                        $('.userinfo').html(decodeURIComponent(uname).substring(0,5));
                    }
                })

            </script>
            <li class="fl sep"></li>
        </ul>
        <ul class="fr bar-right">
            <li class="fl dropdown my-feiniu"><a class="menu-item" target="_blank" href="<?php echo U('/Home/User/index'); ?>">
                <span>商城</span><i class="dd"></i></a>
                <ul class="sub-panel">
                    <li><a class="J_chgurl" target="_blank" href="<?php echo U('Home/Order/order_list'); ?>">我的订单</a></li>
                    <li><a class="J_chgurl" target="_blank" href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏夹</a></li>
                </ul>
            </li>
            <li class="fl sep"></li>
        </ul>
    </div>
</div>
<div class="fn-cart-confirm">
    <!-- cart-title -->
    <div class="wrapper1190">
        <div class="order-header">
            <div class="layout after">
                <div class="fl">
                    <div class="logo pa-to-36 wi345">
                        <a href="/"><img src="__PUBLIC__/images/newLogo.png" alt=""></a>
                    </div>
                </div>
                <div class="fr">
                    <div class="pa-to-36 progress-area">
                        <div class="progress-area-wd" style="display:none">我的购物车</div>
                        <div class="progress-area-tx">填写核对订单信息</div>
                        <div class="progress-area-cg" style="display:none">成功提交订单</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cart-title -->
        <!-- end收货信息 -->
        <form name="cart2_form" id="cart2_form" method="post">
            <div class="layout be-table fo-fa ma-bo-45">
                <div class="con-info">
                    <div class="con-y-info ma-bo-35">
                        <!--<h3>收货人信息<b>[<a href="javascript:void(0);" onClick="add_edit_address(0);">使用新地址</a>]</b></h3>-->
                        <div id="ajax_address"><!--ajax 返回收货地址--></div>
                        <!--<h3 style="margin-top:30px">自提点</h3>-->
                        <div id="ajax_pickup"><!--ajax 返回自提点--></div>
                    </div>
                </div>
                <div class="sc-area">
                    <div class="dt-order-area">
                        <div class="order-pro-list">
                            <!--商品列表-->
                                <div class="order-pro-list">
                                    <div class="yxspy">
                                        <div class="hv"><?php echo $v[store_name]; ?></div>
                                        <div class="bv">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th class="tr-pro">商品</th>
                                                    <th class="tr-price">单价（元）</th>
                                                    <//if condition="($user[discount] neq 1)">
                                                        <!--<th class="tr-price">会员折扣价</th>-->
                                                        <th class="tr-price"></th>
                                                    <///if>
                                                    <th class="tr-quantity">数量</th>
                                                    <th class="tr-subtotal">小计（元）</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="leiliste">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                            <?php if(is_array($cartList) || $cartList instanceof \think\Collection || $cartList instanceof \think\Paginator): if( count($cartList)==0 ) : echo "" ;else: foreach($cartList as $k=>$v2): if($v2[selected] == '1'): ?>
                                                    <tr>
                                                        <td class="tr-pro">
                                                            <ul class="pro-area-2">
                                                                <li>
                                                                    <a title="<?php echo $v2['goods_name']; ?>" target="_blank" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$v2[goods_id])); ?>" seed="item-name"><?php echo $v2['goods_name']; ?></a><?php echo $v2['spec_key_name']; ?>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <!-- 预付订金商品的价格为空 -->
                                                        <td class="tr-price te-al">¥<?php echo $v2['goods_price']; ?></td>
                                                        <!--<//if condition="($user[discount] neq 1)">-->
                                                            <!--<td class="tr-price te-al">¥<?php echo $v2['member_goods_price']; ?></td>-->
                                                            <td class="tr-price te-al"></td>
                                                        <!--<///if>-->
                                                        <td class="tr-quantity te-al"><?php echo $v2['goods_num']; ?></td>
                                                        <td rowspan="1" class="tr-subtotal te-al">
                                                            <p><b>￥<?php echo $v2['goods_fee']; ?></b></p>
                                                        </td>
                                                    </tr>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br/>
                            <!--商品列表 end-->
                        </div>
                    </div>
                    <div class="order-action-area te-al-ri">
                        <div class="woypdbe sc-acti-list">
                            <!--<span class="p-subtotal-price">应付总额：<b>¥<span class="vab" id="payableTotal">2276.00</span></b></span>-->
                            <a class="Sub-orders gwc-qjs" href="javascript:void(0);" onClick="submit_order();"><span>提交订单</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- 提示切换省份 -->
<div id="changeProvince" style="display: none;">
    <div class="mask mask-cs-05 mask-4">
        <div class="mk-title">
            <h3>温馨提示</h3>
            <i data-x="1" class="mask-close-x changeAddrX"></i></div>
        <div class="mk-adc">
            <div class="cs-01"> 您目前所在的省份为<strong>上海</strong>，选择<strong>安徽省</strong>的收货地址后，您购买的商品及价格将发生变化。</div>
            <div class="cs-03">
                <button class="btn btn-red confirmChangeCity">切换省份</button>
                <button class="btn mask-close-x changeAddrX" data-x="1">取消</button>
            </div>
        </div>
    </div>
</div>
<!-- end 提示切换省份 -->
<!-- 提示配送商品 -->
<div id="sorryTipLayer" style="display:none;">
    <div class="tipLayerCont">
        <p class="tip">对不起，以下商品暂时无法送达至<b>江苏省</b><b>无锡市</b><b>锡山区</b></p>

        <div class="tipLayerList">
            <div class="listHead"><span class="name">商品名称</span> <span class="spec">规格</span> <span class="num">数量</span> <span class="price">金额</span></div>
            <div class="listCont"></div>
        </div>
    </div>
</div>
<!-- end 提示配送商品 -->
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
    /**
     * 留言字数限制
     * tea ：要限制数字的class名
     * nums ：允许输入的最大值
     * zero ：输入时改变数值的ID
     */
    function checkfilltextarea(tea,nums){
        var len = $(tea).val().length;
        if(len > nums){
            $(tea).val($(tea).val().substring(0,nums));
        }
        var num = nums - len;
        num <= 0 ? $("#zero").text(0): $("#zero").text(num);  //防止出现负数
    }


    function wield(obj){
        if($.trim($(obj).prev().val()) !=''){
            layer.msg('正在计算金额...',{icon:1});
            ajax_order_price(); // 计算订单价钱
        }
    }

    // 添加修改收货地址回调函数
    function call_back_fun(v) {
        layer.closeAll(); // 关闭窗口
//        ajax_address(); // 刷新收货地址
    }

    // 删除收货地址
    function del_address(id) {
        layer.confirm('确定要删除吗？', {
                    btn: ['确定','取消'] //按钮
                }, function(index){
					layer.close(index);
                    // 确定
                    $.ajax({
                        url: "/index.php?m=Home&c=User&a=del_address&id=" + id,
                        success: function (data) {
//                            ajax_address(); // 刷新收货地址
                            $('#ajax_pickup .order-address-list').removeClass('address_current');
							
                        }
                    });
                    layer.closeAll(); // 关闭窗口
                }, function(index){
                    layer.close(index);
                }
        );
    }


    // 切换收货地址
    function swidth_address(obj) {
        var province_id = $(obj).attr('data-province-id');
        var city_id = $(obj).attr('data-city-id');
        var district_id = $(obj).attr('data-district-id');
        if (typeof($(obj).attr('data-province-id')) != 'undefined') {
            ajax_pickup(province_id,city_id,district_id,0);
        }
        $(".order-address-list").removeClass('address_current');
        $(obj).parent().parent().parent().parent().parent().addClass('address_current');
        ajax_order_price(); // 计算订单价格
    }
    /**
     * 获取用户自提点和推荐自提点
     * @param type 1：用户自提点 ，0：用户自提点和推荐自提点
     * @param province_id 省
     * @param city_id 市
     * @param district_id 区
     */
    function ajax_pickup(province_id, city_id, district_id,show) {
        $.ajax({
            type: 'GET',
            url: "<?php echo U('Home/Cart/ajaxPickup'); ?>",//+tab,
            data: {province_id: province_id, city_id: city_id, district_id: district_id,show:show},
            success: function (data) {
                $("#ajax_pickup").html('');
                $("#ajax_pickup").append(data);
                ajax_order_price();
            }
        });
    }
    //更换自提点
    function replace_pickup(province_id, city_id, district_id) {
        var url = "/index.php?m=Home&c=Cart&a=replace_pickup&call_back=call_back_pickup&province_id="+province_id+"&city_id="+city_id+"&district_id="+district_id;
        layer.open({
            type: 2,
            title: '添加收货地址',
            shadeClose: true,
            shade: 0.8,
            area: ['880px', '580px'],
            content: url,
        });
    }
    // 添加自提点地址回调函数
    function call_back_pickup(province_id,city_id,district_id){
        layer.closeAll(); // 关闭窗口
        ajax_pickup(province_id, city_id, district_id,1);
    }


    //
    ajax_return_status = 1;
    function submit_order()
    {

        //限定 只能让  submit_order  提交一次
//        if(ajax_return_status == 0)
//            return false;
//
//        ajax_return_status = 0;

        $.ajax({
            type:"POST" ,
            url:"/index.php?m=Home&c=User&a=judgeAuth" ,
            data:{},
            async:false   ,
            dataType:"json" ,
            success:function (data) {
                 if(data.status == 1 ){
                     layer.alert(data.msg, {icon: 5});
                 }else{
                     $.ajax({
                         type : "POST",
                         url:"<?php echo U('Home/Cart/cart3'); ?>",//+tab,
                         data : $('#cart2_form').serialize()+"&act=submit_order",// 你的formid
                         dataType: "json",
                         success: function(data){
                             if(data.status != '1')
                             {
                                 // alert(data.msg); //执行有误
                                 layer.alert(data.msg, {icon: 2});
                                 // 登录超时
                                 if(data.status == -100)
                                     location.href ="<?php echo U('Home/User/login'); ?>";

                                 ajax_return_status = 1; // 上一次ajax 已经返回, 可以进行下一次 ajax请求

                                 return false;
                             }else if(data.status ==1)
                             {
                                 layer.msg('订单提交成功，正在跳转!', {
                                     icon: 1,   // 成功图标
                                     time: 2000 //2秒关闭（如果不配置，默认是3秒）
                                 }, function(){ // 关闭后执行的函数
                                     location.href = "/index.php?m=Home&c=Cart&a=cart4&order_id="+data.result; // 跳转到结算页
                                 });
                             }
                         }
                     });
                 }
            }
        });






    }
</script>
</body>
</html>