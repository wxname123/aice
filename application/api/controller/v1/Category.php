<?php


namespace   app\api\controller\v1 ;

use  app\lib\exception\ParameterException ;

class  Category   extends  Base {

    public  function  gettopcategory(){
         $catModel =  model('Category');
         $catData =  $catModel->getTopList() ;
         if($catData){
             $e = new  ParameterException(array(
                 'msg' => 'success' ,
                 'errorCode' => '0',
                 'datas'  =>  $catData  ,
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
     *  获取顶级分类下的商品列表
     *  @param    $cat_id   int   :   分类id
     * */
    public  function  getCatGoodsList($cat_id , $page=0 , $per_page=10 ){
        $is_Inter =  isAppPositiveInteger($cat_id) ;
        if(!$is_Inter){
            $e = new  ParameterException(array(
                'msg' => '参数必须为正整数' ,
                'errorCode' => '391023',
                'datas'  =>  null  ,
            ));
            throw  $e ;
        }

        $is_page_Inter =   isPageInteger($page) ;
        $is_per_page_Inter =   isPageInteger($per_page) ;

        if(!$is_page_Inter  || !$is_per_page_Inter){
            $e = new  ParameterException(array(
                'msg' => '分页参数必须为整数' ,
                'errorCode' => '391022',
            ));
            throw  $e ;
        }

        $catModel =  model('Category');
        $goodsData =  $catModel->getCatListBy($cat_id, $page, $per_page);

        if(!empty($goodsData)){

            foreach ($goodsData as  $k =>  $v ){
                    $v['original_img'] = BASE_PATH . $v['original_img'];
                    $goodsData[$k] = $v ;
             }

            $e = new  ParameterException(array(
                'msg' => 'success' ,
                'errorCode' => '0',
                'datas'  =>  $goodsData  ,
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
     *  根据 导航栏上面传过来的编码 来选择查询那些数据， 例如 传1 ：表示查询“汽车整车” ， 2 ： 表示 “汽车配饰”  ， 3 ： “产品品牌”
     *  @param    $nav_id   int   :  导航栏对应的标签
     *  @return   Array
     * */
    public  function  getHomeList($nav_id){
        die("1111");
    }

}
















