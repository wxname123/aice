<?php

namespace   app\api\controller\v1 ;

use  app\lib\exception\ParameterException ;

class  Region  extends  Base {

    public  function  getRegionList($province=0, $city=0 ){

        $is_p_Inter =  isPageInteger($province) ;
        $is_c_Inter =  isPageInteger($city) ;

        if(!$is_p_Inter  ||    !$is_c_Inter){
            $e = new  ParameterException(array(
                'msg' => '参数必须为正整数' ,
                'errorCode' => '391023',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        $rModel =  model('Region');
        //              4 ： 省份和区同时传入
        if($province == 0 &&  $city == 0){
           // 1：什么都不传入    --- 查省份
            $map['level'] = 1 ;

        }elseif ($province != 0  &&  $city == 0){


//            if( ( $province == 1)   || ( $province == 2)   || ( $province == 10543)  ||  ( $province == 31929)  ||  ( $province == 47494)   ||  ( $province == 47495)   ){
//                //先处理是否为 直辖市的情况
//                $map['level'] = 3 ;
//                $map['parent_id'] = $province ;
//            }else{
                //2：传入省份  --- 查市
                $map['level'] = 2 ;
                $map['parent_id'] = $province ;
//            }



        }elseif ($city != 0){
            //3：传入市   ：  查区
            $map['level'] = 3 ;
            $map['parent_id'] = $city ;
        }

       $data =   $rModel->getRegionList($map) ;
        if(!empty($data)){
            $e = new  ParameterException(array(
                'msg' => 'success' ,
                'errorCode' => '0',
                'datas'  =>  $data  ,
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

