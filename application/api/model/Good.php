<?php

namespace    app\api\model  ;

use think\Db;
use think\Model;

class   Good  extends  Model{

    protected   $table = 'tp_goods' ;

    /*
     *  获取热门接口数据
     *  @page    当前页
     *  @per_page
     * */
    public function getHotList($page, $per_page){
        $page = $page * $per_page ;
        return   Db::table('tp_goods')
                    ->alias('g')
                    ->where('g.is_hot' , 1)
                    ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark , original_img')
                    ->limit($page, $per_page)
                    ->order('g.on_time  desc')
                    ->select() ;
    }


    /*
     *   根据商品编码去获取商品详情
     *   @param   $good_id    ： int   商品编码
     * */
    public  function  getGoodsDetail($good_id){
       return    Db::table('tp_goods')
                ->alias('g')
//                ->join('tp_brand b', 'b.id = g.brand_id ','left')
                ->where('g.goods_id', $good_id)
                ->field('g.goods_id, g.goods_sn, g.goods_name, g.click_count, g.market_price, g.shop_price, g.mission ,
                             g.original_img ,g.store_count, g.comment_count, g.goods_remark, g.goods_content,
                              sales_sum ')
                ->find() ;
    }


}


