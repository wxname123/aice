<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"./template/pc/rainbow/cart\ajax_address.html";i:1506391063;}*/ ?>
<?php if(is_array($address_list) || $address_list instanceof \think\Collection || $address_list instanceof \think\Paginator): if( count($address_list)==0 ) : echo "" ;else: foreach($address_list as $k=>$v): if($v[is_default] == 1): ?> <!--默认选中的地址-->
        <div class="order-address-list address_current">
            <table width="100%" cellspacing="0" cellpadding="0" border="1" class="address">
                <tbody>
                <tr>
                    <td width="5%"  class="default"><i></i></td>
                    <td width="5%"  class="co-red default">寄送至</td>
                    <td width="5%"  class="address_id"><input type="radio" data-province-id="<?php echo $v[province]; ?>" data-city-id="<?php echo $v[city]; ?>" data-district-id="<?php echo $v[district]; ?>" onclick="swidth_address(this);" name="address_id" value="<?php echo $v[address_id]; ?>" checked="checked" /></td>
                    <td width="15%"  class="consignee"><b>收货人:<?php echo $v[consignee]; ?></b></td>
                    <td width="40%"  class="address2"><span>地址:<?php echo $regionList[$v[province]]; ?> <?php echo $regionList[$v[city]]; ?> <?php echo $regionList[$v[district]]; ?> <?php echo $regionList[$v[twon]]; ?> <?php echo $v[address]; ?></span></td>
                    <td width="15%"  class="mobile"><span>电话：<?php echo $v[mobile]; ?></span></td>
                    <td width="5%"  class="wi100"><span>默认地址</span></td>
                    <td width="5%"  class="wi100"><span><a onclick="add_edit_address(<?php echo $v[address_id]; ?>);">修改</a></span></td>
                    <td><a onclick="del_address(<?php echo $v[address_id]; ?>);"><div class="gwc-gb ma-ri-20"></div></a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <script>
            ajax_pickup(<?php echo $v[province]; ?>,<?php echo $v[city]; ?>,<?php echo $v[district]; ?>,0);
        </script>
        <?php else: ?>
        <div class="order-address-list">
            <table width="100%" cellspacing="0" cellpadding="0" border="1" class="address">
                <tbody>
                <tr>
                    <td width="5%"  class="default"><i></i></td>
                    <td width="5%"  class="co-red default">寄送至</td>
                    <td width="5%"  class="address_id"><input type="radio" data-province-id="<?php echo $v[province]; ?>" data-city-id="<?php echo $v[city]; ?>" data-district-id="<?php echo $v[district]; ?>" onclick="swidth_address(this);"  name="address_id" value="<?php echo $v[address_id]; ?>" /></td>
                    <td width="15%" class="consignee"><b>收货人:<?php echo $v[consignee]; ?></b></td>
                    <td width="40%"  class="address2"><span>地址:<?php echo $regionList[$v[province]]; ?> <?php echo $regionList[$v[city]]; ?> <?php echo $regionList[$v[district]]; ?> <?php echo $regionList[$v[twon]]; ?> <?php echo $v[address]; ?></span></td>
                    <td width="15%" class="mobile"><span>电话：<?php echo $v[mobile]; ?></span></td>
                    <td width="5%"  class="wi100"><span>&nbsp;&nbsp;</span></td>
                    <td width="5%"  class="wi100"><span><a onclick="add_edit_address(<?php echo $v[address_id]; ?>);">修改</a></span></td>
                    <td><a onclick="del_address(<?php echo $v[address_id]; ?>);"><div class="gwc-gb ma-ri-20"></div></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
