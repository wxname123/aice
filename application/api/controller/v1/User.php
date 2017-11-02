<?php


namespace app\api\controller\v1 ;

use app\api\validate\UserLoginValidate;
use app\api\validate\UserRegistValidate;
use app\api\validate\UserResetValidate;
use  app\lib\exception\ParameterException ;

//use   app\common\model;

class User  extends   Base {
  public  function  a(){
      die("测试用的，记得删除该方法");
  }

  public  function  aa(){
      die("测试用的，记得删除该方法");
  }
//    用户注册接口
    public  function  regist(){
        if(request()->isPost()){
             //根据   推荐人号码  找到推荐人uid
//            var_dump($this->post['recond_mobile']) ; die ;

          (new UserRegistValidate() )->goCheck() ;
          $postdata = request()->post() ;

          if($postdata['mobile'] == $postdata['recond_mobile']){
              $e = new  ParameterException(array(
                  'msg' => '注册手机号不能与推荐人手机号一样' ,
                  'errorCode' => '391002',
              ));
              throw  $e ;
          }

          //查询该身份证号码是否已经存在
           $card =  M('users')->where('id_card', $postdata['id_card'])->find() ;
           if(!empty($card)){
               $e = new  ParameterException(array(
                   'msg' => '该用户已存在' ,
                   'errorCode' => '391006',
               ));
               throw  $e ;
           }

          //查询该手机号码是否已经存在    ， 查询推荐人手机号是否存在
           $result =   M('users')->where('mobile',$postdata['mobile'])->find();
//           var_dump($result) ; die ;
            if(!empty($result)){
                $e = new  ParameterException(array(
                    'msg' => '该号码已注册' ,
                    'errorCode' => '391001',
                ));
                throw  $e ;
            }

            $udata =  M('users')->where('mobile' , $postdata['recond_mobile'])->field('user_id')->find() ;

            if($udata == NULL ){
                $e = new  ParameterException(array(
                    'msg' => '推荐人手机号不存在' ,
                    'errorCode' => '391003',
                ));
                throw  $e ;
            }


          //执行 用户注册的逻辑
            $map['password'] =   encrypt(request()->post('password')) ;
            $map['nickname'] = $postdata['nickname'];
            $map['uid'] = $udata['user_id'];
            $map['mobile'] = $postdata['mobile'];
            $map['reg_time'] = time() ;
            $map['id_card'] = $postdata['id_card'] ;

            //数据入库
            $res =    M('users')->save($map);
            if($res){
                $e = new  ParameterException(array(
                    'msg' => '注册成功' ,
                    'errorCode' => '0',
                ));
                throw  $e ;
            }else{
                $e = new  ParameterException(array(
                    'msg' => '注册失败' ,
                    'errorCode' => '391004',
                ));
                throw  $e ;
            }

        }
    }


    public   function bb(){
        die("测试用的，记得删除该方法");
    }

//    用户登录接口
    public   function  login(){
        (  new  UserLoginValidate() )->goCheck() ;

        $postdata =   request()->post() ;

        //根据 手机号码  ， 密码  去查询数据

         $uModel =  model('User') ;
         $data =  $uModel->identiMobilePass($postdata) ;

        if($data != NULL ){
            $e = new  ParameterException(array(
                'msg' => '登录成功' ,
                'errorCode' => '0',
                'datas'  =>  $data
            ));
            throw  $e ;
        }else{
            $e = new  ParameterException(array(
                'msg' => '手机号或密码错误' ,
                'errorCode' => '0',
                'datas'  =>  $data
            ));
            throw  $e ;
        }
    }

//    更换密码
    public  function  reset(){
        (new  UserResetValidate())->goCheck() ;
        $postdata = request()->post() ;
        //先把 验证码写死
        if($postdata['vcode'] != "888888"){
            $e = new  ParameterException(array(
                'msg' => '验证码错误' ,
                'errorCode' => '391005',
            ));
            throw  $e ;
        }

        $password =  encrypt($postdata['newpassword']) ;

        $oldpassword =  M('users')->where('mobile', $postdata['mobile'])->getField('password') ;

        if($oldpassword != NULL ){
             if($password == $oldpassword){
                 $e = new  ParameterException(array(
                     'msg' => '新密码不能和旧密码相同' ,
                     'errorCode' => '391008',
                 ));
                 throw  $e ;
             }
        }else{
            $e = new  ParameterException(array(
                'msg' => '手机号不存在' ,
                'errorCode' => '391003',
            ));
            throw  $e ;
        }

        $res =   M('users')->where('mobile', $postdata['mobile'])->save(['password' => $password]) ;
        if($res){
            $e = new  ParameterException(array(
                'msg' => '重置密码成功' ,
                'errorCode' => '0',
            ));
            throw  $e ;
        }else{
            $e = new  ParameterException(array(
                'msg' => '重置密码失败' ,
                'errorCode' => '391009',
            ));
            throw  $e ;
        }
     }

}














