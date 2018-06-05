<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关于我们_这里是您的网站名称</title>
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
            <li><a href="http://localhost/Tp3.2carshop/" title="网站首页">网站首页</a></li>
            <li><a href="http://localhost/Tp3.2carshop/Page" title="关于我们">关于我们</a></li>
            <li><a href="http://localhost/Tp3.2carshop/Carlist" title="车辆展示">车辆展示</a></li>
            <li><a href="http://localhost/Tp3.2carshop/Arlist" title="新闻资讯">新闻资讯</a></li>
            <li><a href="###" title="主要车型">主要车型</a></li>

            <li><a href="http://localhost/Tp3.2carshop/Rylist" title="资质荣誉">资质荣誉</a></li>
            <li><a href="http://localhost/Tp3.2carshop/Zplist" title="租车须知">租车须知</a></li>
            <li><a href="http://localhost/Tp3.2carshop/Zplist" title="人才招聘">人才招聘</a></li>
            <li><a href="http://localhost/Tp3.2carshop/Message" title="在线留言">在线留言</a></li>
            <li><a href="http://0001543.ks.panguweb.cn/contact.php" title="联系我们">联系我们</a></li>
        </ul>
    </div>

</div>

</div>
<div class="fy" style=" background:url(/Tp3.2carshop/Public/Home/images/20150804113438-369103644.jpg) center top no-repeat;">
      <div class="fra">


          <div class="fyLeft">

    <div class="l_pro">
        <div class="l_pro_t"><?php echo ($topname); ?></div>
        <ul class="l_procon">




            <?php foreach($son2 as $k=>$v):?>


            <li class="proOne"><a title="<?php echo $v['name'];?>" href="<?php echo $url;?>"><?php echo $v['name'];?></a>


                <ul>

                    <?php if($v['id']==$_GET['cateid'] || $v['id']==$son3pid):?>

                    <?php foreach($son3 as $k1=>$v1): ?>

                    <li><a style="margin-left:40px;"   href="/Tp3.2carshop/index.php/Home/Page/index/cateid/<?php echo $v1['id'];?>"   title="<?php echo $v1['name'];?>" ><?php echo $v1['name'];?></a></li>

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


               </div>    </div>
    <div class="fyRight">
      <div class="title"> <span class="fl">
        关于我们        </span> <span class="fr">当前位置：<a href="http://0001543.ks.panguweb.cn/" title="首页">首页</a> > <font>关于我们</font>        </span></div>
      <div class="padding25">
        <div class='pb'><div class='pagebox'><span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络，一流的百度产品推广服务运营商，致力于在互联网时代帮助中国企业进行营销方式的革命，并使他们在这场营销变革中抢占先机。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络成立于2003年，现有员工2000多人，下设20多家子公司，业务覆盖河北、辽宁、吉林三省，提供域名注册、虚拟主机、企业邮局、网站建设、网络推广、呼叫中心、电子支付等全套网络营销解决方案。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络从创立至今已经为数万家企业提供了专业的网络营销产品，并通过专业的网络营销服务使这些企业获得了良好的营销效果。1</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　 　</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络聚集IT界的精英，由资深的网站设计师、软件开发工程师、营销顾问专家及专业客服实施顾问团队、技术服务团队等组成。几年来，盘古人本着"自强 不 息、厚德载物"的企业精神，坚持"诚信为本"的经营理念，以"追求客户的感动"为目标来指导市场动作行为，并逐步推出高质量的网络增值服务，为众多企业实 现网络营销梦想做出积极的努力。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　今日盘古，如朝阳初升。在中国国际实力日益壮大，经济全球化日益凸显的时代背景下，盘古也将扮演着更为重要的角色，承载着中国更多企业的商业梦想，背负着中国信息产业国际化的历史重任。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络，百度最大的代理商；</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络，百度首家跨省经营的代理商；</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　盘古网络，百度唯一一家拥有省级代理资质的代理商。</span><br style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;" />
<span style="color: rgb(29, 41, 125); font-family: microsoft yahei; font-size: 14px; line-height: 28px;">　　精诚合作，共赴成功！</span><div align='center'></div></div></div>      </div>
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

    </body>
</html>