<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends  CommonController{
    public function index(){
         $arid=I('arid');
         $article=D('Article');
         $cate=D('Cate');
         $articles=$article->where(array('id'=>$arid))->find();
         $cates=$cate->find($articles['cateid']);


        $this->assign('cate',$cates);
         $this->assign('data',$articles);
        $this->display();
    }
}