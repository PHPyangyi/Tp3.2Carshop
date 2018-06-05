<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller{
    public function __construct()
    {
        parent::__construct();

        if(!session('id')){
            $this->error('请先登录系统！',U('Login/index'));
        }
         if(session('privilege')!='*' && !in_array(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME,session('privilege'))){
         $this->error('没有权限访问该功能！');
        }
    }
}