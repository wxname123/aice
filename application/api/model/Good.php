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
                    ->field('g.goods_id ,g.goods_name , g.mission, g.shop_price, g.goods_remark ')
                    ->limit($page, $per_page)
                    ->order('g.on_time  desc')
                    ->select() ;
    }

}


