<?php exit;?>DROP TABLE IF EXISTS rg_admin_group
CREATE TABLE `rg_admin_group` (  `group_id` int(10) NOT NULL AUTO_INCREMENT,  `name` varchar(20) DEFAULT NULL,  `base_purview` text,  `menu_purview` text,  `status` tinyint(1) DEFAULT '1',  PRIMARY KEY (`group_id`),  KEY `name` (`name`)) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台管理组';
INSERT INTO rg_admin_group VALUES('1','管理员','a:2:{i:0;s:15:\"Admin_AppManage\";i:1;s:21:\"Admin_AppManage_index\";}','a:4:{i:0;s:19:\"首页_管理首页\";i:1;s:19:\"内容_栏目管理\";i:2;s:19:\"内容_文章管理\";i:3;s:22:\"系统_用户组管理\";}','1')
INSERT INTO rg_admin_group VALUES('2','编辑','N;','a:9:{i:0;s:19:\"首页_管理首页\";i:1;s:19:\"首页_站点统计\";i:2;s:19:\"内容_栏目管理\";i:3;s:19:\"内容_文章管理\";i:4;s:19:\"功能_碎片管理\";i:5;s:22:\"功能_推荐位管理\";i:6;s:25:\"功能_扩展模型管理\";i:7;s:19:\"功能_表单管理\";i:8;s:16:\"功能_TAG管理\";}','1')
DROP TABLE IF EXISTS rg_admin_log
CREATE TABLE `rg_admin_log` (  `log_id` int(10) NOT NULL AUTO_INCREMENT,  `user_id` int(10) DEFAULT NULL,  `time` int(10) DEFAULT NULL,  `ip` varchar(250) DEFAULT NULL,  `app` varchar(250) DEFAULT '1',  `content` text,  PRIMARY KEY (`log_id`),  KEY `user_id` (`user_id`) USING BTREE) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='后台操作记录';
INSERT INTO rg_admin_log VALUES('1','0','1423826965','127.0.0.1','admin','登录系统')
INSERT INTO rg_admin_log VALUES('2','0','1424832533','192.168.2.212','admin','登录系统')
INSERT INTO rg_admin_log VALUES('3','0','1424832546','192.168.2.212','admin','登录系统')
DROP TABLE IF EXISTS rg_admin_user
CREATE TABLE `rg_admin_user` (  `user_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户IP',  `group_id` int(10) NOT NULL DEFAULT '1' COMMENT '用户组ID',  `username` varchar(20) NOT NULL COMMENT '登录名',  `password` varchar(32) NOT NULL COMMENT '密码',  `nicename` varchar(20) DEFAULT NULL COMMENT '昵称',  `email` varchar(50) DEFAULT NULL,  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态',  `level` int(5) DEFAULT '1' COMMENT '等级',  `reg_time` int(10) DEFAULT NULL COMMENT '注册时间',  `last_login_time` int(10) DEFAULT NULL COMMENT '最后登录时间',  `last_login_ip` varchar(15) DEFAULT '未知' COMMENT '登录IP',  PRIMARY KEY (`user_id`),  KEY `username` (`username`),  KEY `group_id` (`group_id`) USING BTREE,  KEY `email` (`email`)) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台管理员';
INSERT INTO rg_admin_user VALUES('1','1','steven','a6e612825ab0ec9b523f24182ea8f0d2','Steven','wangwen1220@139.com','1','1','1399361747','1424832545','192.168.2.212')
INSERT INTO rg_admin_user VALUES('2','1','ruigui','744096c5a8b745b0147d169b8125c29e','Ruigui','wangwen1220@gmail.com','1','1','1425375352','0','未知')
DROP TABLE IF EXISTS rg_category
CREATE TABLE `rg_category` (  `class_id` int(10) NOT NULL AUTO_INCREMENT,  `parent_id` int(10) DEFAULT '0',  `app` varchar(20) DEFAULT NULL,  `show` tinyint(1) unsigned DEFAULT '1',  `sequence` int(10) DEFAULT '0',  `type` int(10) NOT NULL DEFAULT '1',  `name` varchar(250) DEFAULT NULL,  `urlname` varchar(250) DEFAULT NULL,  `subname` varchar(250) DEFAULT NULL,  `image` varchar(250) DEFAULT NULL,  `class_tpl` varchar(250) DEFAULT NULL,  `keywords` varchar(250) DEFAULT NULL,  `description` varchar(250) DEFAULT NULL,  `upload_config` int(10) DEFAULT '1',  PRIMARY KEY (`class_id`),  UNIQUE KEY `urlname` (`urlname`) USING BTREE,  KEY `pid` (`parent_id`),  KEY `mid` (`app`),  KEY `sequence` (`sequence`)) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='栏目基础信息';
INSERT INTO rg_category VALUES('1','0','article','1','1','0','Products','products.html','','','list','','','1')
INSERT INTO rg_category VALUES('2','0','article','1','2','0','News','News','','','list','','','1')
INSERT INTO rg_category VALUES('5','1','article','1','1','1','For iPhone Parts','For-iPhone-Parts','','/upload/2015-03-06/b90c5a8bb400d3d6540484b21b273d47.jpg','list','','','1')
INSERT INTO rg_category VALUES('6','1','article','1','2','1','For iPad Parts','For-iPad-Parts','','/upload/2015-03-06/bcb5464e43bc5bd4568259e27cedef49.jpg','list','','','1')
INSERT INTO rg_category VALUES('7','1','article','1','3','1','For Sumsung Parts','For-Sumsung-Parts','','/upload/2015-03-06/0a078720cd860a45661c33414d459091.jpg','list','','','1')
INSERT INTO rg_category VALUES('8','1','article','1','4','1','For iPhone LCD Assembly','For-iPhone-LCD-Assembly','','','list','','','1')
INSERT INTO rg_category VALUES('10','0','article','1','3','0','About Us','About-Us','','','list','','','1')
INSERT INTO rg_category VALUES('11','0','article','1','4','0','Contacts','Contacts','','','list','','','1')
INSERT INTO rg_category VALUES('13','10','page','1','1','1','About Us','About-Us51494848','','','page','','','1')
INSERT INTO rg_category VALUES('14','10','page','1','2','1','Culture','Culture','','','page','','','1')
INSERT INTO rg_category VALUES('15','10','page','1','3','1','Honor','Honor','','','page','','','1')
INSERT INTO rg_category VALUES('16','11','page','1','1','1','Contacts','Contact-Us','Contact Information','','page','','','1')
INSERT INTO rg_category VALUES('17','11','page','1','2','1','Company Information','Company-Information','Company Contact Information','','page','','','1')
INSERT INTO rg_category VALUES('21','0','article','0','11','1','homeinfo','homeinfo','','','list','','','1')
INSERT INTO rg_category VALUES('22','2','article','1','1','1','Products News','Products-News','','','list','','','1')
INSERT INTO rg_category VALUES('23','2','article','1','4','1','Company News','Company-News','','','list','','','1')
DROP TABLE IF EXISTS rg_category_article
CREATE TABLE `rg_category_article` (  `class_id` int(10) NOT NULL,  `fieldset_id` int(10) NOT NULL,  `content_tpl` varchar(250) NOT NULL,  `config_upload` text NOT NULL,  `content_order` varchar(250) NOT NULL,  `page` int(10) NOT NULL DEFAULT '10') ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章栏目信息';
INSERT INTO rg_category_article VALUES('1','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('2','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('5','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('6','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('7','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('8','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('10','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('11','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('21','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('22','0','content','','time DESC','10')
INSERT INTO rg_category_article VALUES('23','0','content','','time DESC','10')
DROP TABLE IF EXISTS rg_category_page
CREATE TABLE `rg_category_page` (  `class_id` int(10) unsigned NOT NULL DEFAULT '0',  `content` mediumtext COMMENT '内容',  KEY `cid` (`class_id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='单页栏目信息';
INSERT INTO rg_category_page VALUES('13','Ruigui Electronic Firm Of Liwan District in Guangzhou City is located in Guangzhou City and has been a wholesaler of cell phone and tablet spare parts. Now we are expanding business with clients from the USA, Canada, Germany, the UK, France, South Africa, Australia, Spain and other overseas markets.&amp;nbsp;&lt;br /&gt;\r\nProvide high quality products and long period warranty with competitive price and considerate service all the time. In Ruigui, our mission is to create values for clients and grow up with clients.&amp;nbsp;&lt;br /&gt;\r\nMany clients have chosen Ruigui as their strategic alliance partner because of our dedication to creating quality and innovative products. We desire to build long-term and mutually beneficial relationships with new and old clients.&lt;br /&gt;\r\nWith skilled staff, in-depth knowledge of new generation technology and strong teamwork spirit, we aim to make Ruigui as your first choice for solving your sourcing/OEM/ODM needs. Please contact us for more details. We are sincerely looking forward to cooperating with you.&lt;br /&gt;')
INSERT INTO rg_category_page VALUES('14','The supplier&#039;s company premises has been checked by Alibaba.com staff to verify onsite operations exist there. A third-party verification company has confirmed the legal existence of the supplier. Learn more about the third party verification agency CBI. Onsite Checked Liability Disclaimer.')
INSERT INTO rg_category_page VALUES('15','Many clients have chosen Ruigui as their strategic alliance partner because of our dedication to creating quality and innovative products. We desire to build long-term and mutually beneficial relationships with new and old clients.&lt;br /&gt;\r\nWith skilled staff, in-depth knowledge of new generation technology and strong teamwork spirit, we aim to make Ruigui as your first choice for solving your sourcing/OEM/ODM needs. Please contact us for more details. We are sincerely looking forward to cooperating with you.&lt;br /&gt;')
INSERT INTO rg_category_page VALUES('16','&lt;dt style=&quot;margin:0px 0px 3px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;float:left;width:120px;overflow:hidden;clear:left;text-overflow:ellipsis;word-wrap:normal;&quot;&gt;\r\n	Telephone:\r\n&lt;/dt&gt;\r\n&lt;dd style=&quot;margin:0px 0px 3px 140px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;white-space:normal;&quot;&gt;\r\n	86-020-81928208\r\n&lt;/dd&gt;\r\n&lt;dt style=&quot;margin:0px 0px 3px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;float:left;width:120px;overflow:hidden;clear:left;text-overflow:ellipsis;word-wrap:normal;&quot;&gt;\r\n	Mobile Phone:\r\n&lt;/dt&gt;\r\n&lt;dd style=&quot;margin:0px 0px 3px 140px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;white-space:normal;&quot;&gt;\r\n	13570562177\r\n&lt;/dd&gt;\r\n&lt;dt style=&quot;margin:0px 0px 3px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;float:left;width:120px;overflow:hidden;clear:left;text-overflow:ellipsis;word-wrap:normal;&quot;&gt;\r\n	Fax:\r\n&lt;/dt&gt;\r\n&lt;dd style=&quot;margin:0px 0px 3px 140px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;white-space:normal;&quot;&gt;\r\n	86-020-81928209\r\n&lt;/dd&gt;\r\n&lt;dt style=&quot;margin:0px 0px 3px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;float:left;width:120px;overflow:hidden;clear:left;text-overflow:ellipsis;word-wrap:normal;&quot;&gt;\r\n	Address:\r\n&lt;/dt&gt;\r\n&lt;dd style=&quot;margin:0px 0px 3px 140px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;white-space:normal;&quot;&gt;\r\n	fangcun\r\n&lt;/dd&gt;\r\n&lt;dt style=&quot;margin:0px 0px 3px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;float:left;width:120px;overflow:hidden;clear:left;text-overflow:ellipsis;word-wrap:normal;&quot;&gt;\r\n	Zip:\r\n&lt;/dt&gt;\r\n&lt;dd style=&quot;margin:0px 0px 3px 140px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;white-space:normal;&quot;&gt;\r\n	51000\r\n&lt;/dd&gt;\r\n&lt;dt style=&quot;margin:0px 0px 3px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;float:left;width:120px;overflow:hidden;clear:left;text-overflow:ellipsis;word-wrap:normal;&quot;&gt;\r\n	Country/Region:\r\n&lt;/dt&gt;\r\n&lt;dd style=&quot;margin:0px 0px 3px 140px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;white-space:normal;&quot;&gt;\r\n	China (Mainland)\r\n&lt;/dd&gt;\r\n&lt;dt style=&quot;margin:0px 0px 3px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;float:left;width:120px;overflow:hidden;clear:left;text-overflow:ellipsis;word-wrap:normal;&quot;&gt;\r\n	Province/State:\r\n&lt;/dt&gt;\r\n&lt;dd style=&quot;margin:0px 0px 3px 140px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;white-space:normal;&quot;&gt;\r\n	Guangdong\r\n&lt;/dd&gt;\r\n&lt;dt style=&quot;margin:0px 0px 3px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;float:left;width:120px;overflow:hidden;clear:left;text-overflow:ellipsis;word-wrap:normal;&quot;&gt;\r\n	City:\r\n&lt;/dt&gt;\r\n&lt;dd style=&quot;margin:0px 0px 3px 140px;padding:0px;border:0px;font-stretch:inherit;line-height:20px;vertical-align:baseline;white-space:normal;&quot;&gt;\r\n	guangzhou\r\n&lt;/dd&gt;')
INSERT INTO rg_category_page VALUES('17','&lt;strong&gt;Company Name:&lt;/strong&gt; Guangzhou Ruigui Electronic Firm&lt;br /&gt;\r\n&lt;strong&gt;Operational Address:&lt;/strong&gt; Self-Compiled B42, 2/F, No. 8, Xitierma Rd., Guangzhou, Guangdong, China (Mainland)&lt;br /&gt;\r\n&lt;strong&gt;Website:&lt;/strong&gt; http://malu.en.alibaba.com/&lt;br /&gt;\r\n&lt;strong&gt;Website on alibaba.com:&lt;/strong&gt; http://malu.en.alibaba.com/&lt;br /&gt;')
DROP TABLE IF EXISTS rg_config
CREATE TABLE `rg_config` (  `name` varchar(250) NOT NULL,  `data` varchar(250) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='网站配置';
INSERT INTO rg_config VALUES('site_title','RuiGui Electronic')
INSERT INTO rg_config VALUES('site_subtitle','Guangzhou Ruigui Electronic Firm')
INSERT INTO rg_config VALUES('site_url','')
INSERT INTO rg_config VALUES('site_keywords','RuiGui Electronic')
INSERT INTO rg_config VALUES('site_description','Ruigui Electronic Firm Of Liwan District in Guangzhou City is located in Guangzhou City and has been a wholesaler of cell phone and tablet spare parts. Now we are expanding business')
INSERT INTO rg_config VALUES('site_email','admin@duxcms.com')
INSERT INTO rg_config VALUES('site_copyright','Guangzhou Ruigui Electronic Firm')
INSERT INTO rg_config VALUES('site_statistics','')
INSERT INTO rg_config VALUES('tpl_name','ruigui')
INSERT INTO rg_config VALUES('tpl_index','index')
INSERT INTO rg_config VALUES('tpl_search','search')
INSERT INTO rg_config VALUES('tpl_tags','tag')
INSERT INTO rg_config VALUES('mobile_status','0')
INSERT INTO rg_config VALUES('mobile_tpl','mobile')
INSERT INTO rg_config VALUES('mobile_domain','')
DROP TABLE IF EXISTS rg_config_upload
CREATE TABLE `rg_config_upload` (  `id` int(10) NOT NULL AUTO_INCREMENT,  `name` varchar(250) DEFAULT NULL,  `upload_size` int(10) NOT NULL,  `upload_exts` varchar(250) DEFAULT NULL,  `upload_replace` tinyint(1) DEFAULT NULL,  `thumb_status` tinyint(1) DEFAULT NULL,  `water_status` tinyint(1) DEFAULT NULL,  `thumb_type` tinyint(1) DEFAULT NULL,  `thumb_width` int(10) DEFAULT NULL,  `thumb_height` int(10) DEFAULT NULL,  `water_image` varchar(250) DEFAULT NULL,  `water_position` int(10) DEFAULT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='网站配置';
INSERT INTO rg_config_upload VALUES('1','默认','10','jpg,gif,bmp,png','0','0','0','1','800','800','logo.jpg','1')
DROP TABLE IF EXISTS rg_content
CREATE TABLE `rg_content` (  `content_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '文章ID',  `class_id` int(10) DEFAULT NULL COMMENT '栏目ID',  `title` varchar(250) DEFAULT NULL COMMENT '标题',  `urltitle` varchar(250) DEFAULT NULL COMMENT 'URL路径',  `font_color` varchar(250) DEFAULT NULL COMMENT '颜色',  `font_bold` tinyint(1) DEFAULT NULL COMMENT '加粗',  `font_em` tinyint(1) DEFAULT NULL,  `position` varchar(250) DEFAULT NULL,  `keywords` varchar(250) DEFAULT NULL COMMENT '关键词',  `description` varchar(250) DEFAULT NULL COMMENT '描述',  `time` int(10) DEFAULT NULL COMMENT '更新时间',  `image` varchar(250) DEFAULT NULL COMMENT '封面图',  `url` varchar(250) DEFAULT NULL COMMENT '跳转',  `sequence` int(10) DEFAULT NULL COMMENT '排序',  `status` int(10) DEFAULT NULL COMMENT '状态',  `copyfrom` varchar(250) DEFAULT NULL COMMENT '来源',  `views` int(10) DEFAULT '0' COMMENT '浏览数',  `taglink` int(10) DEFAULT '0' COMMENT 'TAG链接',  `tpl` varchar(250) DEFAULT NULL,  `site` int(10) DEFAULT '1',  PRIMARY KEY (`content_id`),  UNIQUE KEY `urltitle` (`urltitle`) USING BTREE,  KEY `title` (`title`) USING BTREE,  KEY `description` (`description`) USING BTREE,  KEY `keywords` (`keywords`),  KEY `class_id` (`class_id`) USING BTREE,  KEY `time` (`time`) USING BTREE) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='内容基础';
INSERT INTO rg_content VALUES('1','5','showcase1','showcase1','0','0','0','1,2','','','1425371820','/upload/2015-03-06/0e4f015bea6148b6cde4ab88c6bc5f55.jpg','','0','1','本站','1','1','','1')
INSERT INTO rg_content VALUES('2','5','showcase2','showcase2','0','0','0','2','Sumsung,LCD','showcase2 content','1425372120','/upload/2015-03-06/bf343c36fc9da67b661cc6d9aae14cf3.jpg','','0','1','本站','6','1','','1')
INSERT INTO rg_content VALUES('3','5','showcase3','showcase3','0','0','0','2','Blackberry,iPad,Housing','showcase3 content','1425372240','/upload/2015-03-06/0f1c5218d3fb4e50731c984b5a974998.jpg','','0','1','本站','7','1','','1')
INSERT INTO rg_content VALUES('4','5','showcase4','showcase4','0','0','0','2','iPhone,Parts','showcase4iPhone Parts','1425620040','/upload/2015-03-06/f03fe7f1692473f0e9f0d367690bdef5.jpg','','0','1','本站','20','1','','1')
INSERT INTO rg_content VALUES('5','21','Company Introduction','Company-Introduction','0','0','0','3','','Ruigui Electronic Firm Of Liwan District in Guangzhou City is located in Guangzhou City and has been a wholesaler of cell phone and tablet spare parts. Now we are expanding business with clients from the USA, Canada, Germany, the UK, France, South Af','1425655740','','','0','1','本站','0','1','','1')
INSERT INTO rg_content VALUES('6','21','Join','Join','0','0','0','3','','With skilled staff, in-depth knowledge of new generation technology and strong teamwork spirit, we aim to make Ruigui as your first choice for solving your sourcing/OEM/ODM needs. Please contact us for more details. We are sincerely looking forward t','1425655920','','','0','1','本站','0','1','','1')
INSERT INTO rg_content VALUES('7','22','News1 Onsite Check','News1-Onsite-Check','0','0','0','','','The supplier&#039;s company premises has been checked by Alibaba.com staff to verify onsite operations exist there. A third-party verification company has confirmed the legal existence of the supplier. Learn more about the third party verification ag','1425794040','','','0','1','本站','0','1','','1')
INSERT INTO rg_content VALUES('8','23','News2 Ruigui Electronic Firm Of Liwan District in Guangzhou City is located in Guangzhou City and has been a wholesaler of cell phone and​','News2-Ruigui-Electronic-Firm-O','0','0','0','','','This supplier has not provided any information yet.Ruigui Electronic Firm Of Liwan District in Guangzhou City is located in Guangzhou City and has been a wholesaler of cell phone and','1425794100','','','0','1','本站','0','1','','1')
INSERT INTO rg_content VALUES('9','23','Ruigui Electronic Firm','Ruigui-Electronic-Firm','0','0','0','','','Ruigui Electronic Firm Of Liwan District in Guangzhou City is located in Guangzhou City and has been a wholesaler of cell phone and','1425794160','','','0','1','本站','0','1','','1')
INSERT INTO rg_content VALUES('10','23','News test Additional Information','News-test-Additional-Informati','0','0','0','','','CELLPHONE LCD SCREEN,CELLPHONE TOUCH SCREEN DIGITIZER,TABLET LCD,TABLET TOUCH SCREEN DIGITIZER,PHONE CASE','1425794220','','','0','1','本站','1','1','','1')
INSERT INTO rg_content VALUES('11','23','Eastern Europe, North America, Central America, South America, Southeast Asia','Eastern-Europe-North-America-C','0','0','0','','','Eastern Europe, North America, Central America, South America, Southeast Asia','1425794220','','','0','1','本站','0','1','','1')
DROP TABLE IF EXISTS rg_content_article
CREATE TABLE `rg_content_article` (  `content_id` int(10) DEFAULT NULL,  `content` mediumtext) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章内容信息';
INSERT INTO rg_content_article VALUES('1','&lt;img src=&quot;/upload/2015-03-06/0e4f015bea6148b6cde4ab88c6bc5f55.jpg&quot; alt=&quot;&quot; width=&quot;238&quot; height=&quot;184&quot; title=&quot;&quot; align=&quot;&quot; /&gt;')
INSERT INTO rg_content_article VALUES('2','showcase2 content')
INSERT INTO rg_content_article VALUES('3','showcase3 content')
INSERT INTO rg_content_article VALUES('4','&lt;p&gt;\r\n	&lt;a href=&quot;http://ruigui-electronic.com/admin.php?r=article/Content/index&amp;content_id=3&quot; target=&quot;_blank&quot;&gt;showcase&lt;/a&gt;4\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	iPhone Parts\r\n&lt;/p&gt;')
INSERT INTO rg_content_article VALUES('5','Ruigui Electronic Firm Of Liwan District in Guangzhou City is located in Guangzhou City and has been a wholesaler of cell phone and tablet spare parts. Now we are expanding business with clients from the USA, Canada, Germany, the UK, France, South Africa, Australia, Spain and other overseas markets.')
INSERT INTO rg_content_article VALUES('6','With skilled staff, in-depth knowledge of new generation technology and strong teamwork spirit, we aim to make Ruigui as your first choice for solving your sourcing/OEM/ODM needs. Please contact us for more details. We are sincerely looking forward to cooperating with you.')
INSERT INTO rg_content_article VALUES('7','&lt;span style=&quot;color:#333333;font-family:Arial, Helvetica, sans-serif;white-space:normal;background-color:#FFFFFF;&quot;&gt;The supplier&#039;s company premises has been checked by Alibaba.com staff to verify onsite operations exist there. A third-party verification company has confirmed the legal existence of the supplier. Learn more about the third party verification agency&lt;/span&gt;&lt;a class=&quot;mc-click-target&quot; clickdata=&quot;{&quot;cid&quot;:&quot;2987&quot;,&quot;type&quot;:&quot;click&quot;,&quot;alimemberid&quot;:&quot;220165513&quot;,&quot;appname&quot;:&quot;onsiteInfo&quot;,&quot;apptitle&quot;:&quot;On Site Info&quot;}&quot; data-domdot=&quot;id:2987,sid:&#039;220165513&#039;,mn:&#039;On Site Info&#039;&quot; style=&quot;margin:0px;padding:0px;border:0px;font-family:Arial, Helvetica, sans-serif;font-stretch:inherit;vertical-align:baseline;color:#0066CC;white-space:normal;background-color:#FFFFFF;&quot;&gt; CBI.&lt;/a&gt;&lt;span style=&quot;color:#333333;font-family:Arial, Helvetica, sans-serif;white-space:normal;background-color:#FFFFFF;&quot;&gt;&lt;/span&gt;&lt;a class=&quot;mc-click-target&quot; clickdata=&quot;{&quot;cid&quot;:&quot;2987&quot;,&quot;type&quot;:&quot;click&quot;,&quot;alimemberid&quot;:&quot;220165513&quot;,&quot;appname&quot;:&quot;onsiteInfo&quot;,&quot;apptitle&quot;:&quot;On Site Info&quot;}&quot; data-domdot=&quot;id:2987,sid:&#039;220165513&#039;,mn:&#039;On Site Info&#039;&quot; style=&quot;margin:0px;padding:0px;border:0px;font-family:Arial, Helvetica, sans-serif;font-stretch:inherit;vertical-align:baseline;color:#0066CC;white-space:normal;background-color:#FFFFFF;&quot;&gt;Onsite Checked Liability Disclaimer&lt;/a&gt;&lt;span style=&quot;color:#333333;font-family:Arial, Helvetica, sans-serif;white-space:normal;background-color:#FFFFFF;&quot;&gt;.&lt;/span&gt;')
INSERT INTO rg_content_article VALUES('8','&lt;p&gt;\r\n	This supplier has not provided any information yet.\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	Ruigui Electronic Firm Of Liwan District in Guangzhou City is located in Guangzhou City and has been a wholesaler of cell phone and\r\n&lt;/p&gt;')
INSERT INTO rg_content_article VALUES('9','&lt;span style=&quot;white-space:normal;&quot;&gt;Ruigui Electronic Firm Of Liwan District in Guangzhou City is located in Guangzhou City and has been a wholesaler of cell phone and&lt;/span&gt;')
INSERT INTO rg_content_article VALUES('10','&lt;a class=&quot;message-send mc-click-target&quot; clickdata=&quot;{&quot;cid&quot;:&quot;9058&quot;,&quot;type&quot;:&quot;companyBasicInformation&quot;,&quot;alimemberid&quot;:&quot;220165513&quot;,&quot;appname&quot;:&quot;companyBasicInformation&quot;,&quot;apptitle&quot;:&quot;Company Basic Information&quot;}&quot; data-domdot=&quot;id:9058,sid:220165513,mn:&#039;Company Basic Information&#039;,pid:&quot; href=&quot;http://malu.en.alibaba.com/featureproductlist.html&quot; target=&quot;_blank&quot; style=&quot;margin:0px;padding:0px;border:0px;font-family:Arial, Helvetica, sans-serif;font-stretch:inherit;vertical-align:baseline;color:#0066CC;text-decoration:none;white-space:normal;background-color:#FFFFFF;&quot;&gt;CELLPHONE LCD SCREEN,CELLPHONE TOUCH SCREEN DIGITIZER,TABLET LCD,TABLET TOUCH SCREEN DIGITIZER,PHONE CASE&lt;/a&gt;')
INSERT INTO rg_content_article VALUES('11','&lt;a class=&quot;message-send mc-click-target&quot; clickdata=&quot;{&quot;cid&quot;:&quot;9060&quot;,&quot;type&quot;:&quot;companyBasicInformation&quot;,&quot;alimemberid&quot;:&quot;220165513&quot;,&quot;appname&quot;:&quot;companyBasicInformation&quot;,&quot;apptitle&quot;:&quot;Company Basic Information&quot;}&quot; data-domdot=&quot;id:9060,sid:220165513,mn:&#039;Company Basic Information&#039;,pid:&quot; href=&quot;http://malu.en.alibaba.com/company_profile/trade_capacity.html&quot; target=&quot;_blank&quot; style=&quot;margin:0px;padding:0px;border:0px;font-family:Arial, Helvetica, sans-serif;font-stretch:inherit;vertical-align:baseline;color:#0066CC;text-decoration:none;white-space:normal;background-color:#FFFFFF;&quot;&gt;Eastern Europe, North America, Central America, South America, Southeast Asia&lt;/a&gt;')
DROP TABLE IF EXISTS rg_ext_guestbook
CREATE TABLE `rg_ext_guestbook` (  `data_id` int(10) NOT NULL AUTO_INCREMENT,  `name` varchar(250) DEFAULT NULL,  `email` varchar(250) DEFAULT NULL,  `content` text,  `time` int(10) DEFAULT NULL,  PRIMARY KEY (`data_id`)) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO rg_ext_guestbook VALUES('1','Life','349865361@qq.com','欢迎使用DuxCms内容管理系统！','1418960975')
DROP TABLE IF EXISTS rg_field
CREATE TABLE `rg_field` (  `field_id` int(10) NOT NULL AUTO_INCREMENT,  `fieldset_id` int(10) DEFAULT NULL,  `name` varchar(250) DEFAULT NULL,  `field` varchar(250) DEFAULT NULL,  `type` int(5) DEFAULT '1',  `tip` varchar(250) DEFAULT NULL,  `verify_type` varchar(250) DEFAULT NULL,  `verify_data` text,  `verify_data_js` text,  `verify_condition` tinyint(1) DEFAULT NULL,  `default` varchar(250) DEFAULT NULL,  `sequence` int(10) DEFAULT '0',  `errormsg` varchar(250) DEFAULT NULL,  `config` text,  PRIMARY KEY (`field_id`),  KEY `field` (`field`),  KEY `sequence` (`sequence`),  KEY `fieldset_id` (`fieldset_id`) USING BTREE) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='扩展字段基础';
INSERT INTO rg_field VALUES('1','1','昵称','name','1','','regex','cmVxdWlyZQ==','Kg==','1','','0','','')
INSERT INTO rg_field VALUES('2','1','邮箱','email','1','','regex','ZW1haWw=','ZQ==','1','','1','','')
INSERT INTO rg_field VALUES('3','1','内容','content','2','','regex','cmVxdWlyZQ==','Kg==','1','','3','','')
INSERT INTO rg_field VALUES('4','1','时间','time','10','','regex','','','1','','2','','')
DROP TABLE IF EXISTS rg_field_expand
CREATE TABLE `rg_field_expand` (  `field_id` int(10) DEFAULT NULL,  `post` tinyint(1) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='扩展字段-扩展模型';
DROP TABLE IF EXISTS rg_field_form
CREATE TABLE `rg_field_form` (  `field_id` int(10) DEFAULT NULL,  `post` tinyint(1) DEFAULT '0',  `show` tinyint(1) DEFAULT '0',  `search` tinyint(1) DEFAULT '0') ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='扩展字段-表单';
INSERT INTO rg_field_form VALUES('1','1','1','1')
INSERT INTO rg_field_form VALUES('2','1','1','1')
INSERT INTO rg_field_form VALUES('3','1','1','1')
INSERT INTO rg_field_form VALUES('4','0','1','1')
DROP TABLE IF EXISTS rg_fieldset
CREATE TABLE `rg_fieldset` (  `fieldset_id` int(10) NOT NULL AUTO_INCREMENT,  `table` varchar(250) DEFAULT NULL,  `name` varchar(250) DEFAULT NULL,  PRIMARY KEY (`fieldset_id`),  UNIQUE KEY `table` (`table`)) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='字段集基础';
INSERT INTO rg_fieldset VALUES('1','guestbook','留言板')
DROP TABLE IF EXISTS rg_fieldset_expand
CREATE TABLE `rg_fieldset_expand` (  `fieldset_id` int(10) DEFAULT NULL,  `status` tinyint(1) DEFAULT NULL,  UNIQUE KEY `fieldset_id` (`fieldset_id`) USING BTREE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='字段集-扩展模型';
DROP TABLE IF EXISTS rg_fieldset_form
CREATE TABLE `rg_fieldset_form` (  `fieldset_id` int(10) DEFAULT NULL,  `show_list` tinyint(1) DEFAULT NULL,  `show_info` tinyint(1) DEFAULT NULL,  `list_page` int(5) DEFAULT NULL,  `list_where` varchar(250) DEFAULT NULL,  `list_order` varchar(250) DEFAULT NULL,  `tpl_list` varchar(250) DEFAULT NULL,  `tpl_info` varchar(250) DEFAULT NULL,  `post_status` tinyint(1) DEFAULT NULL,  `post_msg` varchar(250) DEFAULT NULL,  `post_return_url` varchar(250) DEFAULT NULL,  UNIQUE KEY `fieldset_id` (`fieldset_id`) USING BTREE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='字段集-扩展表单';
INSERT INTO rg_fieldset_form VALUES('1','1','0','10','','data_id desc','guestbook','guestbook','1','留言发布成功！','')
DROP TABLE IF EXISTS rg_file
CREATE TABLE `rg_file` (  `file_id` int(10) NOT NULL AUTO_INCREMENT,  `url` varchar(250) DEFAULT NULL,  `original` varchar(250) DEFAULT NULL,  `title` varchar(250) DEFAULT NULL,  `ext` varchar(250) DEFAULT NULL,  `size` int(10) DEFAULT NULL,  `time` int(10) DEFAULT NULL,  PRIMARY KEY (`file_id`),  KEY `ext` (`ext`),  KEY `time` (`time`) USING BTREE) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='上传文件';
INSERT INTO rg_file VALUES('1','/upload/2015-03-03/b90c5a8bb400d3d6540484b21b273d47.jpg','/upload/2015-03-03/b90c5a8bb400d3d6540484b21b273d47.jpg','xc02','jpg','60387','1425371941')
INSERT INTO rg_file VALUES('2','/upload/2015-03-03/0e4f015bea6148b6cde4ab88c6bc5f55.jpg','/upload/2015-03-03/0e4f015bea6148b6cde4ab88c6bc5f55.jpg','1','jpg','9412','1425372049')
INSERT INTO rg_file VALUES('3','/upload/2015-03-03/bcb5464e43bc5bd4568259e27cedef49.jpg','/upload/2015-03-03/bcb5464e43bc5bd4568259e27cedef49.jpg','newcar','jpg','52453','1425372206')
INSERT INTO rg_file VALUES('4','/upload/2015-03-03/bf343c36fc9da67b661cc6d9aae14cf3.jpg','/upload/2015-03-03/bf343c36fc9da67b661cc6d9aae14cf3.jpg','2','jpg','8939','1425372227')
INSERT INTO rg_file VALUES('5','/upload/2015-03-03/0a078720cd860a45661c33414d459091.jpg','/upload/2015-03-03/0a078720cd860a45661c33414d459091.jpg','en_03','jpg','112926','1425372261')
INSERT INTO rg_file VALUES('6','/upload/2015-03-03/0f1c5218d3fb4e50731c984b5a974998.jpg','/upload/2015-03-03/0f1c5218d3fb4e50731c984b5a974998.jpg','3','jpg','12987','1425372272')
INSERT INTO rg_file VALUES('7','/upload/2015-03-05/b90c5a8bb400d3d6540484b21b273d47.jpg','/upload/2015-03-05/b90c5a8bb400d3d6540484b21b273d47.jpg','banner1','jpg','60387','1425537391')
INSERT INTO rg_file VALUES('8','/upload/2015-03-05/bf343c36fc9da67b661cc6d9aae14cf3.jpg','/upload/2015-03-05/bf343c36fc9da67b661cc6d9aae14cf3.jpg','pic-showcase2','jpg','8939','1425537425')
INSERT INTO rg_file VALUES('9','/upload/2015-03-05/f03fe7f1692473f0e9f0d367690bdef5.jpg','/upload/2015-03-05/f03fe7f1692473f0e9f0d367690bdef5.jpg','pic-showcase4','jpg','11599','1425537507')
INSERT INTO rg_file VALUES('10','/upload/2015-03-06/b90c5a8bb400d3d6540484b21b273d47.jpg','/upload/2015-03-06/b90c5a8bb400d3d6540484b21b273d47.jpg','banner1','jpg','60387','1425613219')
INSERT INTO rg_file VALUES('11','/upload/2015-03-06/bcb5464e43bc5bd4568259e27cedef49.jpg','/upload/2015-03-06/bcb5464e43bc5bd4568259e27cedef49.jpg','banner2','jpg','52453','1425613242')
INSERT INTO rg_file VALUES('12','/upload/2015-03-06/0a078720cd860a45661c33414d459091.jpg','/upload/2015-03-06/0a078720cd860a45661c33414d459091.jpg','banner3','jpg','112926','1425613260')
INSERT INTO rg_file VALUES('13','/upload/2015-03-06/0e4f015bea6148b6cde4ab88c6bc5f55.jpg','/upload/2015-03-06/0e4f015bea6148b6cde4ab88c6bc5f55.jpg','pic-showcase1','jpg','9412','1425620031')
INSERT INTO rg_file VALUES('14','/upload/2015-03-06/0e4f015bea6148b6cde4ab88c6bc5f55.jpg','/upload/2015-03-06/0e4f015bea6148b6cde4ab88c6bc5f55.jpg','pic-showcase1','jpg','9412','1425620046')
INSERT INTO rg_file VALUES('15','/upload/2015-03-06/bf343c36fc9da67b661cc6d9aae14cf3.jpg','/upload/2015-03-06/bf343c36fc9da67b661cc6d9aae14cf3.jpg','pic-showcase2','jpg','8939','1425620056')
INSERT INTO rg_file VALUES('16','/upload/2015-03-06/0f1c5218d3fb4e50731c984b5a974998.jpg','/upload/2015-03-06/0f1c5218d3fb4e50731c984b5a974998.jpg','pic-showcase3','jpg','12987','1425620063')
INSERT INTO rg_file VALUES('17','/upload/2015-03-06/f03fe7f1692473f0e9f0d367690bdef5.jpg','/upload/2015-03-06/f03fe7f1692473f0e9f0d367690bdef5.jpg','pic-showcase4','jpg','11599','1425620117')
DROP TABLE IF EXISTS rg_fragment
CREATE TABLE `rg_fragment` (  `fragment_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',  `label` varchar(250) DEFAULT NULL,  `name` varchar(250) DEFAULT NULL,  `content` text,  PRIMARY KEY (`fragment_id`),  KEY `label` (`label`)) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='网站碎片';
INSERT INTO rg_fragment VALUES('1','test','Join','test')
DROP TABLE IF EXISTS rg_position
CREATE TABLE `rg_position` (  `position_id` int(10) NOT NULL AUTO_INCREMENT,  `name` varchar(20) NOT NULL,  `sequence` int(10) DEFAULT '0',  PRIMARY KEY (`position_id`)) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='推荐位';
INSERT INTO rg_position VALUES('1','首页推荐','0')
INSERT INTO rg_position VALUES('2','厨窗产品','1')
INSERT INTO rg_position VALUES('3','首页信息','3')
DROP TABLE IF EXISTS rg_tags
CREATE TABLE `rg_tags` (  `tag_id` int(10) NOT NULL AUTO_INCREMENT,  `name` varchar(20) NOT NULL,  `click` int(10) DEFAULT '1',  `quote` int(10) DEFAULT '1',  PRIMARY KEY (`tag_id`),  KEY `quote` (`quote`),  KEY `click` (`click`),  KEY `name` (`name`) USING BTREE) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='TAG标签';
INSERT INTO rg_tags VALUES('1','iPhone','1','2')
INSERT INTO rg_tags VALUES('2','Parts','1','1')
INSERT INTO rg_tags VALUES('3','Sumsung','1','1')
INSERT INTO rg_tags VALUES('4','LCD','1','1')
INSERT INTO rg_tags VALUES('5','Blackberry','2','1')
INSERT INTO rg_tags VALUES('6','iPad','1','1')
INSERT INTO rg_tags VALUES('7','Housing','1','1')
DROP TABLE IF EXISTS rg_tags_has
CREATE TABLE `rg_tags_has` (  `content_id` int(10) DEFAULT NULL,  `tag_id` int(10) DEFAULT NULL,  KEY `aid` (`content_id`),  KEY `tid` (`tag_id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TAG关系';
INSERT INTO rg_tags_has VALUES('4','1')
INSERT INTO rg_tags_has VALUES('4','2')
INSERT INTO rg_tags_has VALUES('2','3')
INSERT INTO rg_tags_has VALUES('2','4')
INSERT INTO rg_tags_has VALUES('3','5')
INSERT INTO rg_tags_has VALUES('3','6')
INSERT INTO rg_tags_has VALUES('3','7')
DROP TABLE IF EXISTS rg_total_spider
CREATE TABLE `rg_total_spider` (  `id` int(10) NOT NULL AUTO_INCREMENT,  `time` int(10) DEFAULT NULL,  `baidu` int(10) DEFAULT '0',  `google` int(10) DEFAULT '0',  `soso` int(10) DEFAULT '0',  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='蜘蛛统计';
DROP TABLE IF EXISTS rg_total_visitor
CREATE TABLE `rg_total_visitor` (  `id` int(10) NOT NULL AUTO_INCREMENT,  `time` int(10) DEFAULT NULL,  `count` int(10) DEFAULT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='访客统计';
INSERT INTO rg_total_visitor VALUES('1','1424793600','4')
INSERT INTO rg_total_visitor VALUES('2','1424880000','2')
INSERT INTO rg_total_visitor VALUES('3','1425052800','81')
INSERT INTO rg_total_visitor VALUES('4','1425225600','11')
INSERT INTO rg_total_visitor VALUES('5','1425312000','329')
INSERT INTO rg_total_visitor VALUES('6','1425398400','2')
INSERT INTO rg_total_visitor VALUES('7','1425484800','25')
INSERT INTO rg_total_visitor VALUES('8','1425571200','272')
INSERT INTO rg_total_visitor VALUES('9','1425657600','1')
INSERT INTO rg_total_visitor VALUES('10','1425744000','207')
INSERT INTO rg_total_visitor VALUES('11','1425830400','251')
INSERT INTO rg_total_visitor VALUES('12','1425916800','165')
