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
          foreach ($datas as $k=>$v ){
                if($v != ""){
                       $v['original_img'] =   BASE_PATH . '/' . $v['original_img'];
                       $datas[$k] = $v ;
                }
          }

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


    /*
     *  获取商品详情
     *  @param   $good_id   int   :   商品编码
     *  @return    Array
     * */
    public  function  getdetails($good_id){

          $is_inter =   isAppPositiveInteger($good_id) ;

          if(!$is_inter){
              $e = new  ParameterException(array(
                  'msg' => '参数必须为正整数' ,
                  'errorCode' => '391023',
                  'datas'  =>  null  ,
              ));
              throw  $e ;
          }


          $goodmodel =  model('Good');

          $goods_info =  $goodmodel->getGoodsDetail($good_id) ;

            if(!empty($goods_info)){
                $goods_info['original_img'] = BASE_PATH . $goods_info['original_img'] ;
                $content  = html_entity_decode($goods_info['goods_content']) ;
                $cont_arr = getSrcImg($content) ;
//                var_dump($cont_arr) ; die ;

                if(!empty($cont_arr)){
                    $goods_info['goods_content'] = [] ;
                    foreach ( $cont_arr   as $k=>$v ) {
                        $goods_info['goods_content'][$k] =   BASE_PATH  . $v ;
                    }
                }

                $e = new  ParameterException(array(
                    'msg' => 'success' ,
                    'errorCode' => '0',
                    'datas'  =>  $goods_info  ,
                ));
                throw  $e ;
            }else{
                $e = new  ParameterException(array(
                    'msg' => 'success' ,
                    'errorCode' => '0',
                    'datas'  =>  null   ,
                ));
                throw  $e ;
            }

    }

}























