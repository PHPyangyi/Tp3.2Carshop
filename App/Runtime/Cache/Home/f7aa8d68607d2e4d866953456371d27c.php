<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>人才招聘_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

 <script type="text/javascript" src="/Tp3.2carshop/Public/Home/style/urlredirect.js"></script>
<LINK href="/Tp3.2carshop/Public/Home/style/style.css" rel=stylesheet>
<LINK href="/Tp3.2carshop/Public/Home/style/jbox.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/functions.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/validForm/FormValid.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/jbox/jquery.jBox-2.3.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/search.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/menu.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/jQselect.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/slides.min.jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/jquery.touchSlider.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2carshop/Public/Home/style/ajax.js"></script>
<script type="text/javascript"><!--ibanner-->

$(document).ready(function () {
	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
		},function(){
		$("#btn_prev,#btn_next").fadeOut()
		})
	$dragBln = false;
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e) {
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	})
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	})
	$(".main_image a").click(function() {
		if($dragBln) {
			return false;
		}
	})
	timer = setInterval(function() { $("#btn_next").click();}, 5000);
	$(".main_visual").hover(function() {
		clearInterval(timer);
	}, function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
	$(".main_image").bind("touchstart", function() {
		clearInterval(timer);
	}).bind("touchend", function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
});
</script>
<script><!--pro-->
		$(function(){
			// Set starting slide to 1
			var startSlide = 1;
			// Get slide number if it exists
			if (window.location.hash) {
				startSlide = window.location.hash.replace('#','');
			}
			// Initialize Slides
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				generatePagination: true,
				play: 0,
				pause: 2500,
				hoverPause: true,
				// Get the starting slide
				start: startSlide,
				animationComplete: function(current){
					// Set the slide number as a hash
					//window.location.hash = '#' + current;
				}
			});
		});
</script>
<!--[if IE 6]><script type="text/javascript" src="js/DD_belatedPNG.js"></script><![endif]-->
</head>
<body>
<div class="fixed"> <a href="book.php" title="留言" class="barbook"></a> <a href="javascript:;" title="二维码" class="codepic"></a> <a href="javascript:;" title="返回顶部" class="backup"></a>
  <div> <img src="http://0001543.ks.panguweb.cn/upfile/qr/qrcode.png" alt="这里是您的网站名称" class="code" /> </div>
</div>

