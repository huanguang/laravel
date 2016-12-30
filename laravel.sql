/*
Navicat MySQL Data Transfer

Source Server         : php7
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2016-12-30 18:49:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `web_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_domain_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_keyword_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_default` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_encryption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_copyright` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_statistics` text COLLATE utf8_unicode_ci NOT NULL,
  `web_record_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_is_close` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_close_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `web_disable_text` text COLLATE utf8_unicode_ci NOT NULL,
  `web_is_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_register_verif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_login_verif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_board_verif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_comment_verif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_is_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_mobile_default` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_email_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_email_smtp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_email_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_email_port` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_upload_files` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_upload_catalog` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_enclosure_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_img_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_is_member` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_is_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL DEFAULT '1',
  `web_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('dddddddddddd', '', '我的网站234', '我的网站', '假的吧', '1', 'EmiNaTl9c', 'Copyright © 2017 XXXX 版权所有', '', '', '昆明北京路', '0871-66666', '', '站点维护中，请稍等一会...', '艾滋病|中国共产党|111111111', '', '', '', '', '', '', '2', 'ddend@qq.com', '站名', 'smtp.exmail.qq.com', '123zstQhz4', '25', '2048', './uploads/', 'jpg,gif,png,jpeg,txt,doc,docx,xls,ppt,zip,rar,mp3', 'jpg,gif,png,jpeg', '', '', null, '0000-00-00 00:00:00', '1', '');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_12_30_101938_create_config_table', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
