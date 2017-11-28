<?php

namespace    app\api\model  ;


use think\Db;
use think\Model;

class  Brand  extends  Model {


    /*
     *  获取所有的品牌数据
     *  @param   $searchKey   obj  :    分页对象
     *  @param   $user_id    int  :  用户编码
     * */
    public  function  getAllBrandList($searchKey , $user_id){
//         $page = $page * $per_page ;

          $totalData = [] ;
          $brandData =   Db::table('tp_brand')
                                    ->where('is_delete' , 1)
                                    ->field('id , name , CONCAT("'.BASE_PATH.'"  , logo )  logo'   )
                                    ->order('sort desc')
                                    ->select() ;

          if(!empty($brandData)){
              $totalData['list'] = $brandData ;
//              $goodData =    Db::table('tp_goods')
//                  ->alias('g')
//                  ->where('g.is_on_sale', 1)
//                  ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img  ')
//                  ->order('g.sort  desc')
//                  ->limit($page , $per_page)
//                  ->select();

              $uModel =  model('User') ;
              $gModel =   model('Good') ;
              $inst_id =  $uModel->getUserValueBy($user_id , 'inst_id') ;
              $sql =   '  select   g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img   from  tp_goods  g '
                    .  ' where  g.is_on_sale = 1 and  g.is_delete = 1 ' ;

              if($inst_id == "1"){
                    $sql  .=  ' and  g.inst_id = 1'  ;
              }

              $sql .=  ' ORDER  BY g.sort  desc  '
                  . ' limit ' . $searchKey->startNum . ','  . $searchKey->perPage ;

              $goodData =   $gModel->query($sql) ;

              if(!empty($goodData)){
                  $totalData['goodlist'] = $goodData ;
              }else{
                  $totalData['goodlist'] = [] ;
              }
          }
          return  $totalData ;
    }


    /*
     *  根据品牌编码查询出商品数据
     *  @param   $brand_id   int  :  品牌编码
     *  @param   $page   int      :    分页参数：当前页
     *  @param   $per_page   int  :  分页参数 ：每页显示多少条数据
     * */
    public  function  getAllListBy( $brand_id ,$searchKey , $user_id) {
//             $page = $page * $per_page ;
//              return    Db::table('tp_goods')
//                                ->alias('g')
//                                ->where('brand_id' , $brand_id)
//                                ->where('g.is_on_sale', 1)
//                                ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img ')
//                                ->order('g.sort  desc')
//                                ->limit($page , $per_page)
//                                ->select() ;

            $gModel  =  model('Good');
            $uModel  =   model('User') ;
            $inst_id =  $uModel->getUserValueBy($user_id , 'inst_id') ;
            $sql =  ' select  g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ,CONCAT( "'.BASE_PATH.'" , g.original_img) original_img  from   tp_goods  g '
                    . ' where g.is_on_sale = 1 and g.is_delete = 1 and g.brand_id = '.$brand_id.'  ' ;

            if($inst_id == "1"){
                $sql .=  ' g.inst_id = 1  '  ;
            }

            $sql .=  ' ORDER  BY g.sort  desc  '
                 . ' limit ' . $searchKey->startNum . ','  . $searchKey->perPage ;

            $data =  $gModel->query($sql) ;
            return  $data ;
    }
}