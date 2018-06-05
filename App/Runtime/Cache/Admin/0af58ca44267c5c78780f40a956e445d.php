<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>YANG 后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Tp3.2carshop/Public/Admin/css/common.css"/>
<link rel="stylesheet" type="text/css" href="/Tp3.2carshop/Public/Admin/css/main.css"/>

<script type="text/javascript" src="/Tp3.2carshop/Public/Admin/js/libs/modernizr.min.js"></script>
<script type="text/javascript" src="/Tp3.2carshop/Public/Admin/js/jquery-1.4.2.min.js"></script>

<script type="text/javascript" charset="utf-8" src="/Tp3.2carshop/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Tp3.2carshop/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Tp3.2carshop/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>

<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/Tp3.2carshop/index.php/Admin/Index/index">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/Tp3.2carshop/index.php/Admin/Admin/edit/id/<?php echo session('id');?>">欢迎您，<?php echo session('rolename');?>:<?php echo session('username');?></a></li>
                <li><a href="/Tp3.2carshop/index.php/Admin/Admin/edit/id/<?php echo session('id');?>">修改密码</a></li>
                <li><a href="/Tp3.2carshop/index.php/Admin/Index/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/Tp3.2carshop/index.php/Admin/Cate/lst"><i class="icon-font">&#xe008;</i>栏目管理</a></li>
                        <li><a href="/Tp3.2carshop/index.php/Admin/Article/lst"><i class="icon-font">&#xe005;</i>文章管理</a></li>
                        <li><a href="/Tp3.2carshop/index.php/Admin/Ly/lst"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="/Tp3.2carshop/index.php/Admin/Job/lst"><i class="icon-font">&#xe012;</i>求职信息</a></li>
                        <li><a href="/Tp3.2carshop/index.php/Admin/Link/lst"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="/Tp3.2carshop/index.php/Admin/System/lst"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="/Tp3.2carshop/index.php/Admin/Admin/lst"><i class="icon-font">&#xe006;</i>管理员管理</a></li>
                        <li><a href="/Tp3.2carshop/index.php/Admin/Privilege/lst"><i class="icon-font">&#xe037;</i>权限列表</a></li>
                        <li><a href="/Tp3.2carshop/index.php/Admin/Role/lst"><i class="icon-font">&#xe046;</i>角色列表</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

    <!--/sidebar-->
    <div class="main-wrap">

        <div class="result-wrap">



        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info">WINNT</span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">Apache/2.2.21 (Win64) PHP/5.3.10</span>
                    </li>
                    <li>
                        <label class="res-lab">PHP运行方式</label><span class="res-info">apache2handler</span>
                    </li>
                    <li>
                        <label class="res-lab">静静设计-版本</label><span class="res-info">v-0.1</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info">2014年3月18日 21:08:24</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info">localhost [ 127.0.0.1 ]</span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info">127.0.0.1</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>