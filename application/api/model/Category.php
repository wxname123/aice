<?php

namespace    app\api\model  ;

use think\Db;
use think\Model;

class  Category  extends  Model{

    /*
     *  获取汽车顶级分类
     *  return   Array
     * */
    public  function  getTopList(){
      return    Db::table('tp_goods_category')
                    ->where('parent_id' , 0)
                    ->field('id, name, CONCAT("'.BASE_PATH.'" , image )  image ')
                    ->select() ;
    }


    /*
     *  根据顶级分类id 获取该分类下的所有商品
     *  @param   $cat_id   int  :  分类编码
     *  @param   $page   int  :    分页参数：当前页
     *  @param   $per_page   int  :  分页参数 ：每页显示多少条数据
     *  return   Array
     * */


    public  function   getCatListBy($cat_id , $page, $per_page){
          $page = $page * $per_page ;
          return  Db::table('tp_goods')
                        ->alias('g')
                        ->where('g.cat_id', $cat_id)
                        ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img')
                        ->order('g.on_time desc')
                        ->select() ;

    }
/*
    public  function  getCatListBy($cat_id , $page, $per_page){
         $page = $page * $per_page ;
          return  Db::table('tp_goods_category')
                            ->alias('gc')
                            ->where('gc.parent_id' , $cat_id)
                            ->join('tp_goods g', 'gc.id = g.cat_id', 'left')
                            ->field(' g.goods_id, g.goods_sn, g.goods_name, g.click_count, g.market_price, 
                                       g.shop_price, g.mission , g.original_img ,g.store_count, g.comment_count, g.goods_remark,
                                          sales_sum')
                            ->limit($page, $per_page)
                            ->order('shop_price  desc')
                            ->select() ;
    }
*/

    /*
     *  获取所有分类的数据
     *  @param   $cat_id   int  :  分类编码
     *  @param   $page   int  :    分页参数：当前页
     *  @param   $per_page   int  :  分页参数 ：每页显示多少条数据
     *  return   Array
     * */
    public  function  getAllCatList($page, $per_page){
         $page = $page * $per_page ;
         $catData  =    Db::table('tp_goods_category')
                        ->where('parent_id' , 0)
                        ->field('id, name, CONCAT("'.BASE_PATH.'" , image )  image')
                        ->select() ;


        if(!empty($catData)){
         $goodData =    Db::table('tp_goods')
                        ->alias('g')
                        ->where('g.is_on_sale', 1)
                        ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img  ')
                        ->order('g.on_time desc')
                        ->limit($page , $per_page)
                        ->select();
         if(!empty($goodData)){
             $catData['goodlist'] = $goodData ;
         }else{
             $catData['goodlist'] = [] ;
         }
        }

        return  $catData ;
    }

}



















