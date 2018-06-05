<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
  <link rel="stylesheet" type="text/css" href="/Tp3.2carshop/Public/Admin/css/common.css"/>
<link rel="stylesheet" type="text/css" href="/Tp3.2carshop/Public/Admin/css/main.css"/>

<script type="text/javascript" src="/Tp3.2carshop/Public/Admin/js/libs/modernizr.min.js"></script>
<script type="text/javascript" src="/Tp3.2carshop/Public/Admin/js/jquery-1.4.2.min.js"></script>

<script type="text/javascript" charset="utf-8" src="/Tp3.2carshop/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Tp3.2carshop/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Tp3.2carshop/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>

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
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/think/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">系统设置</span></div>
        </div>
        <div class="result-wrap">
            <form action="" method="post" id="myform" name="myform">
                <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe00a;</i>网站信息设置</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tr>
                                <th width="15%"><i class="require-red">*</i>域名：</th>
                                <td><input type="text" id="" value="<?php echo ($config["domain"]); ?>" size="85" name="domain" class="common-text"></td>
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>站点标题：</th>
                                    <td><input type="text" id="" value="<?php echo ($config["title"]); ?>" size="85" name="title" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>关键字：</th>
                                    <td><input type="text" id="" value="<?php echo ($config["keywords"]); ?>" size="85" name="keywords" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>描述：</th>
                                    <td><input type="text" id="" value="<?php echo ($config["description"]); ?>" size="85" name="description" class="common-text"></td>
                                </tr>
                                
                    </div>
                </div>
                <div class="config-items">
                   
                    <div class="result-content">
                       
                            <tr>
                                <th width="15%"><i class="require-red">*</i>网站联系邮箱：</th>
                                <td><input type="text" id="" value="<?php echo ($config["email"]); ?>" size="85" name="email" class="common-text"></td>
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>联系人：</th>
                                    <td><input type="text" id="" value="<?php echo ($config["contact"]); ?>" size="85" name="contact" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>传真：</th>
                                    <td><input type="text" id="" value="<?php echo ($config["fax"]); ?>" size="85" name="fax" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>联系电话：</th>
                                    <td><input type="text" id="" value="<?php echo ($config["phone"]); ?>" size="85" name="phone" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>备案ICP：</th>
                                    <td><input type="text" id="" value="<?php echo ($config["icp"]); ?>" size="85" name="icp" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>版权声明：</th>
                                    <td><input type="text" id="" value="<?php echo ($config["copy"]); ?>" size="85" name="copy" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>地址：</th>
                                    <td><input type="text" id="" value="<?php echo ($config["address"]); ?>" size="85" name="address" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" value="提交" class="btn btn-primary btn6 mr10">
                                        <input type="button" value="返回" onclick="history.go(-1)" class="btn btn6">
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>