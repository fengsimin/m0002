DROP TABLE IF EXISTS `m0002_admin`;
CREATE TABLE `m0002_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` tinyint(1) DEFAULT '0',
  `ctime` int(11) DEFAULT '0',
  `utime` int(11) DEFAULT '0',
  `name` varchar(20) DEFAULT '',
  `pass` varchar(100) DEFAULT '',
  `face` varchar(10) DEFAULT '',
  `realname` varchar(20) DEFAULT '',
  `address` varchar(255) DEFAULT '',
  `mobile` varchar(20) DEFAULT '',
  `intro` varchar(255) DEFAULT '',
  `qq` varchar(20) DEFAULT '',
  `sex` char(2) DEFAULT '',
  `rbac` varchar(255) DEFAULT '',
  `json` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `m0002_finder`;
CREATE TABLE `m0002_finder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `sortby` tinyint(1) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `size` int(11) NOT NULL DEFAULT '0',
  `ctime` int(11) NOT NULL DEFAULT '0',
  `utime` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `ext` varchar(10) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO `m0002_finder` VALUES("13","0","1","1","0","1466417022","0","folder","01","data/finder/","","0","0",",13,");
INSERT INTO `m0002_finder` VALUES("14","13","0","1","531168","1466417031","0","image/jpeg","Lift-Bit-ph-Max-Tomasinelli-14.jpg","data/finder/01/","jpg","1200","890",",13,14,");
INSERT INTO `m0002_finder` VALUES("15","13","0","1","625507","1466417031","0","image/jpeg","Lift-Bit-ph-Max-Tomasinelli-15.jpg","data/finder/01/","jpg","1200","809",",13,15,");
INSERT INTO `m0002_finder` VALUES("16","13","0","1","347578","1466417031","0","image/jpeg","Lift-Bit-ph-Max-Tomasinelli-03.jpg","data/finder/01/","jpg","1200","1714",",13,16,");
INSERT INTO `m0002_finder` VALUES("18","0","1","1","0","1466478434","0","folder","02","data/finder/","","0","0",",18,");
INSERT INTO `m0002_finder` VALUES("19","18","0","1","158820","1466478449","0","image/jpeg","venture_cognac_4_1024x1024.jpg","data/finder/02/","jpg","1280","756",",18,19,");
INSERT INTO `m0002_finder` VALUES("20","18","0","1","267997","1466478449","0","image/jpeg","venture_bomber_1_1024x1024.jpg","data/finder/02/","jpg","885","904",",18,20,");
INSERT INTO `m0002_finder` VALUES("21","0","1","1","0","1466481154","0","folder","03","data/finder/","","0","0",",21,");
INSERT INTO `m0002_finder` VALUES("22","21","0","1","82790","1466481161","0","image/jpeg","LOPER-Shoes-PROEF-Roderick-Pieters-2a.jpg","data/finder/03/","jpg","1280","905",",21,22,");
INSERT INTO `m0002_finder` VALUES("23","21","0","1","74590","1466481161","0","image/jpeg","LOPER-Shoes-PROEF-Roderick-Pieters-2.jpg","data/finder/03/","jpg","1280","853",",21,23,");
INSERT INTO `m0002_finder` VALUES("24","21","0","1","116532","1466481161","0","image/jpeg","LOPER-Shoes-PROEF-Roderick-Pieters-1.jpg","data/finder/03/","jpg","1280","905",",21,24,");
INSERT INTO `m0002_finder` VALUES("25","0","1","1","0","1466481367","0","folder","04","data/finder/","","0","0",",25,");
INSERT INTO `m0002_finder` VALUES("26","25","0","1","167580","1466481378","0","image/jpeg","chengxu-shoes13.jpg","data/finder/04/","jpg","1280","640",",25,26,");
INSERT INTO `m0002_finder` VALUES("27","25","0","1","196019","1466481378","0","image/jpeg","chengxu-shoes3.jpg","data/finder/04/","jpg","1280","853",",25,27,");
INSERT INTO `m0002_finder` VALUES("28","25","0","1","387612","1466481378","0","image/jpeg","chengxu-shoes12.jpg","data/finder/04/","jpg","720","1080",",25,28,");
INSERT INTO `m0002_finder` VALUES("29","25","0","1","496736","1466481378","0","image/jpeg","chengxu-shoes11.jpg","data/finder/04/","jpg","720","1080",",25,29,");
INSERT INTO `m0002_finder` VALUES("30","25","0","1","819598","1466481422","0","image/jpeg","chengxu-shoes4.jpg","data/finder/04/","jpg","1003","1080",",25,30,");


DROP TABLE IF EXISTS `m0002_item`;
CREATE TABLE `m0002_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `nid` int(11) DEFAULT NULL,
  `state` tinyint(1) DEFAULT '1',
  `sortby` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT '0',
  `utime` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `title_color` varchar(255) DEFAULT '',
  `image` varchar(500) DEFAULT '',
  `image_path` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `url_title` varchar(255) DEFAULT '',
  `url_target` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT '',
  `summary_color` varchar(255) DEFAULT '',
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `m0002_item` VALUES("1","0","1","1","100","1466233045","1466481588","LAYERED 3D FOOTWEAR DESIGNS BY CHENGXU TIAN","","","data/5764f0d0ce9ec","","","","","","&lt;div&gt;&lt;nav&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/04/chengxu-shoes4.jpg&quot; alt=&quot;&quot; width=&quot;1003&quot; height=&quot;1080&quot; /&gt;&lt;/p&gt;\n&lt;/nav&gt;&lt;/div&gt;\n&lt;article&gt;\n&lt;p&gt;We all know that shoes are another form of art but London-based footwear designer&lt;a href=&quot;http://www.chengxutian.com/&quot; target=&quot;_blank&quot;&gt;Chengxu Tian&lt;/a&gt;&amp;nbsp;takes it to a whole other level with his latest collection,&amp;nbsp;&lt;a href=&quot;http://www.chengxutian.com/The-Layering-Movement-2016&quot; target=&quot;_blank&quot;&gt;The Layering Movement&lt;/a&gt;.&lt;/p&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;data/finder/04/chengxu-shoes12.jpg&quot; alt=&quot;&quot; width=&quot;720&quot; height=&quot;1080&quot; /&gt;&lt;/p&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/04/chengxu-shoes13.jpg&quot; alt=&quot;&quot; width=&quot;1280&quot; height=&quot;640&quot; /&gt;&lt;/p&gt;\n&lt;p&gt;The shoes&amp;nbsp;were Tian&amp;rsquo;s final collection for his MA course in Fashion Design and Technology (Footwear) at the London College of Fashion. Inspired by 3D layering texture effects, it includes sneakers, booties and pumps that are all bold in color and linear in arrangement. Tian uses an updated injection mold technique that involves two electric ovens instead of one and a stronger-than-normal press machine to combine PVC and fabric and eliminate the use of glue on the shoe.&lt;/p&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/04/chengxu-shoes3.jpg&quot; alt=&quot;&quot; width=&quot;1280&quot; height=&quot;853&quot; /&gt;&lt;/p&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;data/finder/04/chengxu-shoes11.jpg&quot; alt=&quot;&quot; width=&quot;720&quot; height=&quot;1080&quot; /&gt;&lt;/p&gt;\n&lt;/article&gt;");
INSERT INTO `m0002_item` VALUES("2","0","1","1","100","1466233054","1466481193","LOPER: SHOES HAND ASSEMBLED WITH THREAD INSTEAD OF GLUE","","","data/5764f0d8907d7","","","","","","&lt;div&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/03/LOPER-Shoes-PROEF-Roderick-Pieters-1.jpg&quot; alt=&quot;&quot; width=&quot;1280&quot; height=&quot;905&quot; /&gt;&lt;/div&gt;\n&lt;p&gt;&lt;a href=&quot;http://proefdesigns.com/loper/&quot; target=&quot;_blank&quot;&gt;LOPER&lt;/a&gt;&amp;nbsp;was born when a bond formed between Japanese creative platform&amp;nbsp;&lt;a href=&quot;http://proefdesigns.com/&quot; target=&quot;_blank&quot;&gt;PROEF&lt;/a&gt;and Dutch shoe designer&amp;nbsp;&lt;a href=&quot;http://www.roderickpieters.com/&quot; target=&quot;_blank&quot;&gt;Roderick Pieters&lt;/a&gt;&amp;nbsp;sometime in 2012. Similar ideas were shared about improving the shoe industry from the inside out and several years later, the handcrafted unisex footwear known as LOPER was born.&lt;/p&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/03/LOPER-Shoes-PROEF-Roderick-Pieters-2.jpg&quot; alt=&quot;&quot; width=&quot;1280&quot; height=&quot;853&quot; /&gt;&lt;/p&gt;\n&lt;p&gt;The main difference you&amp;rsquo;ll notice right off the bat is that the shoes use no glue to be assembled. Instead, they&amp;rsquo;re hand assembled with their innovative rope construction. The uppers are made of smooth, high-grade leather that breathes naturally and is smooth to the touch. It will also conform to your feet over time. A durable, molded rubber outsole houses a thick cushioned EVA midsole for comfort when walking. Each rubber sole is prepped with 44 holes, two starting points, and an integrated stopper, making assembly super easy.&lt;/p&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/03/LOPER-Shoes-PROEF-Roderick-Pieters-2a.jpg&quot; alt=&quot;&quot; width=&quot;1280&quot; height=&quot;905&quot; /&gt;&lt;/p&gt;");
INSERT INTO `m0002_item` VALUES("3","0","1","1","100","1466299842","1466478545","THE WIFI-EQUIPPED GROUND VENTURE IS OUR IDEA OF A PERFECT BACKPACK","","","data/5765f4f11587c","","","","","","&lt;div&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/02/venture_bomber_1_1024x1024.jpg&quot; alt=&quot;&quot; width=&quot;885&quot; height=&quot;904&quot; /&gt;&lt;/div&gt;\n&lt;p&gt;Los Angeles based&amp;nbsp;&lt;a href=&quot;http://thisisground.com/&quot; target=&quot;_blank&quot;&gt;This Is Ground&lt;/a&gt;&amp;nbsp;has been in the business of sophisticated and fashionable tech organization since 2013, elevating the technologist&amp;rsquo;s game ever since their first Cord Taco (still amongst our favorite affordable&amp;nbsp;&lt;a href=&quot;http://design-milk.com/2015-gift-guide-50/&quot; target=&quot;_blank&quot;&gt;gift picks&lt;/a&gt;). TIG founder Mike Macadaan and gang have&amp;nbsp;continued to&amp;nbsp;&lt;a href=&quot;http://design-milk.com/tech-dopp-kit-ground/&quot; target=&quot;_blank&quot;&gt;expand upon&lt;/a&gt;&amp;nbsp;the&amp;nbsp;guiding premise&amp;nbsp;device, cord, and peripheral organization could look and operate on equal &amp;ndash; pardon the pun &amp;ndash; ground.&lt;/p&gt;\n&lt;div id=&quot;attachment_263498&quot;&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/02/venture_cognac_4_1024x1024.jpg&quot; alt=&quot;&quot; width=&quot;1280&quot; height=&quot;756&quot; /&gt;&lt;/div&gt;");
INSERT INTO `m0002_item` VALUES("4","0","1","1","100","1466414758","1466417065","A SOFA THAT NEVER GETS BORED","","","data/5767b6991b484","","","","","","&lt;div&gt;&lt;nav&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/01/Lift-Bit-ph-Max-Tomasinelli-15.jpg&quot; alt=&quot;&quot; width=&quot;1200&quot; height=&quot;809&quot; /&gt;&lt;/p&gt;\n&lt;/nav&gt;&lt;/div&gt;\n&lt;article&gt;\n&lt;p&gt;The internet of things is no longer limited to well, just the internet. It now includes furniture. In fact, the&amp;nbsp;&lt;a href=&quot;http://www.lift-bit.com./&quot; target=&quot;_blank&quot;&gt;Lift-Bit&lt;/a&gt;&amp;nbsp;(not to confused with Fitbit or other bits), is the &amp;ldquo;world&amp;rsquo;s first Internet-of-Things sofa.&amp;rdquo;&amp;nbsp;First unveiled at this year&amp;rsquo;s&amp;nbsp;&lt;a href=&quot;http://design-milk.com/tag/milan-design-week&quot;&gt;Milan Design Week&lt;/a&gt;, the sofa was created by international design and innovation firm&amp;nbsp;&lt;a href=&quot;http://www.carloratti.com/&quot; target=&quot;_blank&quot;&gt;Carlo Ratti Associati&lt;/a&gt;&amp;nbsp;with help from&amp;nbsp;&lt;a href=&quot;https://www.vitra.com/en-us/home&quot; target=&quot;_blank&quot;&gt;Vitra&lt;/a&gt;.&lt;/p&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/01/Lift-Bit-ph-Max-Tomasinelli-14.jpg&quot; alt=&quot;&quot; width=&quot;1200&quot; height=&quot;890&quot; /&gt;&lt;/p&gt;\n&lt;p&gt;The Lift-Bit is a modular furniture system that transform from sofa, to chair, to bed, to chaise lounge&amp;hellip; to whatever else your creativity dreams up. It consists of a cluster of bright green, upholstered stools which are motorized using a linear actuator. This means that the cushions on the stool can be raised or lowered. Furthermore, it can be controlled through gestures, or of course, a mobile app.&lt;/p&gt;\n&lt;p&gt;&lt;img class=&quot;&quot; src=&quot;data/finder/01/Lift-Bit-ph-Max-Tomasinelli-03.jpg&quot; alt=&quot;&quot; width=&quot;1200&quot; height=&quot;1714&quot; /&gt;&lt;/p&gt;\n&lt;/article&gt;");


