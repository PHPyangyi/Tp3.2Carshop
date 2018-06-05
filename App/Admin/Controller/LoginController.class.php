<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
//use Think\zhttfs;

class LoginController extends Controller {

    public function index(){
        if(IS_POST){
            $admin=D('Admin');
            if($admin->create($_POST,4)){

             if($admin->login(I('post.username'),I('post.password'))){
             $this->success('登录中...',U('index/index'));
                 exit();
             }else{
                 $this->error('用户名或密码错误！');
             }

            }else{
                $this->error($admin->getError());
            }
            return;
        }
        $this->display();
    }

    public function verify(){
       $config=array(
            'useNoise'=>false,//关闭验证码杂点
             'useCurve' => false,
            'length'=>4,
    );
        $Verify=new Verify($config);
//        $Verify->fontttf = 'msyhbd.ttf';
//        $Verify->useZh = true;     //中文验证码  装逼用

        $Verify->entry();
    }







}
