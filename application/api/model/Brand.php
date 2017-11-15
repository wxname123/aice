<?php

namespace    app\api\model  ;


use think\Db;
use think\Model;

class  Brand  extends  Model {

    public  function  getAllList(){
             return    Db::table('tp_brand')
                            ->field('id, name,  CONCAT("'.BASE_PATH.'" , logo )  logo ')
                            ->order('sort desc')
                            ->select() ;
    }


    /*
     *  获取所有的品牌数据
     *  @param   $page   int  :    分页参数：当前页
     *  @param   $per_page   int  :  分页参数 ：每页显示多少条数据
     * */
    public  function  getAllBrandList($page, $per_page){
          $brandData =   Db::table('tp_brand')
                                    ->field('id , name , CONCAT("'.BASE_PATH.'"  , logo )  logo'   )
                                    ->order('sort desc')
                                    ->select() ;

          if(!empty($brandData)){
              $goodData =    Db::table('tp_goods')
                  ->alias('g')
                  ->where('g.is_on_sale', 1)
                  ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img  ')
                  ->order('g.on_time desc')
                  ->limit($page , $per_page)
                  ->select();

              if(!empty($goodData)){
                  $brandData['goodlist'] = $goodData ;
              }else{
                  $brandData['goodlist'] = [] ;
              }
          }
          return  $brandData ;
    }


    /*
     *  根据品牌编码查询出商品数据
     *  @param   $brand_id   int  :  品牌编码
     *  @param   $page   int      :    分页参数：当前页
     *  @param   $per_page   int  :  分页参数 ：每页显示多少条数据
     * */
    public  function  getAllListBy( $brand_id ,$page , $per_page) {
              return    Db::table('tp_goods')
                                ->alias('g')
                                ->where('brand_id' , $brand_id)
                                ->where('g.is_on_sale', 1)
                                ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img ')
                                ->order('g.on_time desc')
                                ->limit($page , $per_page)
                                ->select() ;
    }
}