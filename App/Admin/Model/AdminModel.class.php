<?php
namespace Admin\Model;
use Think\Model;
use Think\Verify;

class AdminModel extends Model{

    protected $_validate = array(
        array('username','require','管理员名称不得为空！',1),  // 都有时间都验证
        array('username','','管理员名称不得重复！',1,unique,1),
        array('username','','管理员名称不得重复！',1,unique,2),
        array('password','require','管理员密码不得为空！',1),
        array('verify','verify','验证码错误！',1,'callback',4),

    );

     //登录
     public function login($username,$password){
      //也可以不用传值  直接$this->username也可以
//         $admin= D('AdminView');

         $info=$this->where("username='$username'")->find();
         if($info) {
             $id = $info['id'];

            // $roles=$this->field('b.rolename')->alias('a')->join('LEFT JOIN cs_role b ON a.roleid=b.id')->where("a.id=$id")->find();
           //  $rolename=$roles['rolename'];

             if($info['password']==md5($password)){
                 session('id',$info['id']);
                 session('username',$info['username']);

                    //session('rolename',$info['rolename']);
                   // session('roleid',$info['roleid']);
                  // $this->getpri($info['roleid']);
                 // session('rolename',$rolename);
                //$this->getpri($info['roleid']);
                 $this->getpri($info['roleid']);
                 return true;
             } else {
                 return false;
             }
         }else{
             return false;
         }


     }



     public function getpri($roleid){
           $role=D('Role');
           $pri=D('privilege');
           $role->find($roleid);
           session('rolename',$role->rolename);
          if($role->pri_id_list=='*'){
              session('privilege','*');
              $menu=$pri->where("parentid=0")->select();

              foreach ($menu as $k => $v) {
                  $menu[$k]['sub']=$pri->where('parentid='.$v['id'])->select();
              }


              session('menu',$menu);

          }else{
              //Admin/Admin/add,    Admin/Article/add
              $pris=$pri->field('id,parentid,pri_name,mname,cname,aname,CONCAT(mname,"/",cname,"/",aname) url')->where("id IN({$role->pri_id_list})")->select();
              $_pris=array();
              $menu=array();

             foreach($pris as $k=>$v){
                 $_pris[]=$v['url'];
                if($v['parentid']==0){
                     $menu[]=$v;
                 }
             }
              session('privilege',$_pris);

              foreach ($menu as $k => $v) {
                  foreach ($pris as $k1 => $v1) {
                      if($v1['parentid']==$v['id']){
                          $menu[$k]['sub'][]=$v1;
                      }

                  }
              }
              session('menu',$menu);
          }


     }


    public  function verify($code){
        $Verify=new Verify();
        return $Verify->check($code);
    }
}