DROP TABLE IF EXISTS `m0002_log`;
CREATE TABLE `m0002_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `state` tinyint(1) DEFAULT '0',
  `ctime` int(11) DEFAULT '0',
  `utime` int(11) DEFAULT '0',
  `admin_id` int(11) DEFAULT '0',
  `admin_name` varchar(20) DEFAULT '',
  `title` varchar(255) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `type` varchar(20) DEFAULT '',
  `table` varchar(20) DEFAULT '',
  `table_id` int(11) DEFAULT '0',
  `ip` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `m0002_site`;
CREATE TABLE `m0002_site` (
  `state` tinyint(1) DEFAULT '1',
  `name` varchar(100) DEFAULT NULL,
  `value` varchar(1000) DEFAULT NULL,
  UNIQUE KEY `key` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `m0002_site` VALUES("1","domain","qing.com/m0002");
INSERT INTO `m0002_site` VALUES("1","site_name","");
INSERT INTO `m0002_site` VALUES("1","logo","");
INSERT INTO `m0002_site` VALUES("1","favicon","");
INSERT INTO `m0002_site` VALUES("1","touch_icon","");
INSERT INTO `m0002_site` VALUES("1","keywords","");
INSERT INTO `m0002_site` VALUES("1","description","");
INSERT INTO `m0002_site` VALUES("1","title","我的杂志");


DROP TABLE IF EXISTS `m0002_stats`;
CREATE TABLE `m0002_stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time` int(11) DEFAULT '0',
  `screen` varchar(20) DEFAULT '',
  `cookie` varchar(32) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `referer` varchar(255) DEFAULT '',
  `keyword` varchar(255) DEFAULT '',
  `os` varchar(20) DEFAULT '',
  `os_version` varchar(20) DEFAULT '',
  `mobile` varchar(20) DEFAULT '',
  `browser` varchar(20) DEFAULT '',
  `browser_version` varchar(20) DEFAULT '',
  `ip` varchar(20) DEFAULT '',
  `ip_isp` varchar(20) DEFAULT '',
  `ip_country` varchar(20) DEFAULT '',
  `ip_region` varchar(20) DEFAULT '',
  `ip_area` varchar(20) DEFAULT '',
  `ip_city` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `m0002_trash`;
CREATE TABLE `m0002_trash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` tinyint(1) DEFAULT '0',
  `ctime` int(11) DEFAULT '0',
  `utime` int(11) DEFAULT '0',
  `admin_id` int(11) DEFAULT '0',
  `admin_name` varchar(255) DEFAULT '',
  `title` varchar(255) DEFAULT '',
  `path` varchar(255) DEFAULT '',
  `note` varchar(255) DEFAULT '',
  `table` varchar(255) DEFAULT '',
  `data` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