<div class="head">
    <div class="headtop">
        <div class="fra1">
            <a href="index.php" title="这里是您的网站名称"><img src="/Tp3.2carshop/Public/Home/images/logo.png" alt="这里是您的网站名称" /></a>
            <div class="head-right">
                <span><font>租车<br />热线 </font><label>+86-0000-96877</label></span>
                <div class="search">
                    <form id="search" name="search" method="get" action="http://0001543.ks.panguweb.cn/search.php">

                        <input type="text" class="text pngFix" name="kws" id="kws" value="请输入搜索关键词"/>
                        <div class="select pngFix">
                            <select id="rid" style="display: none" name="rid">
                                <option value="1" selected="selected">新闻资讯</option>
                                <option value="2" >车辆展示</option>
                                <option value="4" >主要车型</option>
                                <option value="8" >资质荣誉</option>
                            </select>
                        </div>
                        <input type="submit" title="搜索" class="button" value=""/>
                    </form>
                    <script type=text/javascript>
                        jQuery(document).ready(function() {
                            jQuery("#rid").selectbox();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="nav">
        <ul>
            <li><a title="网站首页" href="/Tp3.2carshop/index.php" class="">网站首页</a></li>
            <?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a title="<?php echo ($vo["name"]); ?>" href="/Tp3.2carshop/index.php/Home/<?php if($vo['type'] == 1): ?>Arlist<?php elseif($vo['type'] == 2): ?>Page<?php elseif($vo['type'] == 3): ?>Message<?php elseif($vo['type'] == 4): ?>Zplist<?php elseif($vo['type'] == 5): ?>Carlist<?php elseif($vo['type'] == 6): ?>Rylist<?php elseif($vo['type'] == 7): ?>Job<?php endif; ?>/index/cateid/<?php echo ($vo["id"]); ?>" class=""><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>

</div>
    
</div>
<script type="text/javascript">
function ckvaild (inp) {
	$.ajax({type:"GET", url:"http://0001543.ks.panguweb.cn/ajax.php?r="+Math.random()+'&action=ckvaild&vaild='+inp.value, dataType:"text",async:false,success:function (msg){
		r = msg;
	}}); 
	if (r==0) {
		$("#verify").attr("src",'../valid.php?rand='+Math.random()*5);
		return false;
	} else {
		return true;
	}
}
</script>
<div class="fy" style=" background:url(./images/20150804113438-369103644.jpg) center top no-repeat;">
    <div class="fra">
        <div class="fyLeft">

    <div class="l_pro">
        <div class="l_pro_t"><?php echo ($topname); ?></div>
        <ul class="l_procon">




            <?php foreach($son2 as $k=>$v): $cateid=$v['id']; if($contro){ $url="/Tp3.2carshop/index.php/Home/Carlist/index/cateid/$cateid"; }else{ $url="/Tp3.2carshop/index.php/Home/Job/index/cateid/$cateid"; } ?>


            <li class="proOne"><a title="<?php echo $v['name'];?>" href="<?php echo $url;?>"><?php echo $v['name'];?></a>


                <ul>

                    <?php if($v['id']==$_GET['cateid'] || $v['id']==$son3pid):?>

                    <?php foreach($son3 as $k1=>$v1): ?>

                    <li><a style="margin-left:40px;"   href="/Tp3.2carshop/index.php/Home/Job/index/cateid/<?php echo $v1['id'];?>"   title="<?php echo $v1['name'];?>" ><?php echo $v1['name'];?></a></li>

                    <?php endforeach;?>

                    <?php endif;?>

                </ul>

            </li>

            <?php endforeach;?>


        </ul>
    </div>
    <div class="fl-contact">
        <div class="l_pro_t1">联系我们</div>
        <p><img src="images/cont.jpg" alt="联系我们" width="200" height="98" /></p>
        <div class="fl-con">电话：+86-0000-96877<br />
            传真：+86-0000-96877<br />
            地址：这里是您的公司地址<br />
            邮箱：这里是您公司的邮箱地址</div>
    </div>
   </div>
  <div class="fyRight">
      <div class="title"> <span class="fl"> 人才招聘</span> <span class="fr">当前位置：<a href="http://0001543.ks.panguweb.cn/" title="首页">首页</a> > <font>人才招聘</font> </span></div>
      <div class="hrfra">
           <form method="post" name="hrform" id="hrform" action="">
        <input type="hidden" name="j_id" value="" />
        <input type="hidden" name="action" value="save" />
        <table width="95%" border="0" cellspacing="0" cellpadding="3" align="center" class="hr"> 
            <tr>
            <td height="40" colspan="4" align="center" class="bord"><h2>求职表</h2></td>
            </tr>
            <tr>
            <td height="25" align="right"  class="bord"><span class="c_red">*</span>应聘职位：</td>
            <td height="25" colspan="3" align="left" class="bord">
            <input type="text" name="j_title" style="color:#999" size="50" maxlength="30" readonly="readonly" value="UI设计师" />
            </td>
            </tr>
            <tr>
            <td height="25" align="right"  class="bord"><span class="c_red">*</span>真实姓名：</td>
            <td height="25" align="left" class="bord">
            <input type="text" name="j_name" size="15" maxlength="30" valid="required" errmsg="请输入真实姓名！" />
            </td>
            <td height="25" align="right" class="bord">性别：</td>
            <td height="25" align="left" class="bord">
            <input type="radio" name="j_sex" value="男" checked="checked" />
            男　
            <input type="radio" name="j_sex" value="女" />
            女 </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">民族：</td>
            <td width="27%" height="25" align="left" class="bord">
            <select name="j_nation">
            <option value="">---请选择---</option>
            <option value="汉族">汉族</option>
            <option value="蒙古族">蒙古族</option>
            <option value="回族">回族</option>
            <option value="藏族">藏族</option>
            <option value="维吾尔族">维吾尔族</option>
            <option value="苗族">苗族</option>
            <option value="彝族">彝族</option>
            <option value="壮族">壮族</option>
            <option value="布依族">布依族</option>
            <option value="朝鲜族">朝鲜族</option>
            <option value="满族">满族</option>
            <option value="侗族">侗族</option>
            <option value="瑶族">瑶族</option>
            <option value="白族">白族</option>
            <option value="土家族">土家族</option>
            <option value="哈尼族">哈尼族</option>
            <option value="哈萨克族">哈萨克族</option>
            <option value="傣族">傣族</option>
            <option value="黎族">黎族</option>
            <option value="傈僳族">傈僳族</option>
            <option value="佤族">佤族</option>
            <option value="畲族">畲族</option>
            <option value="高山族">高山族</option>
            <option value="拉祜族">拉祜族</option>
            <option value="水族">水族</option>
            <option value="东乡族">东乡族</option>
            <option value="纳西族">纳西族</option>
            <option value="景颇族">景颇族</option>
            <option value="柯尔克孜族">柯尔克孜族</option>
            <option value="土族">土族</option>
            <option value="达斡尔族">达斡尔族</option>
            <option value="仡佬族">仡佬族</option>
            <option value="羌族">羌族</option>
            <option value="布朗族">布朗族</option>
            <option value="撒拉族">撒拉族</option>
            <option value="毛难族">毛难族</option>
            <option value="仫佬族">仫佬族</option>
            <option value="锡伯族">锡伯族</option>
            <option value="阿昌族">阿昌族</option>
            <option value="普米族">普米族</option>
            <option value="塔吉克族">塔吉克族</option>
            <option value="怒族">怒族</option>
            <option value="乌兹别克族">乌兹别克族</option>
            <option value="俄罗斯族">俄罗斯族</option>
            <option value="鄂温克族">鄂温克族</option>
            <option value="崩龙族">崩龙族</option>
            <option value="保安族">保安族</option>
            <option value="裕固族">裕固族</option>
            <option value="京族">京族</option>

            <option value="塔塔尔族">塔塔尔族</option>
            <option value="独龙族">独龙族</option>
            <option value="鄂伦春族">鄂伦春族</option>
            <option value="赫哲族">赫哲族</option>
            <option value="门巴族">门巴族</option>
            <option value="珞巴族">珞巴族</option>
            </select>
            </td>
            <td width="17%" height="25" align="right" class="bord">出生日期：</td>
            <td width="42%" height="25" align="left" class="bord">
            <input type="text" name="j_age" size="15"/> </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">婚姻状况：</td>
            <td width="27%" height="25" align="left" class="bord">
            <select name="j_marry">
            <option value="">---请选择---</option>
            <option value="未婚">未婚</option>
            <option value="已婚">已婚</option>
            </select>
            </td>
            <td width="17%" height="25" align="right" class="bord">有无子女：</td>
            <td width="42%" height="25" align="left" class="bord">
            <select name="j_child">
            <option value="">---请选择---</option>
            <option value="有">有</option>
            <option value="无">无</option>
            </select>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">籍贯：</td>
            <td width="27%" height="25" align="left" class="bord">
            <select name="j_bplace">
            <option value="">---请选择---</option>
            <option value="北京市">北京市</option>
            <option value="天津市">天津市</option>
            <option value="河北省">河北省</option>
            <option value="山西省">山西省</option>
            <option value="内蒙古">内蒙古</option>
            <option value="辽宁省">辽宁省</option>
            <option value="吉林省">吉林省</option>
            <option value="黑龙江">黑龙江</option>
            <option value="上海市">上海市</option>
            <option value="江苏省">江苏省</option>
            <option value="浙江省">浙江省</option>
            <option value="安徽省">安徽省</option>
            <option value="福建省">福建省</option>
            <option value="江西省">江西省</option>
            <option value="山东省">山东省</option>
            <option value="河南省">河南省</option>
            <option value="湖北省">湖北省</option>
            <option value="湖南省">湖南省</option>
            <option value="广东省">广东省</option>
            <option value="广  西">广  西</option>
            <option value="海南省">海南省</option>
            <option value="重庆市">重庆市</option>
            <option value="四川省">四川省</option>
            <option value="贵州省">贵州省</option>
            <option value="云南省">云南省</option>
            <option value="西  藏">西  藏</option>
            <option value="陕西省">陕西省</option>
            <option value="甘肃省">甘肃省</option>
            <option value="青海省">青海省</option>
            <option value="宁  夏">宁  夏</option>
            <option value="新  疆">新  疆</option>
            <option value="台湾省">台湾省</option>
            <option value="香  港">香  港</option>
            <option value="澳  门">澳  门</option>
            </select>
            </td>
            <td width="17%" height="25" align="right" class="bord">户口所在地：</td>
            <td width="42%" height="25" align="left" class="bord">
            <select name="j_address">
            <option value="">---请选择---</option>
            <option value="北京市">北京市</option>
            <option value="天津市">天津市</option>
            <option value="河北省">河北省</option>
            <option value="山西省">山西省</option>
            <option value="内蒙古">内蒙古</option>
            <option value="辽宁省">辽宁省</option>
            <option value="吉林省">吉林省</option>
            <option value="黑龙江">黑龙江</option>
            <option value="上海市">上海市</option>
            <option value="江苏省">江苏省</option>
            <option value="浙江省">浙江省</option>
            <option value="安徽省">安徽省</option>
            <option value="福建省">福建省</option>
            <option value="江西省">江西省</option>
            <option value="山东省">山东省</option>
            <option value="河南省">河南省</option>
            <option value="湖北省">湖北省</option>
            <option value="湖南省">湖南省</option>
            <option value="广东省">广东省</option>
            <option value="广  西">广  西</option>
            <option value="海南省">海南省</option>
            <option value="重庆市">重庆市</option>
            <option value="四川省">四川省</option>
            <option value="贵州省">贵州省</option>
            <option value="云南省">云南省</option>
            <option value="西  藏">西  藏</option>
            <option value="陕西省">陕西省</option>
            <option value="甘肃省">甘肃省</option>
            <option value="青海省">青海省</option>
            <option value="宁  夏">宁  夏</option>
            <option value="新  疆">新  疆</option>
            <option value="台湾省">台湾省</option>
            <option value="香  港">香  港</option>
            <option value="澳  门">澳  门</option>
            </select>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">学历：</td>
            <td height="25" align="left" class="bord">
            <select name="j_education">
            <option value="" selected="selected">---请选择---</option>
            <option value="博士">博士</option>
            <option value="硕士">硕士</option>
            <option value="本科">本科</option>
            <option value="大专">大专</option>
            <option value="职高及中专">职高及中专</option>
            <option value="高中以下">高中以下</option>
            </select>
            </td>
            <td height="25" align="right" class="bord"><span class="STYLE2">外语语种及程度：</span></td>
            <td height="25" align="left" class="bord">
            <input type="text" name="j_foreign" size="18" maxlength="35" />
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord"><span class="c_red">*</span>移动电话：</td>
            <td width="27%" height="25" align="left" class="bord">
            <input type="text" name="j_mobile" size="20" maxlength="11" valid="required|isMobile" errmsg="请输入移动电话！|移动电话格式不正确！" />
            </td>
            <td width="17%" height="25" align="right" class="bord">电子邮件：</td>
            <td width="42%" height="25" align="left" class="bord">
            <input type="text" name="j_email" size="25" maxlength="35" valid="isEmail" errmsg="电子邮件格式不正确！" />
            </td>
            </tr>
            <tr>
            <td height="25" align="right" class="bord">身份证号：</td>
            <td height="25" align="left" class="bord">
            <input type="text" name="j_idnums" maxlength="36" value="" valid="isIdCard" errmsg="身份证号码格式不正确！" />
            </td>
            <td height="25" align="right" class="bord"><span class="STYLE2">现住址：</span></td>
            <td height="25" align="left" class="bord">
            <input type="text" name="j_address_now" size="40" maxlength="20" />
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">可到职日期：</td>
            <td height="25" colspan="3" align="left" class="bord">
            <select name="j_slim">
            <option value="随时" selected="selected">---随时---</option>
            <option value="1周内">1周内</option>
            <option value="1月内">1月内</option>
            </select>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">备注：</td>
            <td height="25" colspan="3" align="left" class="bord">
            <textarea name="j_content" cols="60" rows="5"></textarea>
            </td>
            </tr>
            
            <tr>

             
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td height="76" align="center">
            <input type="submit" name="hrsbtn" class="hr_btn" style="cursor:pointer;" value="提交求职表" title="提交求职表"   />
            </td>
            </tr>
        </table>
        </form>
        </div>
    </div>
</div>
</div>
<div class="clear"></div>

<div class="foot">
    <div class="foot-map">
        <div class="foot-mleft">
            <div class="site">网站地图（<a href="sitemap.xml" target="_blank">xml</a> / <a href="sitemap.html" target="_blank">html</a>）</div>
            <ul>
                <li>
                    <a href="index.php" title="网站首页">网站首页</a>

                    <a href="http://0001543.ks.panguweb.cn/about.php" title="关于我们">关于我们</a>

                    <a href="http://0001543.ks.panguweb.cn/product.php" title="车辆展示">车辆展示</a>

                    <a href="http://0001543.ks.panguweb.cn/news.php" title="新闻资讯">新闻资讯</a>
                </li>
                <li>

                    <a href="http://0001543.ks.panguweb.cn/case.php" title="主要车型">主要车型</a>

                    <a href="http://0001543.ks.panguweb.cn/honor.php" title="资质荣誉">资质荣誉</a>

                    <a href="http://0001543.ks.panguweb.cn/notice.php" title="租车须知">租车须知</a>

                    <a href="http://0001543.ks.panguweb.cn/hr.php" title="人才招聘">人才招聘</a>
                </li>

                <li>

                    <a href="http://0001543.ks.panguweb.cn/book.php" title="在线留言">在线留言</a>

                    <a href="http://0001543.ks.panguweb.cn/contact.php" title="联系我们">联系我们</a>
                </li>

            </ul>
        </div>
        <div class="foot-tel"><p>热线电话<br /><label>+86-0000-96877</label></p><span>7x24小时全国客服热线，全年无休</span></div>
        <p class="foot-er"><img src="images/er.gif" alt="" width="123" height="121" /><br />扫一扫关注我们</p>
    </div>
    <div class="clear"></div>
    <div class="footlink">
        <b class="name">友情链接： </b>
        <div class="linka">
            <a href="http://www.baidu.com" target="_blank">百度</a>

        </div>
    </div>
    <div class="foot-con">
        <div class="foot-left">电话：+86-0000-96877     传真：+86-0000-96877     地址：     版权所有：这里是您的网站名称<br />
            技术支持：<a href="http://www.pangu.us" target="_blank" title="盘古网络－提供基于互联网的全套解决方案" >盘古网络</a><a href="http://ks.pangu.us" target="_blank" title="盘古建站－快速开展网络营销的利器">【盘古建站】</a>ICP备案编号：<a href="http://www.miitbeian.gov.cn/" title="备********号" target="_blank">备********号</a></div>
        <div class="newsshare"><div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页" href="#"></a></div>
            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
    </div>
</div>

    </body>
</html>