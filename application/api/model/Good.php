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

//       return    Db::table('tp_goods')
//                ->alias('g')
//                ->join('tp_goods_certificate b', 'b.goods_id = g.goods_id ','left')
//                ->where('g.goods_id', $good_id)
//                ->field('g.goods_id, g.goods_sn, g.goods_name, g.click_count, g.market_price, g.shop_price, g.mission ,
//                             g.original_img ,g.store_count, g.comment_count, g.goods_remark, g.goods_content, g.commission ,
//                              g.sales_sum , b.is_identity, b.is_license, b.is_credit,b.is_security , b.is_bankflow , b.is_ownership ')
//                ->find() ;


        return    Db::table('tp_goods')
            ->alias('g')
            ->join('tp_goods_certificate b', 'b.goods_id = g.goods_id ','left')
            ->where('g.goods_id', $good_id)
            ->field('g.goods_id, g.goods_sn, g.goods_name, g.click_count, g.market_price, g.shop_price, g.mission ,
                             g.original_img ,g.store_count, g.comment_count, g.goods_remark, g.goods_content, g.commission ,
                              g.sales_sum , b.is_identity, b.is_license, b.is_credit,b.is_security , b.is_bankflow , b.is_ownership ')
            ->find() ;
    }


   /*
    *  获取精品推荐列表数据
    * */
   public  function getRecomList($page, $per_page){
          $page = $page * $per_page ;
          return   Db::table('tp_goods')
                            ->alias('g')
                            ->where('is_recommend', 1)
                            ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark , CONCAT("'.BASE_PATH.'" , g.original_img ) original_img')
                            ->limit($page, $per_page)
                            ->order('g.shop_price desc')
                            ->select() ;
   }

   /*
    *   根据品牌编码 获取 商品列表
    *   @param   $brand_id    int   :   品牌编码
    *   return   Array
    * */
   public  function    getGoodsBy($brand_id , $page, $per_page ){
          $page = $page *  $per_page ;
           return   Db::table('tp_goods')
                        ->alias('g')
                        ->where('brand_id', $brand_id)
                        ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark , CONCAT("'.BASE_PATH.'" , g.original_img ) original_img')
                        ->page($page ,$per_page)
                        ->select() ;
   }


}


