<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>这里是您的网站名称_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

    <script type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/urlredirect.js"></script>
<LINK href="/Tp3.2Carshop/Public/Home/style/style.css" rel=stylesheet>
<LINK href="/Tp3.2Carshop/Public/Home/style/jbox.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/functions.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/validForm/FormValid.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/jbox/jquery.jBox-2.3.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/search.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/menu.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/jQselect.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/slides.min.jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/jquery.touchSlider.js"></script>
<script language="JavaScript" type="text/javascript" src="/Tp3.2Carshop/Public/Home/style/ajax.js"></script>

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
            <a href="index.php" title="这里是您的网站名称" style="font-size:30px; color: white">YANGweb俱乐部</a>
            <div class="head-right">
                <span><font>租车<br />热线 </font><label>+123456789</label></span>
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
            <li><a title="网站首页" href="/Tp3.2Carshop/index.php" class="">网站首页</a></li>
            <?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a title="<?php echo ($vo["name"]); ?>" href="/Tp3.2Carshop/index.php/Home/<?php if($vo['type'] == 1): ?>Arlist<?php elseif($vo['type'] == 2): ?>Page<?php elseif($vo['type'] == 3): ?>Message<?php elseif($vo['type'] == 4): ?>Zplist<?php elseif($vo['type'] == 5): ?>Carlist<?php elseif($vo['type'] == 6): ?>Rylist<?php elseif($vo['type'] == 7): ?>Job<?php endif; ?>/index/cateid/<?php echo ($vo["id"]); ?>" class=""><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>

</div>

<div class="clear"></div>
<div class="banner">
  <div class="main_visual">
    

    <div class="main_image">
    
      <ul>
                        <li><span class="img_3" style="background:url(/Tp3.2Carshop/Public/Home/images/1.jpg) no-repeat top;"></span></li>
                
                          <li><span class="img_3" style="background:url(/Tp3.2Carshop/Public/Home/images/2.jpg) no-repeat top;"></span></li>
                
                          <li><span class="img_3" style="background:url(/Tp3.2Carshop/Public/Home/images/3.jpg) no-repeat top;"></span></li>
                
              </ul>
      <a href="javascript:;" id="btn_prev"></a> <a href="javascript:;" id="btn_next"></a> </div>
  </div>
</div>
<div class="clear"></div>

<div class="case">
	<div class="fra1">
   	  <div class="caseleft">



       	<p class="name"><b>资质荣誉</b><span>
           Aptitude honor
        </span></p>

          <a class="case-more" title="查看更多" href="case.php">查看更多</a>
      </div>
      <div class="caseright">

              <marquee scrollamount="2" scrolldelay="5" onMouseOut="this.start()" onMouseOver="this.stop()">
                             </marquee>
            </div>
                        <ul class="caseul">

                            <?php if(is_array($rylist)): $i = 0; $__LIST__ = $rylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                	<a href="http://localhost/Tp3.2carshop/index.php/Home/Article/index/arid/<?php echo ($vo["id"]); ?>" title="荣誉：<?php echo ($vo["title"]); ?>">
                	<img src="<?php echo ($vo["pic"]); ?>" alt="荣誉：<?php echo ($vo["title"]); ?>" width="215" height="161" />
                    <span>荣誉：<?php echo ($vo["title"]); ?></span>
                	</a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                  </div>
    </div>
</div>
<div class="clear"></div>
<div class="product">
	<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.zoombut').lightBox();
    });
