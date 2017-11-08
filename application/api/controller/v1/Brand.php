<?php

namespace   app\api\controller\v1 ;

use  app\lib\exception\ParameterException ;

class  Brand  extends  Base{

    public  function   getbrandlist(){
          $bModel =   model('Brand');
          $bData =   $bModel->getAllList() ;
//          var_dump($bData) ; die ;
          if(!empty($bData)){
              $e = new  ParameterException(array(
                  'msg' => 'success' ,
                  'errorCode' => '0',
                  'datas'  =>  $bData ,
              ));
              throw  $e ;
          }else{
              $e = new  ParameterException(array(
                  'msg' => 'success' ,
                  'errorCode' => '0',
                  'datas'  =>  null ,
              ));
              throw  $e ;
          }

    }

}