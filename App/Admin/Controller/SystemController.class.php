<?php
namespace Admin\Controller;
use Think\Controller;

class SystemController extends CommonController{
    public function lst()
    {
         if(IS_POST) {
             $config=D('Footer');
             $data=array(
                 'domain'=>I('post.domain'),
                 'title'=>I('post.title'),
                 'keywords'=>I('post.keywords'),
                 'description'=>I('post.description'),
                 'email'=>I('post.email'),
                 'contact'=>I('post.contact'),
                 'fax'=>I('post.fax'),
                 'phone'=>I('post.phone'),
                 'icp'=>I('icp'),
                 'copy'=>I('post.copy'),
                 'address'=>I('post.address'),
                 'id'=>2,
             );

             if($config->create($data)){
                 if($config->save()){
                     $this->success('提交成功！',U('lst'));
                 }else{
                     $this->error('提交失败！');
                 }
             }
              return;
         }

          $config=D('Footer');



         $this->assign('config', $config->where('id=2')->find());
          $this->display();
    }
}