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

}