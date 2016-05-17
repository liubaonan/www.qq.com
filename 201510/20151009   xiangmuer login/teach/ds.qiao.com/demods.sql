/*
Navicat MySQL Data Transfer

Source Server         : ww
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : demods

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-10-09 17:14:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '标识列',
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `group` enum('1','9') NOT NULL DEFAULT '1' COMMENT '1为普通用户 9为管理员',
  `createtime` datetime NOT NULL COMMENT '用户生成时间',
  `lasttime` datetime NOT NULL COMMENT '最后登录时间',
  `lastip` varchar(16) NOT NULL,
  `comment` varchar(100) DEFAULT NULL COMMENT '备注字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', 'admin', 'admin', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1');
