<?php

define('BASE_PATH','http://192.168.1.168:88') ;
define('ORDER_COUNT', 20 ) ;


    function isAppMobile($value){
        $rule = '^1(3|4|5|7|8)[0-9]\d{8}$^' ;

        $result = preg_match($rule, $value) ;
        if($result){
            return true  ;
        }else{
            return  false ;
        }
    }


     function isAppNotEmpty($value)
     {
         if (empty($value)) {
             return false;
         } else {
             return true;
         }
     }

     /*
      *  传入UE 编辑之后的数据  ， 例如：&lt;p&gt;&lt;img src=&quot;/public/upload/goods/2016/01-13/5695bd6ddd3f5.jpg&quot; style=&quot;float:none;&quot; title=&quot;428_428_1443086923441.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/public/upload/goods/2016/01-13/5695bd6deed8b.jpg&quot; style=&quot;float:none;&quot; title=&quot;428_428_1443086925858.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/public/upload/goods/2016/01-13/5695bd6e11704.jpg&quot; style=&quot;float:none;&quot; title=&quot;428_428_1443086930218.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;
      *  返回 转义之后，根据正则 获取的src 属性(数组)
      * */
     function  getSrcImg($content){

//         preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$content,$match);

        preg_match_all('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i' , $content , $matchs);

//         preg_match('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i',$content,$match);
//         var_dump( $matchs[0][1] );  die ;

         $return_arr = [] ;
         foreach ($matchs[0]  as $k=>$v ){
             $str_arr  =   explode(" ", $v ) ;
//             var_dump($a[1]) ; die ;
              $src_str =  substr($str_arr[1], 5) ;
             $src_str = substr($src_str , 0, -1) ;
            $return_arr[$k] =  $src_str ;
         }
        return  $return_arr ;
     }


     function isAppPositiveInteger($value, $rule='', $data='', $field='')
      {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        return false ; // $field . '必须是正整数';
     }

     //验证分页page， 这里的page可以为0
    function isPageInteger($value, $rule='', $data='', $field='')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) >= 0) {
            return true;
        }
        return false ; // $field . '必须是正整数';
    }


        /*身份证号码检查接口函数  --- start  */
    function  isIdentify($value, $rule='', $data='', $field=''){
            if(strlen($value) == 15 || strlen($value) == 18){
            if(strlen($value) == 15){
                $idcard = idcard_15to18($value);
            }
            if(idcard_checksum18($value)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    function idcard_15to18($idcard){
        if (strlen($idcard) != 15){
            return false;
        }else{// 如果身份证顺序码是996 997 998 999，这些是为百岁以上老人的特殊编码
            if (array_search(substr($idcard, 12, 3), array('996', '997', '998', '999')) !== false){
                $idcard = substr($idcard, 0, 6) . '18'. substr($idcard, 6, 15);
            }else{
                $idcard = substr($idcard, 0, 6) . '19'. substr($idcard, 6, 15);
            }
        }
        $idcard = $idcard . idcard_verify_number($idcard);
        return $idcard;
    }


    function idcard_checksum18($idcard){
            if (strlen($idcard) != 18){ return false; }
            $idcard_base = substr($idcard, 0, 17);
            if (idcard_verify_number($idcard_base) != strtoupper(substr($idcard, 17, 1))){
                return false;
            }else{
                return true;
            }
        }


    function idcard_verify_number($idcard_base){
            if (strlen($idcard_base) != 17){
                return false;
            }
            $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2); //debug 加权因子
            $verify_number_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'); //debug 校验码对应值
            $checksum = 0;
            for ($i = 0; $i < strlen($idcard_base); $i++){
                $checksum += substr($idcard_base, $i, 1) * $factor[$i];
            }
            $mod = $checksum % 11;
            $verify_number = $verify_number_list[$mod];
            return $verify_number;
        }
        /*身份证号码检查接口函数  --- end */



    /*
     *   根据当前的时间戳计算出前后两天内的时间戳的开始值和结束值，返回数组
     *    @return    Array
     * */
    function  getTopTimeStamp(){
//        $currtime = time()  ;
//         $currdate =   date("Y-m-d H:i:s", $currtime) ;
         $bottom_time = strtotime('-2 days') ;
         $top_time = strtotime('+2 days') ;
         $map['bottom'] = $bottom_time ;
         $map['top'] = $top_time ;
         return $map ;
    }
















