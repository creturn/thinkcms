-- MySQL dump 10.13  Distrib 5.5.29, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mycms
-- ------------------------------------------------------
-- Server version	5.5.23-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `mycms`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `mycms` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mycms`;

--
-- Table structure for table `rt_article`
--

DROP TABLE IF EXISTS `rt_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `author` varchar(40) NOT NULL DEFAULT '',
  `title` varchar(120) NOT NULL DEFAULT '',
  `keywords` varchar(120) NOT NULL DEFAULT '',
  `copyfrom` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `content` text NOT NULL,
  `template` varchar(30) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `posid` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  `url` varchar(150) NOT NULL DEFAULT '',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`id`,`status`,`listorder`),
  KEY `catid` (`id`,`catid`,`status`),
  KEY `listorder` (`id`,`catid`,`status`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rt_attachment`
--

DROP TABLE IF EXISTS `rt_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_attachment` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '模型id',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '栏目id',
  `id` int(8) unsigned NOT NULL DEFAULT '0' COMMENT '内容id',
  `filename` varchar(50) NOT NULL DEFAULT '' COMMENT '文件名',
  `filepath` varchar(80) NOT NULL DEFAULT '' COMMENT '文件路径',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文件大小',
  `fileext` char(10) NOT NULL DEFAULT '' COMMENT '文件格式',
  `isimage` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为图片',
  `isthumb` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否要缩略图',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上传时间',
  `uploadip` char(15) NOT NULL DEFAULT '' COMMENT '上传ip',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rt_block`
--

DROP TABLE IF EXISTS `rt_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_block` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pos` char(30) NOT NULL DEFAULT '' COMMENT ' 位置',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '名称',
  `lang` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '语言，多语言中用',
  `content` text COMMENT '内容',
  PRIMARY KEY (`id`),
  KEY `pos` (`pos`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rt_category`
--

DROP TABLE IF EXISTS `rt_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `catname` varchar(30) NOT NULL DEFAULT '' COMMENT '栏目名称',
  `catdir` varchar(30) NOT NULL DEFAULT '' COMMENT '栏目目录',
  `parentdir` varchar(50) NOT NULL DEFAULT '' COMMENT '父级栏目目录',
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `moduleid` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `module` char(24) NOT NULL DEFAULT '',
  `arrparentid` varchar(255) NOT NULL DEFAULT '' COMMENT '父级id集合',
  `arrchildid` varchar(255) NOT NULL DEFAULT '' COMMENT '子集id集合',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '类型',
  `title` varchar(150) NOT NULL DEFAULT '' COMMENT 'seo标题',
  `keywords` varchar(100) NOT NULL DEFAULT '' COMMENT 'seo关键字',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT 'seo简介',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '排序号',
  `ishtml` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否生成静态页面',
  `ismenu` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否在导航显示',
  `hits` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  `image` varchar(100) NOT NULL DEFAULT '' COMMENT '栏目图片',
  `child` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否存在子节点',
  `url` varchar(150) NOT NULL DEFAULT '' COMMENT 'url规则',
  `template_list` varchar(20) NOT NULL DEFAULT '' COMMENT '列表页模板',
  `template_show` varchar(20) NOT NULL DEFAULT '' COMMENT '内容页模板',
  `pagesize` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '分页',
  `readgroup` varchar(100) NOT NULL DEFAULT '' COMMENT '可读权限组',
  `listtype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lang` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `urlruleid` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `presentpoint` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `chargepoint` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `paytype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `repeatchargedays` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `postgroup` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`),
  KEY `listorder` (`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rt_field`
--

DROP TABLE IF EXISTS `rt_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_field` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '模型id',
  `field` varchar(20) NOT NULL DEFAULT '' COMMENT '字段名',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '名称',
  `tips` varchar(150) NOT NULL DEFAULT '' COMMENT '提示',
  `required` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否必填字段',
  `minlength` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最小长度',
  `maxlength` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最大长度',
  `pattern` varchar(255) NOT NULL DEFAULT '' COMMENT '正则匹配',
  `errormsg` varchar(255) NOT NULL DEFAULT '' COMMENT '错误提示信息',
  `class` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '' COMMENT '类型。匹配前端输入类型',
  `setup` mediumtext NOT NULL COMMENT '设置',
  `ispost` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否允许会员提交',
  `unpostgroup` varchar(60) NOT NULL DEFAULT '' COMMENT '不能允许提交组',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序id',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为系统字段，不可让用户更改',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rt_member`
--

DROP TABLE IF EXISTS `rt_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) DEFAULT NULL COMMENT '密码',
  `email` varchar(45) DEFAULT NULL COMMENT '邮箱',
  `salt` char(5) DEFAULT NULL COMMENT '随机字符串，用于加强密码强度。密码加密类型password=MD5(password+salt);',
  `addtime` char(12) DEFAULT NULL COMMENT '添加时间',
  `paypass` char(32) DEFAULT NULL COMMENT '支付密码',
  `status` tinyint(4) DEFAULT '1' COMMENT '用户状态',
  `email_sta` tinyint(4) DEFAULT '0' COMMENT '邮箱状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `key_name` (`username`) USING BTREE,
  KEY `idx_time` (`addtime`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5687 DEFAULT CHARSET=utf8 COMMENT='用户基础表，用于存放用户基础信息';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rt_module`
--

DROP TABLE IF EXISTS `rt_module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_module` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '模型名称',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '模型表名',
  `description` varchar(200) NOT NULL DEFAULT '' COMMENT '模型简介',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '类型',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否系统字段',
  `issearch` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否需要搜索',
  `listfields` varchar(255) NOT NULL DEFAULT '' COMMENT '字段列表。默认（*）全部',
  `setup` mediumtext NOT NULL COMMENT '设置信息',
  `listorder` smallint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `postgroup` varchar(100) NOT NULL DEFAULT '' COMMENT '允许投稿组',
  `ispost` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否允许投稿',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rt_page`
--

DROP TABLE IF EXISTS `rt_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_page` (
  `id` smallint(5) unsigned NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `keywords` varchar(250) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` mediumtext NOT NULL COMMENT '简介',
  `content` mediumtext NOT NULL COMMENT '内容',
  `template` varchar(30) NOT NULL DEFAULT '' COMMENT '内容模板',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping routines for database 'mycms'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-18 14:28:55