</script>
	<div class="fra1">


    	<p class="pro-name"><b>车辆展示</b><span>Vehicles Show</span></p>
        <div id="container">
      <div id="example">
        <div id="slides">
          <div class="slides_container" >
                                 <div class="slide">            
               	<ul class="product-ul">
                    <?php if(is_array($car)): $i = 0; $__LIST__ = $car;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="http://localhost/Tp3.2carshop/index.php/Home/Article/index/arid/<?php echo ($vo["id"]); ?>" title="车型：<?php echo ($vo["title"]); ?>">
                        	<p class="casetitle" ><span title="车型：<?php echo ($vo["title"]); ?>" href="http://localhost/Tp3.2carshop/index.php/Home/Article/index/arid/<?php echo ($vo["id"]); ?>" class="zoombut"></span><span class="jianjie">车型：<?php echo ($vo["title"]); ?></span> </p>
                            <img src="<?php echo ($vo["pic"]); ?>" width="245" height="184" alt="车型：<?php echo ($vo["title"]); ?>" />
                            <p class="wor"><span>车型：<?php echo ($vo["title"]); ?></span><label>日租：<?php echo ($vo["rizu"]); ?>元/天</label></p>
                        </a>
                     </li><?php endforeach; endif; else: echo "" ;endif; ?>
            	</ul>
              
            </div>
                        <div class="slide">
               	<ul class="product-ul">
                    <?php if(is_array($car)): $i = 0; $__LIST__ = $car;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="http://localhost/Tp3.2carshop/index.php/Home/Article/index/arid/<?php echo ($vo["id"]); ?>" title="车型：<?php echo ($vo["title"]); ?>">
                            <p class="casetitle" ><span title="车型：<?php echo ($vo["title"]); ?>" href="http://localhost/Tp3.2carshop/index.php/Home/Article/index/arid/<?php echo ($vo["id"]); ?>" class="zoombut"></span><span class="jianjie">车型：<?php echo ($vo["title"]); ?></span> </p>
                            <img src="<?php echo ($vo["pic"]); ?>" width="245" height="184" alt="车型：<?php echo ($vo["title"]); ?>" />
                            <p class="wor"><span>车型：<?php echo ($vo["title"]); ?></span><label>日租：<?php echo ($vo["rizu"]); ?>元/天</label></p>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            	</ul>

            </div>
                                    </div>
          <a href="#" class="prev" title="prev">&nbsp;&nbsp;</a><a href="" class="next" title="next">&nbsp;</a> </div>
      </div>
    </div>
    <div class="clear"></div>
    <a class="pro-more" href="http://localhost/Tp3.2carshop/index.php/Home/Carlist/index/cateid/136" title="查看更多">查看更多</a>
    </div>
</div>
<div class="clear"></div>
<div class="news">
	<div class="fra">
    	<div class="about-left">
            <p class="ab-con" style=" margin-top: -170px;">　

            <p class="ab-name" style="margin-top:-20px;"><span>a b o u t&nbsp;&nbsp; u s</span><b>关于我们</b></p>

            <?php echo htmlspecialchars_decode($gy['content']);?>
            </p>
			<a class="ab-more" href="http://localhost/Tp3.2carshop/index.php/Home/Page/index/cateid/135" title="查看更多">查看详情</a>
        </div>
        <div class="news-right">
        	<p class="news-name"><span>n e w s</span><b>新闻资讯</b></p> 
                         <ul class="news-ul">

                             <?php if(is_array($arlist)): $i = 0; $__LIST__ = $arlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>

                    <a href="http://localhost/Tp3.2carshop/index.php/Home/Article/index/arid/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
                    	<p><?php echo ($vo["title"]); ?></p>
                        <span><?php echo (date("Y-m-d",$vo["time"])); ?></span>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                         <a class="news-more" href="http://localhost/Tp3.2carshop/index.php/Home/Arlist/index/cateid/137" title="查看更多">查看更多</a>
        </div>
    </div>
</div>
<div class="z-notice">
	<a href="http://localhost/Tp3.2carshop/index.php/Home/Page/index/cateid/153" title="租车须知">租车须知</a>
    <div style="width: 1000px;height: 250px;">
        <img src="/Tp3.2Carshop/Public/Home/images/20150804152838-947160084.jpg" alt="租车" width="1000" height="250"  />
    </div>

</div>
<div class="clear"></div>

</div>


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
        <div class="foot-tel"><p>热线电话<br /><label>+123456789</label></p><span>7x24小时全国客服热线，全年无休</span></div>
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
        <div class="foot-left">电话：+123456789    传真：+123456789     地址：     版权所有：这里是您的网站名称<br />
            技术支持：<a href="http://www.pangu.us" target="_blank" title="盘古网络－提供基于互联网的全套解决方案" >YANGweb</a><a href=" " target="_blank" title=" "> YANGweb</a>ICP备案编号：<a href="http://www.miitbeian.gov.cn/" title="备********号" target="_blank">备********号</a></div>
        <div class="newsshare"><div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页" href="#"></a></div>
            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
    </div>

    </body>
</html>