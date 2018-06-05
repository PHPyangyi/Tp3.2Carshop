<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller{
    public function __construct()
    {
        parent::__construct();
        $cateid=I('cateid');
        $arid=I('arid');

        if($arid){
            $article=D('article');
            $articles=$article->find($arid);
            $cateid=$articles['cateid'];
        }

        $this->nav();
        $this->getcate($cateid);

    }
      private function getcate($cateid){
        if ($cateid){
            $cate=D('Cate');
            $cates=$cate->find($cateid);
/////////////////////
            $catesons=$cate->where('parentid='.$cates['id'])->select();

            if($cates['parentid']==0 && !$catesons){
                $cates=$cate->where("id=136")->find();
               $this->assign('contro',true);
            }
         $this->assign('catesons',$catesons);
     ////////////////////
            if($cates['class']==1){
                $son2=$cate->where('parentid='.$cates['id'])->select();
                $this->assign('son2',$son2);
                $this->assign('son3',null);
                $this->assign('topname',$cates['name']);



            }
            if($cates['class']==2){
                $topcates=$cate->where('id='.$cates['parentid'])->find();
                $son2=$cate->where('parentid='.$topcates['id'])->select();
                $son3=$cate->where('parentid='.$cates['id'])->select();
                $this->assign('son2',$son2);
                $this->assign('son3',$son3);
                $this->assign('topname',$topcates['name']);

            }
            if($cates['class']==3){
                $upercates=$cate->where('id='.$cates['parentid'])->find();//三级栏目对应的二级栏目
                $topcates=$cate->where('id='.$upercates['parentid'])->find();
                $son3=$cate->where('parentid='.$upercates['id'])->select();
                $son2=$cate->where('parentid='.$topcates['id'])->select();

                $this->assign('son2',$son2);
                $this->assign('son3',$son3);
                $this->assign('topname',$topcates['name']);
                $this->assign('son3pid',$upercates['id']);
            }
        }
    }

    private function  nav(){
          $cate=D('Cate');
          $where=array('parentid'=>0,'pc'=>1);
          $navres=$cate->field('id,name,type')->order('sort asc')->where($where)->select();
          $this->assign('navres',$navres);
    }

}