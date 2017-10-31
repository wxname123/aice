<?php


namespace app\api\controller;

class User  extends   Base {

//    用户注册接口
    public  function  regist(){
        if(request()->isPost()){
             //根据   推荐人号码  找到推荐人uid
//            var_dump($this->post['recond_mobile']) ; die ;

            if(!isset($this->post['mobile'])){

            }

            if(!isset($this->post['nickname'])){

            }

            if(!isset($this->post['password'])){

            }

            if(!isset($this->post['recond_mobile'])){

            }



            if(isset($this->post['recond_mobile'])){

            }else{
                die("abcd");
            }



        }
    }

}