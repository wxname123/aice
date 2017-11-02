<?php


namespace app\api\controller\v1 ;

use think\Controller;

class  Base  extends  Controller {

    public    $post= null ;

        public   function  _initialize()
        {
            parent::_initialize();

            //1. 获取请求的数据
             $this->get_request_data() ;
        }


        public  function  get_request_data(){
            if(request()->isPost()){
                $postData = request()->getInput();
                $postData =  json_decode($postData ,true ) ;
                if(is_array($postData)){
                     $this->post = $postData ;
                }else{

                }

            }elseif (request()->isGet()){

            }
        }
}