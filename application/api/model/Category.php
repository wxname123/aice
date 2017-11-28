<?php

namespace    app\api\model  ;

use think\Db;
use think\Model;

class  Category  extends  Model{




    /*
     *  获取所有分类的数据
     *  @param   $cat_id   int  :  分类编码
     *  @param   $searchKey   obj   :    分页对象
     *  @param   $user_id   int  :  用户编码
     *  return   Array
     * */
    public  function  getAllCatList($searchKey , $user_id ){
//         $page = $page * $per_page ;
         $totalData = [] ;
         $catData  =    Db::table('tp_goods_category')
                        ->where('parent_id' , 0)
                        ->where('is_delete', 1)
                        ->field('id, name  , CONCAT("'.BASE_PATH.'" , image )  logo ')
                        ->select() ;


        if(!empty($catData)){
            $totalData['list'] = $catData ;
            $gModel =  model('Good');
            $uModel =   model('User');
            $inst_id = $uModel->getUserValueBy($user_id , 'inst_id') ;
//            $goodData =    Db::table('tp_goods')
//                        ->alias('g')
//                        ->where('g.is_on_sale', 1)
//                        ->where('g.is_delete', 1)
//                        ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img  ')
//                        ->order('g.sort desc')
//                        ->limit($page , $per_page)
//                        ->select();

            $sql =  ' select   g.goods_id ,g.goods_name , t.number  mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img  from tp_goods g  '
                    . ' left join  tp_task t on t.goods_id = g.goods_id '
                    .  ' where  g.is_on_sale = 1 and g.is_delete    '  ;

            if($inst_id  == "1"){
                $sql  .=  ' and g.inst_id = 1 ' ;
            }

            $sql .=  '  ORDER  BY g.sort desc  '
                    . '  limit '  . $searchKey->startNum  . ','  . $searchKey->perPage  ;

            $goodData =  $gModel->query($sql) ;

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
     *  @param   $searchKey   obj  :    分页对象
     *  @param   $user_id   int  :    用户编码
     *  return   Array
     * */
    public  function  getCatListBy($cat_id ,$searchKey, $user_id){

         $uModel =  model('User');
         $gModel =  model('Good');

         $inst_id =  $uModel->getUserValueBy($user_id, 'inst_id') ;

         $sql    =  ' select  g.goods_id ,g.goods_name , t.number  mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img    from  tp_goods g   '
                     . ' left join  tp_task t on t.goods_id = g.goods_id '
                    .  '  where  g.is_on_sale = 1 and  g.is_delete = 1 and  g.cat_id ='.$cat_id.' ' ;

          if($inst_id == "1"){
                $sql .=  ' and g.inst_id = 1 '  ;
          }

          $sql  .=  'ORDER  BY g.sort  desc '
                .  ' limit '  . $searchKey->startNum . ','  . $searchKey->perPage ;

          $data = $gModel->query($sql) ;
          return  $data ;

//          return  Db::table('tp_goods')
//                                  ->alias('g')
//                                  ->where('g.is_on_sale', 1)
//                                  ->where('g.is_delete', 1)
//                                  ->where('g.cat_id', $cat_id)
//                                  ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img  ')
//                                  ->order('g.sort desc')
//                                  ->limit($page , $per_page)
//                                  ->select();
    }

}



















