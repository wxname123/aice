<?php


namespace   app\api\controller\v1 ;

use  app\lib\exception\ParameterException ;

class  Order  extends   Base{

    public  function  getnews(){
           $oModel = model('Order');
          //获取时间戳
           $map =  getTopTimeStamp() ;
           $orderlist =  $oModel->getLastsList($map);

           if(!empty($orderlist)){
               $e = new  ParameterException(array(
                   'msg' => 'success' ,
                   'errorCode' => '0',
                   'datas'  =>  $orderlist ,
               ));
               throw  $e ;
           }else{
               $e = new  ParameterException(array(
                   'msg' => 'success' ,
                   'errorCode' => '0',
                   'datas'  =>  null  ,
               ));
               throw  $e ;
           }
//            var_dump($orderlist)  ; die ;
    }


    /*
     * 获取用于订单列表
     * */
    public  function  getOrderList($user_id, $page=0, $per_page=10){

        $is_Inter = isAppPositiveInteger($user_id) ;
        if(!$is_Inter){
            $e = new  ParameterException(array(
                'msg' => '参数必须为正整数' ,
                'errorCode' => '391023',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        $isPageInter =   isPageInteger($page) ;
        $isperPageInter =   isPageInteger($per_page);
        if(!$isperPageInter  ||  !$isPageInter){
            $e = new  ParameterException(array(
                'msg' => '分页参数必须为整数' ,
                'errorCode' => '391022',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }


        //先根据用户编码查询出用户  手机号码 ， 用户名

        $udata =  M('users')->where('user_id' , $user_id)->field('user_id, nickname, mobile')->find() ;

        if(empty($udata)){
            $e = new  ParameterException(array(
                'msg' => '该用户不存在' ,
                'errorCode' => '391011',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }else{
            $orderModel =  model('Order');
            $orderList = $orderModel->getListBy($user_id , $page, $per_page);
            if(!empty($orderList)){
                 $udata['orderlist'] = $orderList ;
            }else{
                $udata['orderlist'] = [] ;
            }
            $e = new  ParameterException(array(
                'msg' => 'success' ,
                'errorCode' => '0',
                'datas'  =>  $udata  ,
            ));
            throw  $e ;
        }

    }


    /*
     *   获取订单详情接口
     *   @param   $rec_id  int  :  订单商品id
     * */
    public  function  getOrderDetail($rec_id){
         $is_Inter = isAppPositiveInteger($rec_id) ;
         if(!$is_Inter){
             $e = new  ParameterException(array(
                 'msg' => '参数必须为正整数' ,
                 'errorCode' => '391023',
                 'datas'  =>  null  ,
             ));
             throw  $e ;
         }

         $orderModel =   model('Order');
         $orderModel->getDetailBy($rec_id) ;
    }

}
