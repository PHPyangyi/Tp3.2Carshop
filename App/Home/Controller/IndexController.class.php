<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index()
    {
        $article=D('Article');
        $cate=D('Cate');
        $cates=$cate->field('id')->where('type=5')->select();
        foreach ($cates as $k=>$v){
            $ids[]=$v['id'];
        }
        $ids=implode(',',$ids);
        $map['cateid']=array('in',$ids );
        $articles=$article->where($map)->select();


        ////新闻
        $arlist=$cate->field('id')->where('type=1')->select();
        foreach ($arlist as $k=>$v){
            $arid[]=$v['id'];
        }
        $arids=implode(',',$arid);
        $map['cateid']=array('in',$arids );
        $arlists=$article->where($map)->order('id desc')->limit(3)->select();
      //关于
        $gy= $article->where('id=60')->find();
      //荣誉
        $rylist=$cate->field('id')->where('type=6')->select();
        foreach ($rylist as $k=>$v){
            $ryid[]=$v['id'];
        }
        $ryids=implode(',',$ryid);
        $map['cateid']=array('in',$ryids );
        $rylists=$article->where($map)->order('id desc')->limit(3)->select();



        $this->assign('rylist',$rylists);
        $this->assign('gy',$gy);
        $this->assign('arlist',$arlists);
        $this->assign('car',$articles);
        $this->display();
    }
}