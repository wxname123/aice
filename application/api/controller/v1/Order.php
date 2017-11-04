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

}
