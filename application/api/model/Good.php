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
     *  @user_id  :  用户编码
     * */
    public function getHotList( $searchKey  ,$user_id){   //$searchKey

        //娄底代理商下面的用户可以查看我们的商品（搜索商品）， 而我们的用户不能查看
        //根据token取出用户编码
        $uModel=   model('User');
        $inst_id =  $uModel->getUserValueBy($user_id, 'inst_id') ;    //机构编码

        $gModel = model('Good') ;
        $sql =   ' select g.goods_id ,g.goods_name , t.number  mission, g.shop_price, g.goods_remark , g.original_img  from tp_goods  g  '
                . ' left  join tp_task t on t.goods_id = g.goods_id '
                .  ' where g.is_hot = 1 and  g.is_delete = 1 and g.is_on_sale = 1 '  ;

        if($inst_id == "1"){
            $sql .= '  and   g.inst_id = 1 '  ;
        }
             $sql .=      ' ORDER BY g.sort  desc '
                          . ' limit '  . $searchKey->startNum  . ','  . $searchKey->perPage ;

        $data = $gModel->query($sql) ;
        return  $data ;

//        $page = $page * $per_page ;
//        return   Db::table('tp_goods')
//                    ->alias('g')
//                    ->where('g.is_hot' , 1)
//                    ->where('g.is_delete', 1)
//                    ->where('g.is_on_sale', 1)
//                    ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark , original_img')
//                    ->limit($page, $per_page)
//                    ->order('g.sort   desc')
//                    ->select() ;

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


//        $gModel =  model('Good');
//        $sql =      '  select  g.goods_id, g.goods_sn, g.goods_name, g.click_count, g.market_price, g.shop_price, g.mission ,
//                             g.original_img ,g.store_count, g.comment_count, g.goods_remark, g.goods_content, g.commission ,
//                              g.sales_sum , b.is_identity, b.is_license, b.is_credit,b.is_security , b.is_bankflow , b.is_ownership ,b.is_commencial from  tp_goods  g  '
//                    . ' join  tp_goods_certificate b on  b.goods_id = g.goods_id  '
//                    . '  where  g.goods_id = '.$good_id.' and  g.is_delete = 1   '  ;
//        $data =  $gModel->query($sql) ;
//
//        return  $data ;
        return    Db::table('tp_goods')
            ->alias('g')
            ->join('tp_goods_certificate b', 'b.goods_id = g.goods_id ','left')
            ->join('tp_task t', 't.goods_id = g.goods_id' , 'left')
            ->where('g.goods_id', $good_id)
            ->where('g.is_delete', 1)
            ->field('g.goods_id, g.goods_sn, g.goods_name, g.click_count, g.market_price, g.shop_price,  t.number  mission ,
                             g.original_img ,g.store_count, g.comment_count, g.goods_remark, g.goods_content, g.commission ,
                              g.sales_sum , b.is_identity, b.is_license, b.is_credit,b.is_security , b.is_bankflow , b.is_ownership ,b.is_commencial')
            ->find() ;
    }


   /*
    *  获取精品推荐列表数据
    * */
   public  function getRecomList($searchKey, $user_id){

       $gModel =  model('Good');
       $uModel =  model('User') ;
       $inst_id =  $uModel->getUserValueBy($user_id, 'inst_id') ;

       $sql =    ' SELECT g.goods_id ,g.goods_name , t.number  mission  , g.shop_price, g.goods_remark , CONCAT("'.BASE_PATH.'" , g.original_img ) original_img    FROM  tp_goods g  '
                . '  left  join  tp_task t  on t.goods_id = g.goods_id '
                . ' where g.is_recommend = 1 and g.is_on_sale = 1 and g.is_delete = 1  ' ;

       if($inst_id == "1"){    //爱车送用户
            $sql .=   ' and g.inst_id = 1  '  ;
       }
        $sql .=  ' ORDER BY g.sort  desc '
                . ' limit ' . $searchKey->startNum . ','  . $searchKey->perPage ;

        $data =  $gModel->query($sql);
        return  $data ;

       //          $page = $page * $per_page ;
//          $gData =   Db::table('tp_goods')
//                            ->alias('g')
//                            ->where('g.is_recommend', 1)
//                            ->where('g.is_on_sale', 1)
//                            ->where('g.is_delete',1)
//                            ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark , CONCAT("'.BASE_PATH.'" , g.original_img ) original_img')
//                            ->limit($page, $per_page)
//                            ->order('g.sort desc')
//                            ->select() ;


//          return   $gData ;
   }


    public  function getRecomDataList($searchKey , $user_id){
//        $page = $page * $per_page ;
        $totalData = [];
//        $gData =   Db::table('tp_goods')
//            ->alias('g')
//            ->where('g.is_recommend', 1)
//            ->where('g.is_on_sale', 1)
//            ->where('g.is_delete',1)
//            ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark , CONCAT("'.BASE_PATH.'" , g.original_img ) original_img')
//            ->limit($page, $per_page)
//            ->order('g.sort desc')
//            ->select() ;

        $uModel =  model('User');
        $gModel =  model('Good') ;
        $inst_id =  $uModel->getUserValueBy($user_id, 'inst_id');
        $sql =  ' select  g.goods_id ,g.goods_name , t.number   mission, g.shop_price, g.goods_remark , CONCAT("'.BASE_PATH.'" , g.original_img ) original_img  from  tp_goods  g  '
                . ' left join tp_task t on t.goods_id = g.goods_id  '
                . ' where  g.is_recommend = 1 and  g.is_on_sale = 1  and g.is_delete = 1  ' ;

        if($inst_id == "1"){
            $sql .=  ' and  g.inst_id = 1 '  ;
        }

        $sql .=  ' ORDER  BY  g.sort  desc '
            . ' limit ' . $searchKey->startNum . ','  . $searchKey->perPage ;

        $gData =   $gModel->query($sql) ;

        $totalData['list'] = [] ;
        if(!empty($gData)){
            $totalData['goodlist'] = $gData ;
        }else{
            $totalData['goodlist'] = [] ;
        }
        return   $totalData ;
    }


    /*
     *   根据关键字搜索匹配的商品
     *   @param     $searchKey   obj  :  分页对象
     *   @param     $key     string   ： 搜索
     * */
    public  function  searchGoodList($searchKey , $key){
           $gModel =   model('Good') ;
           $sql =   ' select  g.goods_id , g.cat_id , g.brand_id ,  g.goods_name , b.name  brand_name  , cat.name  category_name  ,
                         t.number  mission, g.goods_remark , CONCAT("'.BASE_PATH.'",g.original_img)  original_img       from  tp_goods  g '
                    . '  left  join tp_goods_category cat on  cat.id = g.cat_id  '
                    . '  left  join  tp_brand  b on b.id = g.brand_id  '
                    . ' left  join tp_task t on t.goods_id = g.goods_id  '
                    . ' where g.goods_name like "%'.$key.'%"   or  b.name like "%'.$key.'%"  or  cat.name  like "%'.$key.'%" '
                    . ' limit ' . $searchKey->startNum . ','  . $searchKey->perPage ;
            $data =  $gModel->query($sql) ;
            return  $data ;
    }
}


