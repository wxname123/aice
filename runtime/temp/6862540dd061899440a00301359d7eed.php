<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"./template/pc/rainbow/cart\ajax_side_cart_list.html";i:1507883317;}*/ ?>
<?php if(empty($cartList) || (($cartList instanceof \think\Collection || $cartList instanceof \think\Paginator ) && $cartList->isEmpty())): ?>
    <!--购物车为空-s-->
    <div class="noneshopcar">
        <img src="__STATIC__/images/noneshopcar.png"/><br />
        <span>购物车还什么都没有哦~</span>
    </div>
    <!--购物车为空-e-->
<?php else: ?>
    <!--购物车有商品-s-->
    <div class="hasshopcar u-fn-cart u-mn-cart">
        <?php if(is_array($cartList) || $cartList instanceof \think\Collection || $cartList instanceof \think\Paginator): $i = 0; $__LIST__ = $cartList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart): $mod = ($i % 2 );++$i;?>
            <div class="mn-c-box J-sdb-cb js_cart_top">
                <dl class="c-store mb15">
                    <dt class="c-store-tt fixed"><a href="#" class="n fl"><?php echo date("Y-m-d H:i:s",$cart['add_time']); ?></a></dt><!--商城自营-->
                    <dd class="c-list">
                        <div class="c-prod">
                            <!--<div class="c-sale-tip">-->
                                <!--<div class="c-sale-b"><span class="i">[满减]</span><span class="c">满299元减50元</span></div>-->
                            <!--</div>-->
                            <div class="c-item fixed  js_cart_pro_list">
                                <a href="javascript:void(0);" class="del js_delete" onclick="header_cart_del(<?php echo $cart['id']; ?>);">×</a>

                                <p class="i fl mr5">
                                    <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$cart[goods_id])); ?>"> <img src="<?php echo goods_thum_images($cart['goods_id'],50,50); ?>" height="50" width="50" alt="" title=""></a>
                                </p>

                                <p class="n fl">
                                    <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$cart[goods_id])); ?>"><?php echo $cart[goods_name]; ?></a>
                                </p>

                                <!--数额加减-->
                                <!--<p class="num fl js_mini_num">-->
                                    <!--<a href="javascript:void(0);" class="reduce reduce_gray fl"></a>-->
                                    <!--<input type="text" autocomplete="off" value="1">-->
                                    <!--<a href="javascript:void(0);" class="add  fr"></a>-->
                                <!--</p>-->
                                <p class="  fl js_mini_num"> * <?php echo $cart[goods_num]; ?> 件 </p>
                                <p class="p fr mt5"><em>￥</em><span><?php echo $cart[member_goods_price]; ?></span></p>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="buyall-price">
            <p>已选<span><?php echo $cartPriceInfo[goods_num]; ?></span>件，共计：￥<span><?php echo $cartPriceInfo[total_fee]; ?></span></p>
            <a href="<?php echo U('Home/Cart/index'); ?>">去购物车</a>
        </div>
    </div>
<!--购物车有商品-e-->
<?php endif; ?>