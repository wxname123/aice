<?php

namespace    app\api\model  ;

use think\Db;
use think\Model;

class  Category  extends  Model{




    /*
     *  获取所有分类的数据
     *  @param   $cat_id   int  :  分类编码
     *  @param   $page   int  :    分页参数：当前页
     *  @param   $per_page   int  :  分页参数 ：每页显示多少条数据
     *  return   Array
     * */
    public  function  getAllCatList($page, $per_page){
         $page = $page * $per_page ;
         $totalData = [] ;
         $catData  =    Db::table('tp_goods_category')
                        ->where('parent_id' , 0)
                        ->field('id, name  , CONCAT("'.BASE_PATH.'" , image )  logo ')
                        ->select() ;


        if(!empty($catData)){
            $totalData['list'] = $catData ;
            $goodData =    Db::table('tp_goods')
                        ->alias('g')
                        ->where('g.is_on_sale', 1)
                        ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img  ')
                        ->order('g.sort desc')
                        ->limit($page , $per_page)
                        ->select();

         if(!empty($goodData)){
             $totalData['goodlist'] = $goodData ;
         }else{
             $totalData['goodlist'] = [] ;
         }
        }
        return  $totalData ;
    }

    /*
     *  根据分类编码获取该分类下面的所有商品
     *  @param   $cat_id   int  :  分类编码
     *  @param   $page   int  :    分页参数：当前页
     *  @param   $per_page   int  :  分页参数 ：每页显示多少条数据
     *  return   Array
     * */
    public  function  getCatListBy($cat_id ,$page, $per_page){
          return  Db::table('tp_goods')
                                  ->alias('g')
                                  ->where('g.is_on_sale', 1)
                                  ->where('g.cat_id', $cat_id)
                                  ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img  ')
                                  ->order('g.sort desc')
                                  ->limit($page , $per_page)
                                  ->select();
    }

}



















