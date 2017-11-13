<?php


namespace   app\api\controller\v1 ;

use  app\lib\exception\ParameterException ;
use think\Db;

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
         $orderData =   $orderModel->getDetailBy($rec_id) ;
//         var_dump($orderData) ; die ;
         if(!empty($orderData)){
             $e = new  ParameterException(array(
                 'msg' => 'success' ,
                 'errorCode' => '0',
                 'datas'  =>  $orderData  ,
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


    /*
  *  提交订单
  * */
    public  function  submitOrder2($user_id, $good_id){

        $contents  =  request()->post() ;
        $files  =  request()->file() ;


        $is_uid_Inter =  isAppPositiveInteger($user_id) ;
        $is_gid_Inter =  isAppPositiveInteger($good_id) ;

        if(!$is_uid_Inter  ||  !$is_gid_Inter){
            $e = new  ParameterException(array(
                'msg' => '参数必须为正整数' ,
                'errorCode' => '391023',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(empty($contents)){
            $e = new  ParameterException(array(
                'msg' => '缺少必填参数' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if($files == NULL ){
            $e = new  ParameterException(array(
                'msg' => '缺少必填参数' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!isset($contents['consignee'])  ||  ( $contents['consignee'] == "") ){
            $e = new  ParameterException(array(
                'msg' => '姓名不能为空' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!isset($contents['mobile'])){
            $e = new  ParameterException(array(
                'msg' => '手机号码不能为空' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!isset($contents['province'])  || !isset($contents['city'])  || !isset($contents['district'])
            || ($contents['province'] == "")  || ($contents['city'] == "")  ||  ($contents['district'] == "") ){
            $e = new  ParameterException(array(
                'msg' => '地区不能为空' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!isset($contents['pay_code'])  ||  ($contents['pay_code'] == "")){
            $e = new  ParameterException(array(
                'msg' => '支付方式不能为空' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!isset($contents['goods_price']) || ($contents['goods_price'] == "")){
            $e = new  ParameterException(array(
                'msg' => '商品价格不能为空' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!isset($contents['goods_num']) || ($contents['goods_num'] == "")){
            $e = new  ParameterException(array(
                'msg' => '商品数量不能为空' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        //数据入库(order)
        $oModel =  model('Order');

        $result  =   $oModel->saveData($user_id , $contents);

        if($result ){
            $ogModel =   model('OrderGoods');
            $res =    $ogModel->saveData($result, $good_id,$contents) ;
            if($res){
                //上传图片， 图片数据入库（tp_user_good_image）

                $save_url = 'public/upload/usergoods/' . date('Y', time()) . '/' . date('m-d', time());
                foreach ($files as  $k=>$file ){
//                         var_dump($file) ; die ;
                    $info = $file->rule('uniqid')->validate(['size' => 1024 * 1024 * 3, 'ext' => 'jpg,png,gif,jpeg'])->move($save_url);
                    if($info){
                        // 成功上传后 获取上传信息
                        // 输出 jpg
                        $comment_img[$k][] = '/'.$save_url . '/' . $info->getFilename();
                    }else{
                        $e = new  ParameterException(array(
                            'msg' => '图片上传失败' ,
                            'errorCode' => '391010',
                            'datas'  =>  null   ,
                        ));
                        throw  $e ;
                    }
                }

                $map = [
                    'user_id' =>  $user_id ,
                    'good_id' =>  $good_id ,
                    'create_time' => time() ,
                ];
                if(!empty($comment_img["identity"])){
                    $map['identity'] =  $comment_img["identity"][0] ;
                }
                if (!empty($comment_img["license"])){
                    $map['license'] =  $comment_img["license"][0] ;
                }
                if (!empty($comment_img["credit"])){
                    $map['credit'] =  $comment_img["credit"][0] ;
                }
                if(!empty($comment_img["security"])){
                    $map['security'] =  $comment_img["security"][0] ;
                }
                if (!empty($comment_img["bankflow"])){
                    $map['bankflow'] =  $comment_img["bankflow"][0] ;
                }
                if(!empty($comment_img["ownership"])){
                    $map['ownership'] =  $comment_img["ownership"][0] ;
                }


                //先根据user_id   和 good_id  查询该条记录是否存在， 如果存在则更新， 如果不存在则插入
                $ugData =  M('user_good_image')->where('user_id' , $user_id)->where('good_id' , $good_id)->find() ;
//                     var_dump($ugData) ;die ;
                if(empty($ugData)){
                    $resl =  M('user_good_image')->insert($map) ;
                }else{
                    //删除之前的图片
//                         var_dump($ugData) ; die ;
                    $this->freeImage($ugData) ;
                    $resl =  M('user_good_image')->where('user_id' , $user_id)->where('good_id' , $good_id)->save($map) ;
                }
                if($resl){
                    $e = new  ParameterException(array(
                        'msg' => '订单提交成功' ,
                        'errorCode' => '0',
                        'datas'  =>  null   ,
                    ));
                    throw  $e ;
                }else{
                    $e = new  ParameterException(array(
                        'msg' => '订单提交失败' ,
                        'errorCode' => '391026',
                        'datas'  =>  null   ,
                    ));
                    throw  $e ;
                }
            }else{
                $e = new  ParameterException(array(
                    'msg' => '订单提交失败' ,
                    'errorCode' => '391026',
                    'datas'  =>  null   ,
                ));
                throw  $e ;
            }

        }else{
            $e = new  ParameterException(array(
                'msg' => '订单提交失败' ,
                'errorCode' => '391026',
                'datas'  =>  null   ,
            ));
            throw  $e ;
        }
    }


    /*
     *  释放掉图片
     * */
    protected  function  freeImage($ugData) {
         if($ugData['license'] != ""){
             $ugData['license'] = substr($ugData['license'], 1) ;
             @unlink($ugData['license']) ;
         }

        if($ugData['identity'] != ""){
            $ugData['identity'] = substr($ugData['identity'], 1) ;
            @unlink($ugData['identity']) ;
        }

        if($ugData['credit'] != ""){
            $ugData['credit'] = substr($ugData['credit'], 1) ;
            @unlink($ugData['credit']) ;
        }

        if($ugData['security'] != ""){
            $ugData['security'] = substr($ugData['security'], 1) ;
            @unlink($ugData['security']) ;
        }
        if($ugData['ownership'] != ""){
            $ugData['ownership'] = substr($ugData['ownership'], 1) ;
            @unlink($ugData['ownership']) ;
        }
    }


    /*
   *  提交订单
   * */
    public  function  submitOrder($user_id, $good_id){
        $files  =  request()->file() ;
        $contents = $_POST ;

        $is_uid_Inter =  isAppPositiveInteger($user_id) ;
        $is_gid_Inter =  isAppPositiveInteger($good_id) ;

        if(!$is_uid_Inter  ||  !$is_gid_Inter){
            $e = new  ParameterException(array(
                'msg' => '参数必须为正整数' ,
                'errorCode' => '391023',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }


        if(empty($contents)){
            $e = new  ParameterException(array(
                'msg' => '缺少必填参数' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if($files == NULL ){
            $e = new  ParameterException(array(
                'msg' => '缺少必填参数' ,
                'errorCode' => '391016',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!request()->post('consignee')){
            $e = new  ParameterException(array(
                'msg' => '姓名不能为空' ,
                'errorCode' => '391017',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!request()->post('province')  ||  !request()->post('city')  ||  !request()->post('district') ){
            $e = new  ParameterException(array(
                'msg' => '地区不能为空' ,
                'errorCode' => '391028',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!request()->post('pay_code')){
            $e = new  ParameterException(array(
                'msg' => '支付方式不能为空' ,
                'errorCode' => '391017',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!request()->post('goods_price')){
            $e = new  ParameterException(array(
                'msg' => '商品价格不能为空' ,
                'errorCode' => '391030',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!request()->post('goods_name')){
            $e = new  ParameterException(array(
                'msg' => '商品名称不能为空' ,
                'errorCode' => '391031',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!request()->post('goods_num')){
            $e = new  ParameterException(array(
                'msg' => '商品数量不能为空' ,
                'errorCode' => '391032',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        if(!request()->post('mobile')){
            $e = new  ParameterException(array(
                'msg' => '手机号码不能为空' ,
                'errorCode' => '391020',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }



        //数据入库(order)
        $oModel =  model('Order');


        $result  =   $oModel->saveData($user_id , $contents);

        if($result ){
            $ogModel =   model('OrderGoods');
            $res =    $ogModel->saveData($result, $good_id,$contents) ;
            if($res){
                //上传图片， 图片数据入库（tp_user_good_image）

                $save_url = 'public/upload/usergoods/' . date('Y', time()) . '/' . date('m-d', time());
                foreach ($files as  $k=>$file ){
//                         var_dump($file) ; die ;
                    $info = $file->rule('uniqid')->validate(['size' => 1024 * 1024 * 3, 'ext' => 'jpg,png,gif,jpeg'])->move($save_url);
                    if($info){
                        // 成功上传后 获取上传信息
                        // 输出 jpg
                        $comment_img[$k][] = '/'.$save_url . '/' . $info->getFilename();
                    }else{
                        $e = new  ParameterException(array(
                            'msg' => '图片上传失败' ,
                            'errorCode' => '391010',
                            'datas'  =>  null   ,
                        ));
                        throw  $e ;
                    }
                }

                $map = [
                    'user_id' =>  $user_id ,
                    'good_id' =>  $good_id ,
                    'create_time' => time() ,
                ];
                if(!empty($comment_img["identity"])){
                    $map['identity'] =  $comment_img["identity"][0] ;
                }
                if (!empty($comment_img["license"])){
                    $map['license'] =  $comment_img["license"][0] ;
                }
                if (!empty($comment_img["credit"])){
                    $map['credit'] =  $comment_img["credit"][0] ;
                }
                if(!empty($comment_img["security"])){
                    $map['security'] =  $comment_img["security"][0] ;
                }
                if (!empty($comment_img["bankflow"])){
                    $map['bankflow'] =  $comment_img["bankflow"][0] ;
                }
                if(!empty($comment_img["ownership"])){
                    $map['ownership'] =  $comment_img["ownership"][0] ;
                }


                //先根据user_id   和 good_id  查询该条记录是否存在， 如果存在则更新， 如果不存在则插入
                $ugData =  M('user_good_image')->where('user_id' , $user_id)->where('good_id' , $good_id)->find() ;
                if(empty($ugData)){
                    $resl =  M('user_good_image')->insert($map) ;
                    $user = request()->post('consignee');
                    $msg = '尊敬的'.$user.'用户，您刚下了一个新订单，请尽快到相应的门店完成后续提车的流程';
                     sendSms(request()->post('mobile'),$msg,'',$needstatus = 'true');
                }else{
                    //删除之前的图片
                    $this->freeImage($ugData) ;
                    $resl =  M('user_good_image')->where('user_id' , $user_id)->where('good_id' , $good_id)->save($map) ;
                    $user = request()->post('consignee');
                    $msg = '尊敬的'.$user.'用户，您刚下了一个新订单，请尽快到相应的门店完成后续提车的流程';
                    sendSms(request()->post('mobile'),$msg,'',$needstatus = 'true');
                }
                if($resl){
                    $e = new  ParameterException(array(
                        'msg' => '订单提交成功' ,
                        'errorCode' => '0',
                        'datas'  =>  null   ,
                    ));
                    throw  $e ;
                }else{
                    $e = new  ParameterException(array(
                        'msg' => '订单提交失败' ,
                        'errorCode' => '391026',
                        'datas'  =>  null   ,
                    ));
                    throw  $e ;
                }
            }else{
                $e = new  ParameterException(array(
                    'msg' => '订单提交失败' ,
                    'errorCode' => '391026',
                    'datas'  =>  null   ,
                ));
                throw  $e ;
            }

        }else{
            $e = new  ParameterException(array(
                'msg' => '订单提交失败' ,
                'errorCode' => '391026',
                'datas'  =>  null   ,
            ));
            throw  $e ;
        }
    }

}

























