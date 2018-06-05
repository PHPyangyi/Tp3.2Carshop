<?php
namespace Admin\Controller;
use Think\Controller;

class LinkController extends CommonController{
    public function lst(){

        $link=D('Link');
        $links=$link->select();
        $this->assign('linkres',$links);
        $this->display();


    }
    public function add(){
        if(IS_POST){
            $link=D('Link');
            $data=array(
                'title'=>I('post.title'),
                'url'=>I('post.url'),
                'des'=>I('post.des'),
                'sort'=>$link->max('id')+1,
            );
            if($link->create($data)){
               if($link->add()){
                   $this->success('新增链接成功！',U('lst'));
               }else{
                   $this->error('新增链接失败！');
               }
            }else{
                $this->error($link->getError());
            }

            return;
        }
        $this->display();
    }
    public function updata(){
        $link=D('Link');
        if(IS_POST){
            if($link->create()){
                if($link->save()){
                    $this->success('修改链接成功！',U('lst'));
                }else{
                    $this->error('修改链接失败！');
                }
            }else{
                $this->error($link->getError());
            }


            return;
        }
        $id=I('id');
        $links=$link->find($id);
        $this->assign('links',$links);
        $this->display();
    }

    public function del(){
        $link=D('Link');
        $id=I('id');
        if($link->delete($id)){
            $this->success('删除链接成功！',U('lst'));
        }else{
            $this->error('删除链接失败！');
        }
    }

    public function bdel(){
        $link=D('Link');
        $ids=I('post.ids');
        $ids=implode(',', $ids);  //1,2,3,4
        if($link->delete($ids)){
            $this->success('删除链接成功！',U('lst'));
        }else{
            $this->error('删除链接失败！');
        }

    }
    public function sortlink(){
        $link=D('Link');
        $data=$_POST;
        foreach ($data as $id=>$sort){
            $link->where("id=$id")->setField('sort',$sort);
        }
        $this->success('成功更新栏目顺序！',U('lst'));
    }
}