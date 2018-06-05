<?php
namespace Home\Controller;
use Think\Controller;
class RylistController extends   CommonController  {
    public function index(){

        $cateid=I('cateid');

        /// 只能找到3级
        $cate=D('Cate');
        $id=$cate->find($cateid);
        if($id['parentid']==0){

            $num=$cate->field('id')->where('parentid='.$cateid)->select();
            if($num) {
                foreach ($num as $k => $v) {
                    $ids[] = $v['id'];
                }
                $num = implode(',', $ids);
                $map['parentid'] = array('in', $num . ',' . $cateid);
                $yang = $cate->field('id')->where($map)->select();

            }
        }else{
            //不是顶级  找一个就可以了
            $yang=$cate->field('id')->where('parentid='.$cateid)->select();
        }

        foreach ($yang as $k=>$v){
            $ids[] = $v['id'];
        }
        $num=implode(',',$ids);



        $article=D('article');
        $count=$article->where("cateid=$cateid")->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出

         $map['cateid'] = array('in',$num.','.$cateid);
         $list=$article->where($map)->order('time asc')->limit($Page->firstRow.','.$Page->listRows)->select();

       // $list =$article->where("cateid=$cateid")->order('time asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
}