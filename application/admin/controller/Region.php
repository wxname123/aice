<?php

namespace  app\admin\controller ;
use think\Page;
use think\Request;




class  Region extends  Base{
    protected  $global = 0 ;


    public  function  region(){
        $act =  $this->request->param('act') ;
        $region_id =  $this->request->param('region_id') ;
        if($region_id){
                //查询出该region_id 对应的数据
//             $info =   D('tp_region2')->where('id' , $region_id)->find();
             $info =   D('region2')->alias('r2')->field('r2.name  name2  , r3.name  name3  , r4.name  name4')
                                                ->join('tp_region2 r3', 'r3.id = r2.parent_id')
                                                ->join('tp_region2 r4', 'r4.id = r3.parent_id')
                                                ->where('r2.id', $region_id)
                                                ->find();

//             if($act == 'add')
                 $this->assign('info', $info);
                 $this->assign('act', $act ) ;
                 return  $this->fetch();
        }
    }


    //区域列表页
    public  function  reList(){
        //清除缓存
        delFile(RUNTIME_PATH . 'html') ;
        $Region = M('region2');

              $keywords = I('keywords',false , 'trim');
              if($keywords){
                  $where['name'] = array('like' , '%'.$keywords.'%');
              }

//          $count = $Region->where($where)->count() ;
//        $Page = $pager = new Page($count,10);
//        $res = $Region->where($where)->order('level asc')->limit($Page->firstRow.','.$Page->listRows)->select();


        //获取省份数据
            $province_list =  $Region->where($where)->where('parent_id','eq', '0')->where('level', 'eq', '1')->select() ;

            //递归循环便利省份数据，获取到下面的每一个市和区
//            if($this->request->isPost()){
                if(!empty($province_list)){
                    $cList =  $this->getRegionTree($Region  ,$province_list , 2) ;
                }
//            }

            //便利cList，获取到level=3 的统计数
            $count =  $this->getCountTree($cList);
        $Page = $pager = new Page($count,10);
        $this->assign('region_list' , $cList) ;
        $show = $Page->show();// 分页显示输出
//        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('pager',$pager);
        return  $this->fetch();
    }

    //递归获取到数组中满足某个条件的数据
    public  function   getCountTree($data){
        if(!is_array($data)){
            return ;
        }
        foreach ($data as $k => $v ){
            if(is_array($v['city'])){
                $data2 = $v['city'];
                foreach ($data2 as $k2 => $v2 ){
                        if(is_array($v2['region'])){
                                $data3 = $v2['region'];
                                foreach($data3 as $k3 => $v3 ){
                                    if($v3['level'] == 3){
                                          $this->global += 1 ;
                                    }
                                }
                        }
                }
            }
        }
        return $this->global ;
    }


    //递归调用
    public  function getRegionTree( $Region ,$data, $level ){
        $globalData = [] ;
        foreach ($data as $k =>  $v  ){
            $subData = $Region->where('parent_id','eq',$v['id'])
                ->where('level', 'eq',$level)
                ->select() ;
            $data[$k]['city'] = $subData ;

            if(!empty($data[$k]['city'])){
                foreach($data[$k]['city']  as  $k2=>$v2 ){
                    $threeData = $Region->where('parent_id','eq',$v2['id'])
                        ->where('level', 'eq',$level+1)
                        ->select() ;
                    $data[$k]['city'][$k2]['region'] = $threeData ;
                }
            }
        }
        return  $data ;
    }
}