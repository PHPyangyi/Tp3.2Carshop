<?php
namespace Admin\Controller;
use Think\Controller;

class  AdminController extends  CommonController{
    public function lst(){
        $admin=D('AdminView');
        $count=$admin->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出
        $list = $admin->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function add(){
        if(IS_POST){
            $admin=D('admin');
            if($admin->create()){
                $admin->password=md5($admin->password);
                if($admin->add()){
                    $this->success('添加管理员成功！',U('lst'));
                }else{
                    $this->error('添加管理员失败');
                }
            }else{
                $this->error($admin->getError());
            }

            return;
        }
        $role=D('role');
        $roles=$role->select();
        $this->assign('roles',$roles);
        $this->display();
    }


    public function updata(){
        $admin=D('admin');
        if(IS_POST){
            if($admin->create()){
                $admin->password=md5($admin->password);
                if($admin->save()){
                    $this->success('修改管理员成功！',U('lst'));
                }else{
                    $this->error('修改管理员失败');
                }
            }else{
                $this->error($admin->getError());
            }

            return;
        }
        $id=I('id');
        $adminres=$admin->find($id);
        $this->assign('adminres',$adminres);
        $role=D('role');
        $roles=$role->select();
        $this->assign('roles',$roles);
        $this->display();
    }
    public function del(){
        $admin=D('Admin');
        $id=I('id');
        if($admin->delete($id)){
            $this->success('删除管理员成功！',U('lst'));
        }else{
            $this->error('删除管理员失败');
        }

    }
    public function bdel(){
        $link=D('Admin');
        $ids=I('post.ids');
        $ids=implode(',', $ids);  //1,2,3,4
        if($link->delete($ids)){
            $this->success('删除管理员成功！',U('lst'));
        }else{
            $this->error('删除管理员失败');
        }

    }



}