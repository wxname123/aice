<?php

namespace   app\api\controller\v1 ;

use  app\lib\exception\ParameterException ;

class   Good  extends  Base{

    public  function   gethots($page=0 , $per_page=10){

        $goodModel =   model('Good');
//        var_dump($page) ; die ;



        $pageInter =   isPageInteger($page) ;
        $perpageInter = isPageInteger($per_page) ;

        if( !( $pageInter  &&  $perpageInter )){
            $e = new  ParameterException(array(
                'msg' => '分页参数必须为整数' ,
                'errorCode' => '391022',
            ));
            throw  $e ;
        }

      $datas =  $goodModel->getHotList($page, $per_page);


      if(!empty($datas)){
          $e = new  ParameterException(array(
              'msg' => 'success' ,
              'errorCode' => '0',
              'datas'  =>  $datas ,
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

    }

}
