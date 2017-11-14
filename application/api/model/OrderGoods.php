<?php

namespace    app\api\model  ;

use think\Db;
use think\Model;

class   OrderGoods extends  Model {

    protected   $table = 'tp_order_goods' ;

    /*
     *  数据入库（商品订单）
     *  @param    $order_id  int   :   订单编码
     *  @param   $good_id   int  :  商品编码
     * */
    public  function  saveData($order_id, $good_id,$contents) {

        $ordergoodData = [
            'order_id'  =>  $order_id ,
            'goods_id'  =>  $good_id ,
            'goods_name' => $contents['goods_name'] ,
            'goods_sn'   => $contents['goods_sn'] ,
            'goods_num'   => $contents['goods_num'] ,
            'goods_price'  => $contents['goods_price'] ,
        ];

         return  $this->insert($ordergoodData) ;
    }

}

