/*
Navicat MySQL Data Transfer

Source Server         : ww
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : demo01

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-09-09 15:04:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '标识列',
  `title` varchar(100) NOT NULL COMMENT '留言标题',
  `message` longtext COMMENT '留言信息',
  `createdate` datetime DEFAULT NULL COMMENT '留言时间',
  `uid` int(11) DEFAULT NULL COMMENT '外键关联用户表',
  `state` enum('0','1') DEFAULT '1' COMMENT '1 为显示 0 位不显示',
  `hits` int(11) DEFAULT NULL COMMENT '点击量',
  `ip` varchar(15) DEFAULT NULL COMMENT '留言IP',
  PRIMARY KEY (`mid`),
  KEY `pk_uid` (`uid`),
  KEY `id` (`mid`) USING BTREE,
  CONSTRAINT `pk_uid` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '我发布内容', '大大大对方答复答复', '2015-09-07 14:25:59', '1', '1', '1', '111.111.11');
INSERT INTO `message` VALUES ('2', '留言标题', '《》&lt;&lt;&lt;&gt;&gt;&gt;&gt;&gt;&gt;sdafasdf&lt;&lt;&lt;&lt;&gt;&gt;&gt;&gt;\r\n密码登录\r\n内部员工，使用用户名密码方式登录', '2015-09-08 09:53:55', '1', '1', '1', '::1');
INSERT INTO `message` VALUES ('3', '习近平：在高原上工作最宝贵的是精神(图)', '　　在“九三”大阅兵的礼炮声中，西藏自治区迎来了成立50年大庆。50年来，在中国共产党的领导下，实行民族自制，雪域高原发生了翻天覆地的变化，今日的西藏，是其历史上最为辉煌的时期。这辉煌，只有开始，没有结束，随着小康社会的全面建成、中华民族的伟大复兴，这辉煌没有终点；这辉煌，是物质的，更是精神的，一代代建藏者，以特有的精神品质，用辛勤的汗水甚至生命铸就了高原辉煌之路，他们的精神，就像高耸天宫的南迦巴瓦、珠穆朗玛，令世人景仰。习近平指出：“在高原上工作，最稀缺的是氧气，最宝贵的是精神。”', '2015-09-08 10:18:14', '1', '1', '1', '::1');
INSERT INTO `message` VALUES ('4', 'A股拟推熔断机制：开盘跌7%将全天停市', '　前日晚间（9月6日），证监会刚刚表态将研究关于资本市场的熔断机制，一天之后，相关意见征求稿即对外发布。上证所、深交所和中金所昨日发布公告称，拟在保留现有个股涨跌幅制度前提下，引入指数熔断机制：以沪深300指数作为指数熔断的基准指数，设置5%、7%两档指数熔断阈值，涨跌都熔断。征求意见稿截止日期为9月21日。', '2015-09-08 10:19:16', '1', '1', '1', '::1');
INSERT INTO `message` VALUES ('5', '安卓手机赔钱甩卖 高端机市场只能苹果独大？', '媒体报道，苹果将在9月份发布新手机。这款被称为iPhone6s的手机将支持ForceTouch，新的1200万像素后置摄像头、新的AppleWatch式动态壁纸、A9处理器、升级前置摄像头、新的高通通讯模块。\r\n\r\n和此前苹果发售新手机的情报出现之后不同，这次的预告并没引起科技领域更多的关注，媒体热度明显下降，而普通消费者好像也对这款手机的期待与此前比下降了很多。', '2015-09-08 10:19:54', '1', '1', '1', '::1');
INSERT INTO `message` VALUES ('6', '运营商的补贴热情大大销减', '中国的三家基础运营商刚刚经历换帅，新的领导进入角色还需要时间，整个团队的磨合也需要过程。虽说新官上任三把火，可这些新官都是老官，并不存在需要强心针的过度营销行为来助阵。对于新上市的苹果手机，很可能不会改变原有的策略，不太可能冒险冒进。\r\n\r\n更重要的是，4G时代带来了全网通的智能手机流行，终端的丰富度和自由度大增，运营商也没有必要再通过一款手机来锁定用户，事实上也是锁定不住的，苹果手机的市场价值大受影响，很难再让运营商折腰。', '2015-09-08 10:20:27', '1', '1', '1', '::1');
INSERT INTO `message` VALUES ('7', '我要留言', '祝贺反法西斯70周年', '2015-09-08 10:55:11', '1', '1', '1', '::1');
INSERT INTO `message` VALUES ('8', '测试留言', '留言成功！', '2015-09-09 13:46:56', '1', '1', '1', '::1');

-- ----------------------------
-- Table structure for message_replay
-- ----------------------------
DROP TABLE IF EXISTS `message_replay`;
CREATE TABLE `message_replay` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '标识列',
  `mid` int(11) NOT NULL COMMENT '外键关联的是留言表的主键',
  `uid` int(11) DEFAULT NULL COMMENT '外键关联用户表的主键',
  `content` text NOT NULL,
  `replaytime` datetime DEFAULT NULL,
  `state` enum('0','1') DEFAULT '1' COMMENT '回复状态',
  `ip` varchar(15) DEFAULT NULL COMMENT '回复的IP',
  PRIMARY KEY (`id`),
  KEY `pk_replay_uid` (`uid`),
  KEY `pk_replay_mid` (`mid`),
  KEY `index_replay_id` (`id`),
  CONSTRAINT `pk_replay_mid` FOREIGN KEY (`mid`) REFERENCES `message` (`mid`),
  CONSTRAINT `pk_replay_uid` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message_replay
-- ----------------------------
INSERT INTO `message_replay` VALUES ('1', '1', '1', '更新的内容', '2015-09-07 14:27:34', '1', '111.111');
INSERT INTO `message_replay` VALUES ('2', '1', '1', '测试一下', '2015-09-07 14:27:53', '1', '1222');
INSERT INTO `message_replay` VALUES ('3', '1', '1', '插入的内容', '2015-09-07 16:12:58', '0', '::1');
INSERT INTO `message_replay` VALUES ('4', '1', '1', '插入的内容', '2015-09-07 16:13:32', '0', '::1');
INSERT INTO `message_replay` VALUES ('5', '1', '1', '插入的内容', '2015-09-07 16:13:57', '0', '::1');
INSERT INTO `message_replay` VALUES ('6', '1', '1', '插入的内容', '2015-09-07 16:13:59', '0', '::1');
INSERT INTO `message_replay` VALUES ('7', '1', '1', '插入的内容', '2015-09-07 16:14:00', '0', '::1');
INSERT INTO `message_replay` VALUES ('8', '1', '1', '插入的内容', '2015-09-07 16:14:00', '0', '::1');
INSERT INTO `message_replay` VALUES ('9', '1', '1', '插入的内容', '2015-09-07 16:16:35', '0', '::1');
INSERT INTO `message_replay` VALUES ('11', '1', '1', '插入的内容', '2015-09-07 16:19:50', '0', '::1');
INSERT INTO `message_replay` VALUES ('12', '1', '1', '插入的内容', '2015-09-07 16:21:20', '0', '::1');
INSERT INTO `message_replay` VALUES ('13', '1', '1', '插入的内容', '2015-09-07 16:23:15', '0', '::1');
INSERT INTO `message_replay` VALUES ('14', '1', '1', '插入的内容', '2015-09-07 16:24:19', '0', '::1');
INSERT INTO `message_replay` VALUES ('15', '1', '1', '插入的内容', '2015-09-07 16:24:58', '0', '::1');
INSERT INTO `message_replay` VALUES ('16', '1', '1', '插入的内容', '2015-09-07 16:25:12', '0', '::1');
INSERT INTO `message_replay` VALUES ('17', '7', '1', '你反西斯!我同意 你去吧！', '2015-09-08 14:48:02', '1', '::1');
INSERT INTO `message_replay` VALUES ('18', '7', '1', '可以你挺勇敢!', '2015-09-08 14:48:30', '1', '::1');
INSERT INTO `message_replay` VALUES ('19', '6', '1', 'sdaafasdf', '2015-09-08 15:00:57', '1', '::1');
INSERT INTO `message_replay` VALUES ('20', '6', '1', 'asdfasdfsda111111111111111111111', '2015-09-08 15:01:04', '1', '::1');
INSERT INTO `message_replay` VALUES ('21', '6', '1', '2222222222222222', '2015-09-08 15:01:10', '1', '::1');
INSERT INTO `message_replay` VALUES ('22', '6', '1', 'sadfsdfsdf', '2015-09-08 15:01:32', '1', '::1');
INSERT INTO `message_replay` VALUES ('23', '7', '1', 'ddd', '2015-09-09 11:15:45', '1', '::1');
INSERT INTO `message_replay` VALUES ('24', '7', '1', 'ddd', '2015-09-09 11:17:21', '1', '::1');
INSERT INTO `message_replay` VALUES ('25', '7', '1', '1111', '2015-09-09 13:46:40', '1', '::1');
INSERT INTO `message_replay` VALUES ('26', '8', '6', 'aaaaddd', '2015-09-09 14:52:57', '1', '::1');
INSERT INTO `message_replay` VALUES ('27', '8', '10', '内容！！', '2015-09-09 14:54:26', '1', '::1');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `username` varchar(50) NOT NULL COMMENT '登录用户名',
  `nickname` varchar(100) DEFAULT NULL COMMENT '用户昵称',
  `password` varchar(50) NOT NULL,
  `pictrure` varchar(100) DEFAULT NULL,
  `registertime` datetime DEFAULT NULL COMMENT '注册时间',
  `lasttime` datetime DEFAULT NULL COMMENT '最后登录的时间',
  `lastip` varchar(15) DEFAULT NULL COMMENT '最后登录IP',
  `group` enum('9','1','0') DEFAULT '1' COMMENT '1普通用户 0 禁言用户 9 超级用户',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `u_username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '超级用户', '698d51a19d8a121ce581499d7b701668', '/asdfsdf/x.jpg', '2015-09-07 14:23:24', '2015-09-07 14:23:29', '11.11.11.11', '9');
INSERT INTO `users` VALUES ('6', 'admin2', '111', '698d51a19d8a121ce581499d7b701668', './upload/2015/09/new_1441778374149.jpg', '2015-09-09 13:59:34', '0000-00-00 00:00:00', '::1', '1');
INSERT INTO `users` VALUES ('9', 'admin4', '111', '698d51a19d8a121ce581499d7b701668', './upload/2015/09/new_1441778904392.jpg', '2015-09-09 14:08:24', '0000-00-00 00:00:00', '::1', '1');
INSERT INTO `users` VALUES ('10', 'admin3', '111', 'bcbe3365e6ac95ea2c0343a2395834dd', './upload/2015/09/new_1441779116710.jpg', '2015-09-09 14:11:56', '0000-00-00 00:00:00', '::1', '1');

-- ----------------------------
-- Table structure for users_info
-- ----------------------------
DROP TABLE IF EXISTS `users_info`;
CREATE TABLE `users_info` (
  `uid` int(11) NOT NULL COMMENT '外键 关联用户表',
  `address` varchar(200) DEFAULT NULL COMMENT '地址',
  `phone` varchar(255) DEFAULT NULL COMMENT '电话',
  `tel` varchar(255) DEFAULT NULL COMMENT '住宅电话',
  PRIMARY KEY (`uid`),
  KEY `index_info_uid` (`uid`),
  CONSTRAINT `pk_info_uid` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户详情表';

-- ----------------------------
-- Records of users_info
-- ----------------------------
INSERT INTO `users_info` VALUES ('1', '唐山路南', '110', '999');
INSERT INTO `users_info` VALUES ('6', '111', '111', '111');
INSERT INTO `users_info` VALUES ('9', '111', '111', '111');
INSERT INTO `users_info` VALUES ('10', '111', '111', '111');
