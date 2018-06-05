<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends  CommonController {
    public function index()
    {
        $this->display();
    }

    public function logout(){
        session(null);
        $this->success('退出成功！',U('Login/index'));
    }
}