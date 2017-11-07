<?php

namespace    app\api\model  ;

use think\Db;
use think\Model;

class  Region  extends  Model {

    /*
     *  根据传入的地区编码查询数据
     *  @param    array    $map  :  查询条件
     *  @param    int   $region_id  :   可能为省编码 也可能为  市编码
     * */
    public  function  getRegionList($map ){
          return  Db::table('tp_region')
                    ->where($map)
                    ->select() ;

    }

}

