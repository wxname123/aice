<?php


namespace    app\api\model  ;

use think\Db;
use think\Model;

class  Order  extends  Model {
    protected   $table = 'tp_order' ;

    /*
     *  获取最新订单信息接口
     *  $timeArr   :  当前时间戳往下往上加7天后返回的时间戳数组
     * */
    public  function  getLastsList($timeArr){

       return   Db::table('tp_order')->alias('o')
                                       ->where('o.order_status', 'in', [0, 1])
                                       ->where('o.add_time','between time', [$timeArr['bottom'] , $timeArr['top']])
                                       ->join('tp_users u', 'u.user_id = o.user_id', 'left')
                                       ->field('o.order_id, o.order_sn, o.order_status, o.shipping_status, o.pay_status, o.user_id , u.mobile , u.review ,
                                            if(o.order_status , "订单确认成功", "下单成功")  description , if(u.review, "资料审核通过", "资料审核未通过")  materials')
                                       ->limit(ORDER_COUNT)
                                       ->order('o.add_time desc')
                                       ->select();

    }

    /*
     *  根据用户编码查询该用户的订单信息
     *   @param    $user_id   int  :  用户编码
     *   @return   Array
     * */
    public  function  getListBy($user_id , $page , $per_page ){
        $page = $page * $per_page ;
        return      Db::table('tp_order')
                    ->alias('o')
                    ->where('user_id'  , $user_id)
                    ->join('tp_order_goods og', 'og.order_id = o.order_id', 'left')
                    ->join('tp_goods g', 'og.goods_id = g.goods_id', 'left')
                    ->field('o.order_id,og.rec_id , og.goods_id ,g.goods_name  , concat( "'.BASE_PATH.'" ,g.original_img)  original_img  ,  o.order_sn, o.order_status, o.shipping_status,FROM_UNIXTIME( o.add_time , "%Y-%m-%d %H:%i:%s")  add_time , o.goods_price ,
                                o.shipping_price , o.total_amount, og.goods_num')
                    ->page($page, $per_page)
                    ->select();

    }

    /*
     *  根据订单编码 查询出该订单的详细信息
     *  @param    $rec_id   int   :   订单商品编码
     *  return Array
     * */
    public  function   getDetailBy($rec_id){
            return   Db::table('tp_order_goods')
                            ->alias('og')
                            ->where('rec_id' ,  $rec_id )
                            ->join('tp_order o', 'o.order_id = og.order_id', 'left')
                            ->join('tp_goods g', 'g.goods_id = og.goods_id', 'left')
                            ->field('og.rec_id, og.order_id, og.goods_id, og.goods_num,og.goods_price,
                                      FROM_UNIXTIME( o.add_time , "%Y-%m-%d %H:%i:%s")  add_time , o.shipping_price, order_status ,
                                      g.goods_name  ')
                            ->find();

    }




}
