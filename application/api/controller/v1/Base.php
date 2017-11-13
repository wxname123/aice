<?php


namespace app\api\controller\v1 ;

use think\Controller;
use  app\common\memcache ;

class  Base  extends  Controller {

    public    $post= null ;
    protected  $memcache_obj = null ;

        public   function  _initialize()
        {
            parent::_initialize();

            $this->memcache_obj = memcache\Memcache::singleton() ;

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


        public  function  generateToken(){

        }
}






















