-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 03 月 03 日 17:41
-- 服务器版本: 5.6.19
-- PHP 版本: 5.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ruigui`
--

-- --------------------------------------------------------

--
-- 表的结构 `rg_admin_group`
--

CREATE TABLE IF NOT EXISTS `rg_admin_group` (
  `group_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `base_purview` text,
  `menu_purview` text,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`group_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台管理组' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `rg_admin_group`
--

INSERT INTO `rg_admin_group` (`group_id`, `name`, `base_purview`, `menu_purview`, `status`) VALUES
(1, '管理员', 'a:2:{i:0;s:15:"Admin_AppManage";i:1;s:21:"Admin_AppManage_index";}', 'a:4:{i:0;s:19:"首页_管理首页";i:1;s:19:"内容_栏目管理";i:2;s:19:"内容_文章管理";i:3;s:22:"系统_用户组管理";}', 1),
(2, '编辑', 'N;', 'a:9:{i:0;s:19:"首页_管理首页";i:1;s:19:"首页_站点统计";i:2;s:19:"内容_栏目管理";i:3;s:19:"内容_文章管理";i:4;s:19:"功能_碎片管理";i:5;s:22:"功能_推荐位管理";i:6;s:25:"功能_扩展模型管理";i:7;s:19:"功能_表单管理";i:8;s:16:"功能_TAG管理";}', 1);

-- --------------------------------------------------------

--
-- 表的结构 `rg_admin_log`
--

CREATE TABLE IF NOT EXISTS `rg_admin_log` (
  `log_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `time` int(10) DEFAULT NULL,
  `ip` varchar(250) DEFAULT NULL,
  `app` varchar(250) DEFAULT '1',
  `content` text,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台操作记录' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `rg_admin_log`
--

INSERT INTO `rg_admin_log` (`log_id`, `user_id`, `time`, `ip`, `app`, `content`) VALUES
(1, 0, 1423826965, '127.0.0.1', 'admin', '登录系统'),
(2, 0, 1424832533, '192.168.2.212', 'admin', '登录系统'),
(3, 0, 1424832546, '192.168.2.212', 'admin', '登录系统');

-- --------------------------------------------------------

--
-- 表的结构 `rg_admin_user`
--

