<?php


namespace    app\api\model  ;

use think\Db;
use think\Model;

class  Attr  extends  Model{
    protected  $table = 'tp_goods_attr' ;

    /*
     *   根据 商品编码 获取该商品的属性
     *   @param   $good_id  int  :  商品编码
     *   @return   Array
     * */
    public  function getAttrById($good_id){
           return   Db::table('tp_goods_attr')
                    ->alias('a')
                    ->where('a.goods_id', $good_id)
                    ->where('a.is_delete',1)
                    ->join('tp_goods_attribute r', 'r.attr_id = a.attr_id', 'left')
                    ->field('a.goods_attr_id  ,   r.attr_id, r.attr_name , a.attr_value ')
                    ->select() ;
    }

}