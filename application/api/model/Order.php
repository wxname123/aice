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
}