CREATE TABLE IF NOT EXISTS `rg_admin_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户IP',
  `group_id` int(10) NOT NULL DEFAULT '1' COMMENT '用户组ID',
  `username` varchar(20) NOT NULL COMMENT '登录名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `nicename` varchar(20) DEFAULT NULL COMMENT '昵称',
  `email` varchar(50) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态',
  `level` int(5) DEFAULT '1' COMMENT '等级',
  `reg_time` int(10) DEFAULT NULL COMMENT '注册时间',
  `last_login_time` int(10) DEFAULT NULL COMMENT '最后登录时间',
  `last_login_ip` varchar(15) DEFAULT '未知' COMMENT '登录IP',
  PRIMARY KEY (`user_id`),
  KEY `username` (`username`),
  KEY `group_id` (`group_id`) USING BTREE,
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台管理员' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `rg_admin_user`
--

INSERT INTO `rg_admin_user` (`user_id`, `group_id`, `username`, `password`, `nicename`, `email`, `status`, `level`, `reg_time`, `last_login_time`, `last_login_ip`) VALUES
(1, 1, 'steven', 'a6e612825ab0ec9b523f24182ea8f0d2', 'Steven', 'wangwen1220@139.com', 1, 1, 1399361747, 1424832545, '192.168.2.212'),
(2, 1, 'ruigui', '744096c5a8b745b0147d169b8125c29e', 'Ruigui', 'wangwen1220@gmail.com', 1, 1, 1425375352, NULL, '未知');

-- --------------------------------------------------------

--
-- 表的结构 `rg_category`
--

CREATE TABLE IF NOT EXISTS `rg_category` (
  `class_id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT '0',
  `app` varchar(20) DEFAULT NULL,
  `show` tinyint(1) unsigned DEFAULT '1',
  `sequence` int(10) DEFAULT '0',
  `type` int(10) NOT NULL DEFAULT '1',
  `name` varchar(250) DEFAULT NULL,
  `urlname` varchar(250) DEFAULT NULL,
  `subname` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `class_tpl` varchar(250) DEFAULT NULL,
  `keywords` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `upload_config` int(10) DEFAULT '1',
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `urlname` (`urlname`) USING BTREE,
  KEY `pid` (`parent_id`),
  KEY `mid` (`app`),
  KEY `sequence` (`sequence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='栏目基础信息' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `rg_category`
--

INSERT INTO `rg_category` (`class_id`, `parent_id`, `app`, `show`, `sequence`, `type`, `name`, `urlname`, `subname`, `image`, `class_tpl`, `keywords`, `description`, `upload_config`) VALUES
(1, 0, 'article', 1, 1, 1, 'Products', 'Products', '', '', 'list', '', '', 1),
(2, 0, 'article', 1, 2, 1, 'News', 'News', '', '', 'list', '', '', 1),
(3, 0, 'page', 1, 3, 1, 'About Us', 'About-Us', '', '', 'page', '', '', 1),
(4, 0, 'page', 1, 4, 1, 'Contacts', 'Contacts', '', '', 'page', '', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `rg_category_article`
--

CREATE TABLE IF NOT EXISTS `rg_category_article` (
  `class_id` int(10) NOT NULL,
  `fieldset_id` int(10) NOT NULL,
  `content_tpl` varchar(250) NOT NULL,
  `config_upload` text NOT NULL,
  `content_order` varchar(250) NOT NULL,
  `page` int(10) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章栏目信息';

--
-- 转存表中的数据 `rg_category_article`
--

INSERT INTO `rg_category_article` (`class_id`, `fieldset_id`, `content_tpl`, `config_upload`, `content_order`, `page`) VALUES
(1, 0, 'content', '', 'time DESC', 10),
(2, 0, 'content', '', 'time DESC', 10);

-- --------------------------------------------------------

--
-- 表的结构 `rg_category_page`
--

CREATE TABLE IF NOT EXISTS `rg_category_page` (
  `class_id` int(10) unsigned NOT NULL DEFAULT '0',
  `content` mediumtext COMMENT '内容',
  KEY `cid` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='单页栏目信息';

--
-- 转存表中的数据 `rg_category_page`
--

INSERT INTO `rg_category_page` (`class_id`, `content`) VALUES
(3, 'About Us'),
(4, 'Contacts');

-- --------------------------------------------------------

--
-- 表的结构 `rg_config`
--

CREATE TABLE IF NOT EXISTS `rg_config` (
  `name` varchar(250) NOT NULL,
  `data` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='网站配置';

--
-- 转存表中的数据 `rg_config`
--

INSERT INTO `rg_config` (`name`, `data`) VALUES
('site_title', 'DuxCms网站管理系统'),
('site_subtitle', '简单、易用、轻巧'),
('site_url', ''),
('site_keywords', 'duxcms'),
('site_description', ''),
('site_email', 'admin@duxcms.com'),
('site_copyright', 'duxcms'),
('site_statistics', ''),
('tpl_name', 'ruigui'),
('tpl_index', 'index'),
('tpl_search', 'search'),
('tpl_tags', 'tag'),
('mobile_status', '0'),
('mobile_tpl', 'mobile'),
('mobile_domain', '');

-- --------------------------------------------------------

--
-- 表的结构 `rg_config_upload`
--

CREATE TABLE IF NOT EXISTS `rg_config_upload` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `upload_size` int(10) NOT NULL,
  `upload_exts` varchar(250) DEFAULT NULL,
  `upload_replace` tinyint(1) DEFAULT NULL,
  `thumb_status` tinyint(1) DEFAULT NULL,
  `water_status` tinyint(1) DEFAULT NULL,
  `thumb_type` tinyint(1) DEFAULT NULL,
  `thumb_width` int(10) DEFAULT NULL,
  `thumb_height` int(10) DEFAULT NULL,
  `water_image` varchar(250) DEFAULT NULL,
  `water_position` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='网站配置' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `rg_config_upload`
--

INSERT INTO `rg_config_upload` (`id`, `name`, `upload_size`, `upload_exts`, `upload_replace`, `thumb_status`, `water_status`, `thumb_type`, `thumb_width`, `thumb_height`, `water_image`, `water_position`) VALUES
(1, '默认', 10, 'jpg,gif,bmp,png', 0, 0, 0, 1, 800, 800, 'logo.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `rg_content`
--

CREATE TABLE IF NOT EXISTS `rg_content` (
  `content_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `class_id` int(10) DEFAULT NULL COMMENT '栏目ID',
  `title` varchar(250) DEFAULT NULL COMMENT '标题',
  `urltitle` varchar(250) DEFAULT NULL COMMENT 'URL路径',
  `font_color` varchar(250) DEFAULT NULL COMMENT '颜色',
  `font_bold` tinyint(1) DEFAULT NULL COMMENT '加粗',
  `font_em` tinyint(1) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `keywords` varchar(250) DEFAULT NULL COMMENT '关键词',
  `description` varchar(250) DEFAULT NULL COMMENT '描述',
  `time` int(10) DEFAULT NULL COMMENT '更新时间',
  `image` varchar(250) DEFAULT NULL COMMENT '封面图',
  `url` varchar(250) DEFAULT NULL COMMENT '跳转',
  `sequence` int(10) DEFAULT NULL COMMENT '排序',
  `status` int(10) DEFAULT NULL COMMENT '状态',
  `copyfrom` varchar(250) DEFAULT NULL COMMENT '来源',
  `views` int(10) DEFAULT '0' COMMENT '浏览数',
  `taglink` int(10) DEFAULT '0' COMMENT 'TAG链接',
  `tpl` varchar(250) DEFAULT NULL,
  `site` int(10) DEFAULT '1',
  PRIMARY KEY (`content_id`),
  UNIQUE KEY `urltitle` (`urltitle`) USING BTREE,
  KEY `title` (`title`) USING BTREE,
  KEY `description` (`description`) USING BTREE,
  KEY `keywords` (`keywords`),
  KEY `class_id` (`class_id`) USING BTREE,
  KEY `time` (`time`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='内容基础' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `rg_content`
--

INSERT INTO `rg_content` (`content_id`, `class_id`, `title`, `urltitle`, `font_color`, `font_bold`, `font_em`, `position`, `keywords`, `description`, `time`, `image`, `url`, `sequence`, `status`, `copyfrom`, `views`, `taglink`, `tpl`, `site`) VALUES
(1, 1, 'Slide 1 pro', 'Slide-1-pro', '0', 0, 0, '1', '', '', 1425371820, '/upload/2015-03-03/b90c5a8bb400d3d6540484b21b273d47.jpg', '', 0, 1, '本站', 0, 1, '', 1),
(2, 1, 'Slide 2 pro', 'Slide-2-pro', '0', 0, 0, '', '', '', 1425372120, '/upload/2015-03-03/bcb5464e43bc5bd4568259e27cedef49.jpg', '', 0, 1, '本站', 2, 1, '', 1),
(3, 1, 'Slide 3 pro', 'Slide-3-pro', '0', 0, 0, '1', '', '', 1425372240, '/upload/2015-03-03/0a078720cd860a45661c33414d459091.jpg', '', 0, 1, '本站', 0, 1, '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `rg_content_article`
--

CREATE TABLE IF NOT EXISTS `rg_content_article` (
  `content_id` int(10) DEFAULT NULL,
  `content` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章内容信息';

--
-- 转存表中的数据 `rg_content_article`
--

INSERT INTO `rg_content_article` (`content_id`, `content`) VALUES
(1, '&lt;img src=&quot;/upload/2015-03-03/0e4f015bea6148b6cde4ab88c6bc5f55.jpg&quot; alt=&quot;&quot; /&gt;'),
(2, '&lt;img src=&quot;/upload/2015-03-03/bf343c36fc9da67b661cc6d9aae14cf3.jpg&quot; alt=&quot;&quot; /&gt;'),
(3, '&lt;img src=&quot;/upload/2015-03-03/0f1c5218d3fb4e50731c984b5a974998.jpg&quot; alt=&quot;&quot; /&gt;');

-- --------------------------------------------------------

--
-- 表的结构 `rg_ext_guestbook`
--

CREATE TABLE IF NOT EXISTS `rg_ext_guestbook` (
  `data_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `content` text,
  `time` int(10) DEFAULT NULL,
  PRIMARY KEY (`data_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `rg_ext_guestbook`
--

INSERT INTO `rg_ext_guestbook` (`data_id`, `name`, `email`, `content`, `time`) VALUES
(1, 'Life', '349865361@qq.com', '欢迎使用DuxCms内容管理系统！', 1418960975);

-- --------------------------------------------------------

--
-- 表的结构 `rg_field`
--

CREATE TABLE IF NOT EXISTS `rg_field` (
  `field_id` int(10) NOT NULL AUTO_INCREMENT,
  `fieldset_id` int(10) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `field` varchar(250) DEFAULT NULL,
  `type` int(5) DEFAULT '1',
  `tip` varchar(250) DEFAULT NULL,
  `verify_type` varchar(250) DEFAULT NULL,
  `verify_data` text,
  `verify_data_js` text,
  `verify_condition` tinyint(1) DEFAULT NULL,
  `default` varchar(250) DEFAULT NULL,
  `sequence` int(10) DEFAULT '0',
  `errormsg` varchar(250) DEFAULT NULL,
  `config` text,
  PRIMARY KEY (`field_id`),
  KEY `field` (`field`),
  KEY `sequence` (`sequence`),
  KEY `fieldset_id` (`fieldset_id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='扩展字段基础' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `rg_field`
--

INSERT INTO `rg_field` (`field_id`, `fieldset_id`, `name`, `field`, `type`, `tip`, `verify_type`, `verify_data`, `verify_data_js`, `verify_condition`, `default`, `sequence`, `errormsg`, `config`) VALUES
(1, 1, '昵称', 'name', 1, '', 'regex', 'cmVxdWlyZQ==', 'Kg==', 1, '', 0, '', ''),
(2, 1, '邮箱', 'email', 1, '', 'regex', 'ZW1haWw=', 'ZQ==', 1, '', 1, '', ''),
(3, 1, '内容', 'content', 2, '', 'regex', 'cmVxdWlyZQ==', 'Kg==', 1, '', 3, '', ''),
(4, 1, '时间', 'time', 10, '', 'regex', '', '', 1, '', 2, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `rg_fieldset`
--

CREATE TABLE IF NOT EXISTS `rg_fieldset` (
  `fieldset_id` int(10) NOT NULL AUTO_INCREMENT,
  `table` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`fieldset_id`),
  UNIQUE KEY `table` (`table`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='字段集基础' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `rg_fieldset`
--

INSERT INTO `rg_fieldset` (`fieldset_id`, `table`, `name`) VALUES
(1, 'guestbook', '留言板');

-- --------------------------------------------------------

--
-- 表的结构 `rg_fieldset_expand`
--

CREATE TABLE IF NOT EXISTS `rg_fieldset_expand` (
  `fieldset_id` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  UNIQUE KEY `fieldset_id` (`fieldset_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='字段集-扩展模型';

-- --------------------------------------------------------

--
-- 表的结构 `rg_fieldset_form`
--

CREATE TABLE IF NOT EXISTS `rg_fieldset_form` (
  `fieldset_id` int(10) DEFAULT NULL,
  `show_list` tinyint(1) DEFAULT NULL,
  `show_info` tinyint(1) DEFAULT NULL,
  `list_page` int(5) DEFAULT NULL,
  `list_where` varchar(250) DEFAULT NULL,
  `list_order` varchar(250) DEFAULT NULL,
  `tpl_list` varchar(250) DEFAULT NULL,
  `tpl_info` varchar(250) DEFAULT NULL,
  `post_status` tinyint(1) DEFAULT NULL,
  `post_msg` varchar(250) DEFAULT NULL,
  `post_return_url` varchar(250) DEFAULT NULL,
  UNIQUE KEY `fieldset_id` (`fieldset_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='字段集-扩展表单';

--
-- 转存表中的数据 `rg_fieldset_form`
--

INSERT INTO `rg_fieldset_form` (`fieldset_id`, `show_list`, `show_info`, `list_page`, `list_where`, `list_order`, `tpl_list`, `tpl_info`, `post_status`, `post_msg`, `post_return_url`) VALUES
(1, 1, 0, 10, '', 'data_id desc', 'guestbook', 'guestbook', 1, '留言发布成功！', '');

-- --------------------------------------------------------

--
-- 表的结构 `rg_field_expand`
--

CREATE TABLE IF NOT EXISTS `rg_field_expand` (
  `field_id` int(10) DEFAULT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='扩展字段-扩展模型';

-- --------------------------------------------------------

--
-- 表的结构 `rg_field_form`
--

CREATE TABLE IF NOT EXISTS `rg_field_form` (
  `field_id` int(10) DEFAULT NULL,
  `post` tinyint(1) DEFAULT '0',
  `show` tinyint(1) DEFAULT '0',
  `search` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='扩展字段-表单';

--
-- 转存表中的数据 `rg_field_form`
--

INSERT INTO `rg_field_form` (`field_id`, `post`, `show`, `search`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 1),
(3, 1, 1, 1),
(4, 0, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `rg_file`
--

CREATE TABLE IF NOT EXISTS `rg_file` (
  `file_id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  `original` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `ext` varchar(250) DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `time` int(10) DEFAULT NULL,
  PRIMARY KEY (`file_id`),
  KEY `ext` (`ext`),
  KEY `time` (`time`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='上传文件' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `rg_file`
--

INSERT INTO `rg_file` (`file_id`, `url`, `original`, `title`, `ext`, `size`, `time`) VALUES
(1, '/upload/2015-03-03/b90c5a8bb400d3d6540484b21b273d47.jpg', '/upload/2015-03-03/b90c5a8bb400d3d6540484b21b273d47.jpg', 'xc02', 'jpg', 60387, 1425371941),
(2, '/upload/2015-03-03/0e4f015bea6148b6cde4ab88c6bc5f55.jpg', '/upload/2015-03-03/0e4f015bea6148b6cde4ab88c6bc5f55.jpg', '1', 'jpg', 9412, 1425372049),
(3, '/upload/2015-03-03/bcb5464e43bc5bd4568259e27cedef49.jpg', '/upload/2015-03-03/bcb5464e43bc5bd4568259e27cedef49.jpg', 'newcar', 'jpg', 52453, 1425372206),
(4, '/upload/2015-03-03/bf343c36fc9da67b661cc6d9aae14cf3.jpg', '/upload/2015-03-03/bf343c36fc9da67b661cc6d9aae14cf3.jpg', '2', 'jpg', 8939, 1425372227),
(5, '/upload/2015-03-03/0a078720cd860a45661c33414d459091.jpg', '/upload/2015-03-03/0a078720cd860a45661c33414d459091.jpg', 'en_03', 'jpg', 112926, 1425372261),
(6, '/upload/2015-03-03/0f1c5218d3fb4e50731c984b5a974998.jpg', '/upload/2015-03-03/0f1c5218d3fb4e50731c984b5a974998.jpg', '3', 'jpg', 12987, 1425372272);

-- --------------------------------------------------------

--
-- 表的结构 `rg_fragment`
--

CREATE TABLE IF NOT EXISTS `rg_fragment` (
  `fragment_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `label` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`fragment_id`),
  KEY `label` (`label`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='网站碎片' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `rg_position`
--

CREATE TABLE IF NOT EXISTS `rg_position` (
  `position_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `sequence` int(10) DEFAULT '0',
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='推荐位' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `rg_position`
--

INSERT INTO `rg_position` (`position_id`, `name`, `sequence`) VALUES
(1, '首页推荐', 0);

-- --------------------------------------------------------

--
-- 表的结构 `rg_tags`
--

CREATE TABLE IF NOT EXISTS `rg_tags` (
  `tag_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `click` int(10) DEFAULT '1',
  `quote` int(10) DEFAULT '1',
  PRIMARY KEY (`tag_id`),
  KEY `quote` (`quote`),
  KEY `click` (`click`),
  KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TAG标签' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `rg_tags_has`
--

CREATE TABLE IF NOT EXISTS `rg_tags_has` (
  `content_id` int(10) DEFAULT NULL,
  `tag_id` int(10) DEFAULT NULL,
  KEY `aid` (`content_id`),
  KEY `tid` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TAG关系';

-- --------------------------------------------------------

--
-- 表的结构 `rg_total_spider`
--

CREATE TABLE IF NOT EXISTS `rg_total_spider` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `time` int(10) DEFAULT NULL,
  `baidu` int(10) DEFAULT '0',
  `google` int(10) DEFAULT '0',
  `soso` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='蜘蛛统计' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `rg_total_visitor`
--

CREATE TABLE IF NOT EXISTS `rg_total_visitor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `time` int(10) DEFAULT NULL,
  `count` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='访客统计' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `rg_total_visitor`
--

INSERT INTO `rg_total_visitor` (`id`, `time`, `count`) VALUES
(1, 1424793600, 4),
(2, 1424880000, 2),
(3, 1425052800, 81),
(4, 1425225600, 11),
(5, 1425312000, 323);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
