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


    /*
     *  根据用户编码获取用户信息
     *  @param   $user_id    int   :  用户编码
     *  @return   Array
     * */
    public  function  getUserInfoBy($user_id){
        return   Db::table('tp_users')
                            ->alias('u')
                            ->where('u.user_id' , $user_id)
                            ->join('tp_region r', 'r.id = u.province', 'left')
                            ->join('tp_region r2', 'r2.id = u.city','left')
                            ->field('u.user_id, u.nickname ,u.mobile,u.sex ,u.username , 
                                        CONCAT("'.BASE_PATH.'"  , u.head_pic)  head_pic ,
                                        CONCAT(r.name, r2.name)  region  ')
                            ->find() ;
    }
}