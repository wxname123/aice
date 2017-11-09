<?php

namespace    app\api\model  ;

use think\Db;
use think\Model;

class  User  extends Model {

    protected   $table = 'tp_users' ;

    public  function  identiMobilePass($postdata){

      return   Db::table('tp_users')->alias('u')
            ->where('u.mobile', $postdata['mobile'])
            ->where('u.password', encrypt($postdata['password']))
            ->join('tp_users u2', 'u2.user_id = u.uid','left')
            ->field('u.user_id, u.mobile, u.sex,u.birthday, u.nickname ,u.token ,  u.statu,u.id_card,u.mission,u.is_agent,u.is_distribut,u.uid, u2.nickname  recom_name')
            ->find() ;
    }

}