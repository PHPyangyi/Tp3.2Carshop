<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>链接列表——后台管理</title>
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

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">链接管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i><input form="myform" formaction="/Tp3.2carshop/index.php/Admin/Ly/bdel" type="submit" class="btn btn-primary btn2" value="批量删除" /></a>
                        
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" id='check' type="checkbox"></th>
                            
                            <th>ID</th>
                            <th>姓名</th>
                            <th>手机号码</th>
                            <th>电子邮箱</th>
                            <th>审核状态</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="ids[]" value="<?php echo ($vo["id"]); ?>" class="check" type="checkbox"></td>
                            
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["nickname"]); ?></td>
                            <td>
                            <?php echo ($vo["telephone"]); ?>
                            </td>
                            <td>
                             <?php echo ($vo["email"]); ?>
                            </td>
                            <td>
                             <?php if($vo['checked'] == 1): ?>审核通过
                             <?php else: ?>
                             审核未通过<?php endif; ?>
                            </td>
                            <td>
                                <a class="link-update" href="/Tp3.2carshop/index.php/Admin/Ly/reply/id/<?php echo ($vo["id"]); ?>">回复</a>
                                <a class="link-update" href="/Tp3.2carshop/index.php/Admin/Ly/checked/id/<?php echo ($vo["id"]); ?>">审核</a>
                                <a class="link-del" onclick="return confirm('确定删除此链接吗？');" href="/Tp3.2carshop/index.php/Admin/Ly/del/id/<?php echo ($vo["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
<script type="text/javascript">
    $("#check").click(function(){
        if($(this).attr("checked"))
        {
            $(".check").attr("checked","checked")
        }else
        {
            $(".check").removeAttr("checked")
        }
    })
</script>