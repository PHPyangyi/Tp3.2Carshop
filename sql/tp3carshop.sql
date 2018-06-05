-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-05 06:12:32
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tp3carshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `cs_admin`
--

CREATE TABLE IF NOT EXISTS `cs_admin` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `roleid` mediumint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `cs_admin`
--

INSERT INTO `cs_admin` (`id`, `username`, `password`, `roleid`) VALUES
(20, 'admin1', '96e79218965eb72c92a549dd5a330112', 8),
(1, 'admin', '96e79218965eb72c92a549dd5a330112', 1);

-- --------------------------------------------------------

--
-- 表的结构 `cs_article`
--

CREATE TABLE IF NOT EXISTS `cs_article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `atype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:列表 1：车型 2：招聘',
  `rizu` mediumint(6) NOT NULL COMMENT '日租价格',
  `num` varchar(3) NOT NULL COMMENT '招聘人数',
  `author` varchar(20) NOT NULL,
  `pic` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `keywords` varchar(60) NOT NULL,
  `des` varchar(255) NOT NULL,
  `rem` tinyint(1) NOT NULL DEFAULT '0',
  `cateid` mediumint(5) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=65 ;

--
-- 转存表中的数据 `cs_article`
--

INSERT INTO `cs_article` (`id`, `title`, `atype`, `rizu`, `num`, `author`, `pic`, `content`, `keywords`, `des`, `rem`, `cateid`, `time`) VALUES
(49, '大众蔚领1.5L时尚型上市 售11.69万元起', 0, 0, '', '新闻资讯测试', '', '&lt;p&gt;【太平洋汽车网 新车频道】日前我们获悉，一汽-大众&lt;a href=&quot;http://price.pcauto.com.cn/sg20843/&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;蔚领&lt;/a&gt;新增1.5L手动时尚型和1.5L自动时尚型车型上市，售价分别为11.69万&lt;a href=&quot;http://price.pcauto.com.cn/sg11891/&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;元&lt;/a&gt;和12.89万元。（本文配图为2017款大众蔚领1.6L自动舒适型）&lt;/p&gt;&lt;table class=&quot;fs12 priceTable tabB10&quot; width=&quot;660&quot; cellspacing=&quot;1&quot; cellpadding=&quot;5&quot; bgcolor=&quot;#c6c6c6&quot; align=&quot;center&quot;&gt;&lt;tbody&gt;&lt;tr class=&quot;priceTableTit firstRow&quot;&gt;&lt;td class=&quot;priceTableTit&quot; colspan=&quot;2&quot; height=&quot;35&quot; bgcolor=&quot;#2277cc&quot; align=&quot;center&quot;&gt;&lt;strong&gt;一汽-大众蔚领新增车型&amp;nbsp;指导售价&lt;/strong&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr bgcolor=&quot;#ffffff&quot;&gt;&lt;td height=&quot;35&quot; align=&quot;center&quot;&gt;车型&lt;/td&gt;&lt;td align=&quot;center&quot;&gt;售价（万元）&lt;/td&gt;&lt;/tr&gt;&lt;tr bgcolor=&quot;#ffffff&quot;&gt;&lt;td height=&quot;35&quot; align=&quot;center&quot;&gt;1.5L 手动时尚型&lt;/td&gt;&lt;td align=&quot;center&quot;&gt;11.69&lt;/td&gt;&lt;/tr&gt;&lt;tr bgcolor=&quot;#ffffff&quot;&gt;&lt;td height=&quot;35&quot; align=&quot;center&quot;&gt;1.5L 自动时尚型&lt;/td&gt;&lt;td align=&quot;center&quot;&gt;12.89&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p style=&quot;text-align: center&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/19/11354717_32900769_32900769_1482240213404.jpg&amp;channel=6233&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;蔚领1.5L时尚型上市 售11.69-12.89万&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;667&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452002668455.jpg&quot; style=&quot;border-bottom: #c6c6c6 1px solid; border-left: #c6c6c6 1px solid; border-top: #c6c6c6 1px solid; border-right: #c6c6c6 1px solid&quot; title=&quot;蔚领1.5L时尚型上市 售11.69-12.89万&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/19/11354717_32900769_32900769_1482240214068.jpg&amp;channel=6233&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;蔚领1.5L时尚型上市 售11.69-12.89万&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;667&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452002417064.jpg&quot; style=&quot;border-bottom: #c6c6c6 1px solid; border-left: #c6c6c6 1px solid; border-top: #c6c6c6 1px solid; border-right: #c6c6c6 1px solid&quot; title=&quot;蔚领1.5L时尚型上市 售11.69-12.89万&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　两款车型作为现售蔚领新增的入门版车型，较此前已经上市的舒适型在配置水平方面有所调整。其中1.5L手动时尚型取消了&lt;a href=&quot;http://baike.pcauto.com.cn/499.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;全景天窗&lt;/a&gt;、&lt;a href=&quot;http://baike.pcauto.com.cn/541.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;外后视镜加热&lt;/a&gt;功能和黑色钢琴漆B柱面板。&lt;/p&gt;&lt;p style=&quot;text-align: center&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/19/11354717_32900769_32900769_1482240213901.jpg&amp;channel=6233&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;蔚领1.5L时尚型上市 售11.69-12.89万&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;667&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452002129689.jpg&quot; style=&quot;border-bottom: #c6c6c6 1px solid; border-left: #c6c6c6 1px solid; border-top: #c6c6c6 1px solid; border-right: #c6c6c6 1px solid&quot; title=&quot;蔚领1.5L时尚型上市 售11.69-12.89万&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　车内，1.5L手动时尚型取消了&lt;a href=&quot;http://baike.pcauto.com.cn/538.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;多功能方向盘&lt;/a&gt;、驾驶员座椅腰部支撑功能、行李厢12V电源以及车载蓝牙等配置。&lt;/p&gt;&lt;p style=&quot;text-align: center&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/19/11354717_32900769_32900769_1482240219401.jpg&amp;channel=6233&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;蔚领1.5L时尚型上市 售11.69-12.89万&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;667&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452003746687.jpg&quot; style=&quot;border-bottom: #c6c6c6 1px solid; border-left: #c6c6c6 1px solid; border-top: #c6c6c6 1px solid; border-right: #c6c6c6 1px solid&quot; title=&quot;蔚领1.5L时尚型上市 售11.69-12.89万&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　动力方面，两款车型均搭载1.5L&lt;a href=&quot;http://baike.pcauto.com.cn/11.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;发动机&lt;/a&gt;，&lt;a href=&quot;http://baike.pcauto.com.cn/683.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;最大功率&lt;/a&gt;81kW（110PS），&lt;a href=&quot;http://baike.pcauto.com.cn/695.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;最大扭矩&lt;/a&gt;150N·m，传动方面分别匹配5速手动和6速手自一体变速箱。（文：太平洋汽车网 陆杰豪）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '大众蔚领1.5L时尚型上市 售11.69万元起', '大众蔚领1.5L时尚型上市 售11.69万元起', 1, 137, 1516452010),
(50, '捷途X70将1月22日首发亮相 6月正式上市', 0, 0, '', '1', '', '&lt;p&gt;【太平洋汽车网 新车频道】奇瑞旗下全新品牌捷途正式发布了首款产品——捷途X70的官图，而新车定位为中型SUV，其将于1月22日首发，并在6月正式上市。此外，该品牌未来或将推出涵盖SUV、MPV以及纯电动等多个领域的产品。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/19/11350856_autohomecar__chccl1phrcgahw6kaal9t1cbhuw520.jpg&amp;channel=6233&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;捷途X70将1月22日首发亮相 6月正式上市&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;667&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452061121151.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;捷途X70将1月22日首发亮相 6月正式上市&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　新车下方四颗矩形LED光源的日间行车灯设计尤为醒目，三条中置的镀铬饰条提升了前脸时尚旗下。该车的长宽高车身尺寸分别为4720/1900/1695mm（含行李架1710mm），轴距为2745mm。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/19/11350856_autohomecar__wkghivphrcgaop5saaluekrhzbg835.jpg&amp;channel=6233&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;捷途X70将1月22日首发亮相 6月正式上市&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;667&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452061242699.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;捷途X70将1月22日首发亮相 6月正式上市&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　新车还将提供多款轮圈造型，同时也会有5/7座布局方式可选。动力方面从之前曝光的工信部信息来看，新车搭载1.5T涡轮发动机，最大功率108kW（147PS）。（文：太平洋汽车网 郭家俊）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '捷途X70将1月22日首发亮相 6月正式上市', '捷途X70将1月22日首发亮相 6月正式上市', 1, 148, 1516452063),
(51, '一汽骏派CX65第二季度上市 跨界旅行车', 0, 0, '', '1', '', '&lt;p&gt;【太平洋汽车网 新车频道】一汽骏派CX65将于今年第二季度上市，新车定位是跨界旅行车，先期推出的车型提供1.5L+5MT的动力总成。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;img alt=&quot;骏派CX65将于二季度上市&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;667&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452614123131.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;骏派CX65将于二季度上市&quot;/&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　骏派CX65身上有几分蔚领的神韵，前格栅采用了带有凹凸设计的粗镀铬饰条进行装饰，与银色的前包围搭配更具野性。新车车身采用了黑色小包围，并配备了镀铬行李架，在外观气质上符合跨界旅行车的特征。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/19/11353377_3.jpg&amp;channel=6233&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;骏派CX65将于二季度上市&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;667&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452614117907.jpg&quot; style=&quot;border: 1px solid rgb(198, 198, 198);&quot; title=&quot;骏派CX65将于二季度上市&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　新车长宽高尺寸分别为4596×1785×1525mm，轴距为2610mm。后保险杠下放同样加入银色防擦护板，与车头相呼应。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/19/11353377_5.jpg&amp;channel=6233&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;一汽骏派CX65第二季度上市 跨界旅行车&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;698&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452614730593.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;一汽骏派CX65第二季度上市 跨界旅行车&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　CX65内饰风格较为简约，极具线条感的对称性设计带着浓厚的德味气息。配置方面，新车将采用全新智能网联技术，配备语音控制、信息娱乐、智能导航、行车助手等功能。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/19/11353377_2.jpg&amp;channel=6233&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;骏派CX65将于二季度上市&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;723&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516452615331861.jpg&quot; style=&quot;border: 1px solid rgb(198, 198, 198);&quot; title=&quot;骏派CX65将于二季度上市&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　动力方面，新车搭载1.5L引擎，最大功率分别为83kW(113PS)，匹配5速手动变速箱。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '一汽骏派CX65第二季度上市 跨界旅行车', '一汽骏派CX65第二季度上市 跨界旅行车', 1, 137, 1516452616),
(52, '宝马x6', 0, 100, '', '宝马x6', './Public/Uploads/2018-01-20/5a633df2292dd.jpg', '&lt;p&gt;太平洋汽车网 2018北美车展】&lt;a href=&quot;http://price.pcauto.com.cn/price/nb20/&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;宝马&lt;/a&gt;新款i8 &lt;a href=&quot;http://baike.pcauto.com.cn/110.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;Coupe&lt;/a&gt;（硬顶版）车型在2018北美车展正式亮相。新车针对外观和动力作出升级，其中新款&lt;a href=&quot;http://price.pcauto.com.cn/sg7499/&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;宝马i8&lt;/a&gt;&lt;a href=&quot;http://baike.pcauto.com.cn/1167.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;电池容量&lt;/a&gt;有所提升，纯电续航里程将达53km。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_1.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453359122403.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　新款宝马i8外观主要针对细节方面有所调整，重点针对空气动力性能进行优化，此外新车前大灯内部构造也有所调整，增加一段LED&lt;a href=&quot;http://baike.pcauto.com.cn/127.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;日间行车灯&lt;/a&gt;带。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_2.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453359301695.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　新款宝马i8还配备熏黑20英寸轻质合金轮毂，每个轮毂质量比老款车型上的减重1kg，通过各方面的&lt;a href=&quot;http://baike.pcauto.com.cn/179.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;轻量化&lt;/a&gt;处理来进一步提高新车的续航里程。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_3.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453359105862.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　新车尾部则大致延续老款车型设计，尾灯组造型依旧凌厉且富有科技感，新款宝马i8还配备一个“Coupe”铭牌来区别于敞篷版车型。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_4.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453360118380.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　动力方面，新车搭载由一台1.5T三缸汽油&lt;a href=&quot;http://baike.pcauto.com.cn/11.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;发动机&lt;/a&gt;和电动机组成插电式混动系统，系统输出经过升级，综合&lt;a href=&quot;http://baike.pcauto.com.cn/683.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;最大功率&lt;/a&gt;达275kW（374PS）。此外新车电池容量也有所提升，得益于此，新款宝马i8纯电动模式下最大续航里程为55km。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_5.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453360111077.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　根据官方数据，新款宝马i8百公里加速成绩为4.4s。充电模式方面，如果采用标准家用插座，两款新车可在4.5小时内完成充电，若采用高压充电桩，则充电时间将能压缩至三小时以内。（文/摄：太平洋汽车网 冯家祺/ 北美车展前方报道团）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '宝马x6', '宝马x6', 1, 136, 1516460470),
(53, '宝马i8', 0, 122, '', '作者', './Public/Uploads/2018-01-21/5a64284f0c1d8.jpg', '&lt;p&gt;太平洋汽车网 2018北美车展】&lt;a href=&quot;http://price.pcauto.com.cn/price/nb20/&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;宝马&lt;/a&gt;新款i8 &lt;a href=&quot;http://baike.pcauto.com.cn/110.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;Coupe&lt;/a&gt;（硬顶版）车型在2018北美车展正式亮相。新车针对外观和动力作出升级，其中新款&lt;a href=&quot;http://price.pcauto.com.cn/sg7499/&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;宝马i8&lt;/a&gt;&lt;a href=&quot;http://baike.pcauto.com.cn/1167.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;电池容量&lt;/a&gt;有所提升，纯电续航里程将达53km。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_1.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453708546589.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　新款宝马i8外观主要针对细节方面有所调整，重点针对空气动力性能进行优化，此外新车前大灯内部构造也有所调整，增加一段LED&lt;a href=&quot;http://baike.pcauto.com.cn/127.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;日间行车灯&lt;/a&gt;带。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_2.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453708136927.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　新款宝马i8还配备熏黑20英寸轻质合金轮毂，每个轮毂质量比老款车型上的减重1kg，通过各方面的&lt;a href=&quot;http://baike.pcauto.com.cn/179.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;轻量化&lt;/a&gt;处理来进一步提高新车的续航里程。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_3.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453708811493.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　新车尾部则大致延续老款车型设计，尾灯组造型依旧凌厉且富有科技感，新款宝马i8还配备一个“Coupe”铭牌来区别于敞篷版车型。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_4.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453708189684.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　动力方面，新车搭载由一台1.5T三缸汽油&lt;a href=&quot;http://baike.pcauto.com.cn/11.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;发动机&lt;/a&gt;和电动机组成插电式混动系统，系统输出经过升级，综合&lt;a href=&quot;http://baike.pcauto.com.cn/683.html&quot; target=&quot;_blank&quot; class=&quot;cmsLink&quot;&gt;最大功率&lt;/a&gt;达275kW（374PS）。此外新车电池容量也有所提升，得益于此，新款宝马i8纯电动模式下最大续航里程为55km。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em class=&quot;cmt-img-editor-el&quot; style=&quot;position: relative; display: inline-block; vertical-align: top;&quot;&gt;&lt;a href=&quot;http://www.pcauto.com.cn/images/html/viewpic_pcauto.htm?http://img0.pcauto.com.cn/pcauto/1801/15/11327917_5.jpg&amp;channel=3780&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;2018北美车展：宝马i8 coupe&quot; class=&quot;art-pic-for-cmt&quot; data-height=&quot;750&quot; data-width=&quot;1000&quot; src=&quot;/ueditor/php/upload/image/20180120/1516453709952465.jpg&quot; style=&quot;border:1px solid #C6C6C6;&quot; title=&quot;2018北美车展：宝马i8 coupe&quot;/&gt;&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;&lt;p&gt;　　根据官方数据，新款宝马i8百公里加速成绩为4.4s。充电模式方面，如果采用标准家用插座，两款新车可在4.5小时内完成充电，若采用高压充电桩，则充电时间将能压缩至三小时以内。（文/摄：太平洋汽车网 冯家祺/ 北美车展前方报道团）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '关键字', '描述', 1, 143, 1516513849),
(54, '11111111111', 0, 0, '', '11111111111', '', '&lt;p&gt;1111111111111111111&lt;br/&gt;&lt;/p&gt;', '111111111111111', '1111111111111111111', 0, 149, 1516457868),
(55, '2017奥斯卡', 0, 0, '', '2017奥斯卡', './Public/Uploads/2018-01-20/5a6358501f02f.jpg', '&lt;p&gt;2017奥斯卡&lt;/p&gt;', '2017奥斯卡', '2017奥斯卡', 1, 146, 1516460112),
(57, 'php高级开发工程师', 0, 0, '2人', '1', '', '&lt;p&gt;php高级开发工程师&lt;br/&gt;&lt;/p&gt;', 'php高级开发工程师', 'html/css php+mysql thinkphp(3.2+5) Linux javascript jquery\r\n\r\n', 1, 154, 1516516278),
(58, 'web前端开发工程师', 2, 0, '4人', '2', '', '&lt;p&gt;web前端开发工程师&lt;/p&gt;', 'web前端开发工程师', 'web前端开发工程师', 1, 154, 1516516101),
(59, 'Linux自动化运维工程师', 0, 0, '2人', ' ', '', '', '', 'Linux自动化运维工程师', 1, 154, 1516516201),
(60, '关于我们。', 0, 0, '', '关于我们', '', '&lt;p&gt;阳毅租赁有限责任公司（简称“首汽租车”）成立于1992年，是国内最早从事专业性综合性汽车租赁服务的供应商之一。&lt;br/&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2014年，阳毅租车实施“国际化、互联网化以及混合所有制”的战略发展。创新重资产O2O模式，全面建设了网络预订平台、APP预订以及后台管理系统。								&lt;br/&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;打造B2B2C业务链，为机构客户和个人客户提供更佳的租车体验。打造长租、短租、汽车金融、公车改革和国际租车等系列产品，并为首汽约车、Gofun新能源分时租车提供车辆供给。建立了\r\n “一地签单、全国用车”的长租业务模式和配套的Mr.Car车辆管理系统。&lt;br/&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;目前，阳毅租车注册会员超百万，车队规模达到近5万辆，位列全国三甲，网络覆盖城市73个，网络规模超过900家。&lt;/p&gt;', '关于我们', '', 1, 135, 1516523393),
(61, '租车需知', 0, 0, '', '1', '', '&lt;p&gt;&lt;span class=&quot;txt-bgtitle&quot;&gt;车辆租金&lt;/span&gt;&lt;br/&gt; 客户必购项目。含各车型在租赁中形成的费用，最小单位为天（24小时），以公示价格为准。								&lt;br/&gt;\r\n								&lt;br/&gt; 超过1天的租期中，非整日的部分计收超时费：								&lt;br/&gt; （1） 超时费基本计费单位为1小时，不足1小时的按1小时计算；								&lt;br/&gt; （2） 超时还车30分钟以内的，不收超时费；								&lt;br/&gt; （3） 超过30分钟且不足4小时（含）的，按超时费计算；								&lt;br/&gt; （4） 超过4小时以上的，按1天（24小时）租期计算；								&lt;br/&gt; （5） 根据车辆级别不同，按下列标准计算：								&lt;br/&gt;\r\n								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;一、基本保险费&lt;/span&gt;&lt;br/&gt; 1. 客户必购项目。是对车辆发生重大事故的保障，最小单位为天（24小时），以公示价格为准。								&lt;br/&gt; 超过1天的租期中，非整日的部分：								&lt;br/&gt; （1） 不足4小时（含）的，不收取基本保险费；								&lt;br/&gt; （2） 超过4小时以上的，按1天（24小时）收取基本保险费；								&lt;br/&gt; （3） 基本保险费不计入停运损失费、超期违约金；								&lt;br/&gt; 根据车辆级别不同，按下列标准计算：								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;二、手续费&lt;/span&gt;&lt;br/&gt; 客户必购项目。是为客户办理租车手续的人工费、场地费等，按订单收取，以公示价格为准。其它服务费用其他费用								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;三、夜间服务费&lt;/span&gt;&lt;br/&gt; （1） 夜间21:00至次日早上8:00之间取车或还车的客户，每次加收夜间服务费，标准价格为50元/次，即：取车或还车各按1次计算。								&lt;br/&gt; （2） 是否收取夜间服务费，以客户到店时间为准，不计客户排队和等待时间。								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;四、强行续租违约金&lt;/span&gt;&lt;br/&gt; 未履行有效续租手续（即未在订单还车时间前提前2个工作小时告知延期还车且延期还车4小时以上时），或未经首汽租车同意续租的，视为强行续租，除正常收取超期部分租金外，另按超期部分租金（车辆租金、可选服务费）的150%收取违约金：								&lt;br/&gt; （1） 超期还车4小时以上且未履行手续或未经同意的，方收取该违约金；								&lt;br/&gt; （2） 强行续租租期自订单原还车时间起至实际还车时间止；								&lt;br/&gt; （3） 计费方式：强行续租租期内的车辆租金总和* 150%，其中不满整日的部分：在4小时（含）内，以“小时”为单位按超时标准计费；在4小时以上，按1天（24小时）租期收取车辆租金、可选服务费。								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;五、加油服务费&lt;/span&gt;&lt;br/&gt; 在满油出车且还车时油量不满的，客户需按市场当期油价支付油量差价，并需另行支付100元加油服务费。								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;六、违章违约金&lt;/span&gt;&lt;br/&gt; 车辆租赁期间产生的违章，由客户自行负责。								&lt;br/&gt; （1） 首汽租车在查询或收到客户的违章通知后，将短信或电话提醒客户，客户在接到首汽租车提醒后，可致电首汽租车服务热线咨询违章处理方法；								&lt;br/&gt; （2） \r\n客户（承租人）应在违章发生之日起25日内将违章自行处理完毕，并将处理凭证复印件发至首汽租车违章处理专用邮箱（wzcl@sqzc.com）。如需该车辆行驶证原件处理违章的，需前往车辆所属门店刷取500元的预授权，待客户当日归还行驶证原件时撤消预授权；								&lt;br/&gt; （3） 逾期未消除违章的客户，除承担违章罚款外，还应承担200元/天的违章违约金（逾期30天以上的，违约金累计不超过6000元）。								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;七、停运损失费&lt;/span&gt;&lt;br/&gt; （1） 适用范围								&lt;br/&gt; 由于客户遗失证照或因违法违规用车导致车辆被扣而造成车辆停运的，停运损失由客户承担。如违法违规与事故并存，同时导致车辆维修或车辆被扣的，不收取停运损失费；								&lt;br/&gt; （2） 计费方式								&lt;br/&gt; 租期内车辆租金均价×停运天数；								&lt;br/&gt; （3） 停运天数确认标准								&lt;br/&gt; a) 因证照遗失导致不能合法上路的，停运天数按2天计算；								&lt;br/&gt; b) 因违法违规驾驶导致车辆被扣的，停运天数按车辆实际被扣押天数计算。								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;八、维修费&lt;/span&gt;&lt;br/&gt; （1） 对于保险公司赔付范围外的事故车辆维修费用，由租车客户支付；								&lt;br/&gt; （2） 维修费用参照《车辆外观损伤修复费用标准》，由客户还车时预先支付，维修完成后按实际产生的费用多退少补；								&lt;br/&gt; （3） 对于客户擅自维修或至非首汽租车指定的维修厂维修的，客户将承担维修费用。								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;九、随车物品损失费&lt;/span&gt;&lt;br/&gt; （1） 对因客户租车期间所造成的随车物品损坏或遗失，客户需照价赔偿；								&lt;br/&gt; （2） 损失费用参照《随车物品清单及价格表》，或参照当地4S店价格为准。								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;十、全国救援&lt;/span&gt;&lt;br/&gt; 对于车辆的自身故障免费救援；其他服务，按救援商的报价由客户现场支付 。								&lt;br/&gt;\r\n								&lt;span class=&quot;txt-smtitle&quot;&gt;十一、其他损失&lt;/span&gt;&lt;br/&gt; 由双方按合同及相关法规协商处理。&lt;br/&gt;&lt;/p&gt;', '租车需知', '租车需知', 1, 153, 1516518177),
(63, '2323', 1, 121, '', '322', './Public/Uploads/2018-01-21/5a6441a7c3eed.jpg', '&lt;p&gt;111111111111111111&lt;br/&gt;&lt;/p&gt;', '3232', '323232', 1, 136, 1516519847),
(64, '1111111', 1, 132, '', '231', './Public/Uploads/2018-01-21/5a6441c967b65.jpg', '&lt;p&gt;1333333333&lt;br/&gt;&lt;/p&gt;', '123', '132', 1, 136, 1516519881);

-- --------------------------------------------------------

--
-- 表的结构 `cs_cate`
--

CREATE TABLE IF NOT EXISTS `cs_cate` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `pc` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否是pc端栏目',
  `class` tinyint(1) NOT NULL DEFAULT '1' COMMENT '//栏目级别',
  `sort` mediumint(5) DEFAULT '50',
  `pic` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `keywords` varchar(60) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `parentid` mediumint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=158 ;

--
-- 转存表中的数据 `cs_cate`
--

INSERT INTO `cs_cate` (`id`, `name`, `type`, `pc`, `class`, `sort`, `pic`, `content`, `keywords`, `des`, `parentid`) VALUES
(135, '关于我们', 2, 1, 1, 1, NULL, '&lt;p&gt;关于我们&lt;/p&gt;', '关于我们', '关于我们', 0),
(136, '车辆展示', 5, 1, 1, 2, NULL, '&lt;p&gt;车辆展示&lt;/p&gt;', '车辆展示', '车辆展示', 0),
(137, '新闻资讯', 1, 1, 1, 3, NULL, '&lt;p&gt;新闻资讯&lt;/p&gt;', '新闻资讯', '新闻资讯', 0),
(139, '热门车型', 5, 1, 2, 139, NULL, '&lt;p&gt;热门车型&lt;/p&gt;', '热门车型', '热门车型', 136),
(140, '豪华车型', 5, 1, 2, 140, NULL, '&lt;p&gt;豪华车型&lt;/p&gt;', '豪华车型', '豪华车型', 136),
(141, '小型车', 5, 1, 2, 141, NULL, '&lt;p&gt;小型车&lt;/p&gt;', '小型车', '小型车', 136),
(142, '城市SUV', 5, 1, 2, 142, NULL, '&lt;p&gt;城市SUV&lt;/p&gt;', '城市SUV', '城市SUV', 136),
(143, '宝马', 5, 1, 3, 143, NULL, '&lt;p&gt;宝马&lt;/p&gt;', '宝马', '宝马', 139),
(144, '奔驰', 5, 1, 3, 144, NULL, '&lt;p&gt;奔驰&lt;/p&gt;', '奔驰', '奔驰', 139),
(145, '法拉利', 5, 1, 3, 145, NULL, '&lt;p&gt;法拉利&lt;/p&gt;', '法拉利', '法拉利', 140),
(146, '资质荣誉', 6, 1, 1, 146, NULL, '&lt;p&gt;资质荣誉&lt;/p&gt;', '资质荣誉', '资质荣誉', 0),
(148, 'test新闻资讯', 1, 1, 2, 147, NULL, '&lt;p&gt;1&lt;br/&gt;&lt;/p&gt;', '1111111111', '1', 137),
(149, 'test3', 1, 1, 3, 149, NULL, '&lt;p&gt;3&lt;br/&gt;&lt;/p&gt;', '3', '3', 148),
(153, '租车需知', 2, 1, 1, 150, NULL, '&lt;p&gt;租车需知&lt;/p&gt;', '', '租车需知', 0),
(154, '人才招聘', 4, 1, 1, 154, NULL, '', '', '', 0),
(155, '在线留言', 3, 1, 1, 155, NULL, '', '', '', 0),
(157, '联系我们', 2, 1, 1, 157, NULL, '                                                                    ', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `cs_job`
--

CREATE TABLE IF NOT EXISTS `cs_job` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL DEFAULT '男',
  `nation` varchar(30) NOT NULL COMMENT '民族',
  `age` varchar(15) NOT NULL COMMENT '生日',
  `marry` varchar(10) NOT NULL DEFAULT '未婚',
  `child` varchar(10) NOT NULL DEFAULT '无' COMMENT '有无子女',
  `bplace` varchar(20) NOT NULL COMMENT '籍贯',
  `address` varchar(100) NOT NULL COMMENT '户口所在地',
  `education` varchar(20) NOT NULL COMMENT '学历',
  `foreign` varchar(150) NOT NULL COMMENT '外语语种及程度',
  `mobile` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `idnums` varchar(30) NOT NULL COMMENT '身份证号',
  `address_now` varchar(255) NOT NULL COMMENT '住址',
  `slim` varchar(20) NOT NULL COMMENT '可到职日期',
  `content` text NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `cs_job`
--

INSERT INTO `cs_job` (`id`, `title`, `name`, `sex`, `nation`, `age`, `marry`, `child`, `bplace`, `address`, `education`, `foreign`, `mobile`, `email`, `idnums`, `address_now`, `slim`, `content`) VALUES
(1, '招聘前端', '中国', '男', '蒙古族', '', '未婚', '', '', '', '硕士', '', '', '', '', '', '随时', ''),
(5, 'php工程师', '童攀', '男', '蒙古族', '', '', '有', '北京市', '天津市', '博士', '', '13781652589', '', '', '', '随时', ''),
(6, 'php工程师', '童攀', '男', '汉族', '1990-03-06', '未婚', '有', '天津市', '北京市', '博士', '英语', '13781652457', 'tongpan@163.com', '411425199002259159', '北京朝阳区', '1周内', '这里是我的个人介绍\r\n这里是我的个人介绍\r\n这里是我的个人介绍\r\n这里是我的个人介绍这里是我的个人介绍');

-- --------------------------------------------------------

--
-- 表的结构 `cs_link`
--

CREATE TABLE IF NOT EXISTS `cs_link` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `url` varchar(60) NOT NULL,
  `des` varchar(255) NOT NULL,
  `sort` mediumint(5) NOT NULL DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `cs_link`
--

INSERT INTO `cs_link` (`id`, `title`, `url`, `des`, `sort`) VALUES
(5, '360', 'http://www.360.cn', 'http://www.baidu.com', 1),
(7, '百度', 'http://www.baidu.com', '11111111', 2);

-- --------------------------------------------------------

--
-- 表的结构 `cs_message`
--

CREATE TABLE IF NOT EXISTS `cs_message` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否通过审核',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1pc端发布0移动端发布',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `cs_message`
--

INSERT INTO `cs_message` (`id`, `nickname`, `telephone`, `email`, `content`, `checked`, `type`, `time`) VALUES
(14, '手机留言', '', '', '手机留言手机留言手机留言手机留言手机留言手机留言', 1, 0, 0),
(15, '手机留言2', '', '', '手机留言2手机留言2手机留言2', 1, 0, 0),
(16, '手机留言3', '', '', '手机留言3手机留言3手机留言3手机留言3', 1, 0, 0),
(17, '新增留言测试', '', '', '新增留言测试新增留言测试新增留言测试', 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `cs_privilege`
--

CREATE TABLE IF NOT EXISTS `cs_privilege` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `pri_name` varchar(20) NOT NULL COMMENT '//权限名称',
  `mname` varchar(20) NOT NULL COMMENT '//模块名称',
  `cname` varchar(20) NOT NULL COMMENT '//控制器名称',
  `aname` varchar(20) NOT NULL COMMENT '//方法名称',
  `parentid` mediumint(5) NOT NULL DEFAULT '0' COMMENT '//上级权限的id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `cs_privilege`
--

INSERT INTO `cs_privilege` (`id`, `pri_name`, `mname`, `cname`, `aname`, `parentid`) VALUES
(22, '文章添加', 'Admin', 'Article', 'add', 21),
(18, '栏目管理', 'Admin', 'Cate', 'lst', 17),
(19, '栏目添加', 'Admin', 'Cate', 'add', 18),
(20, '栏目删除', 'Admin', 'Cate', 'del', 18),
(17, '常用操作', 'admin', 'cycz', 'cycz', 0),
(21, '文章管理', 'Admin', 'Article', 'lst', 17),
(23, '文章修改', 'Admin', 'Article', 'edit', 21),
(24, '友情链接管理', 'Admin', 'Link', 'lst', 17),
(25, '友情链接添加', 'Admin', 'Link', 'add', 24),
(26, '友情链接删除', 'Admin', 'Link', 'del', 24),
(27, '友情链接批量删除', 'Admin', 'Link', 'bdel', 24),
(28, '栏目批量删除', 'Admin', 'Cate', 'bdel', 18),
(29, '文章批量删除', 'Admin', 'Article', 'bdel', 21),
(30, '系统管理', 'Admin', 'Admin', 'system', 0),
(31, '系统设置', 'Admin', 'System', 'lst', 30),
(32, '管理员管理', 'Admin', 'Admin', 'lst', 30),
(33, '管理员添加', 'Admin', 'Admin', 'add', 32),
(34, '管理员删除', 'Admin', 'Admin', 'del', 32),
(35, '管理员批量删除', 'Admin', 'Admin', 'bdel', 32),
(36, '管理员修改', 'Admin', 'Admin', 'edit', 32),
(37, '链接批量更新', 'Admin', 'Link', 'sortlink', 24);

-- --------------------------------------------------------

--
-- 表的结构 `cs_reply`
--

CREATE TABLE IF NOT EXISTS `cs_reply` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `mid` mediumint(5) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `cs_reply`
--

INSERT INTO `cs_reply` (`id`, `content`, `mid`, `time`) VALUES
(19, '谢谢留言', 14, 1462526670),
(20, '测试回复', 15, 1462526716),
(18, '感谢您的支持', 14, 1462526659);

-- --------------------------------------------------------

--
-- 表的结构 `cs_role`
--

CREATE TABLE IF NOT EXISTS `cs_role` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(20) NOT NULL,
  `pri_id_list` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `cs_role`
--

INSERT INTO `cs_role` (`id`, `rolename`, `pri_id_list`) VALUES
(1, '超级管理员', '*'),
(6, '栏目管理员', '17,18,19,20,28'),
(7, '文章管理员', '17,21,22,23'),
(8, '友情链接管理员', '17,24,25,26,27,37'),
(9, '管理员', '17,18,19,20,21,22,23,24,25,26,27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
