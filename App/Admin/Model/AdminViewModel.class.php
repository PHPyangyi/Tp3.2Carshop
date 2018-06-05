<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class AdminViewModel extends ViewModel
{
    public $viewFields = array(
        'admin'=>array('id','username','password','roleid','_type'=>'LEFT'),
        'role'=>array('rolename','_on'=>'admin.roleid=role.id')
    );





























}