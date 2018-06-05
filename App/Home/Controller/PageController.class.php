<?php
namespace Home\Controller;
use Think\Controller;
class PageController extends CommonController {
    public function index(){
        $cateid=I('cateid');
        $cate=D('Cate');
        $article=D('Article');
        $articles=$article->where('cateid='.$cateid)->find();


        $cates=$cate->find($cateid);
        $this->assign( 'article',$articles);
        $this->assign('cates',$cates);

        $this->display();
    }
}