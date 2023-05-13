/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : supermarket

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2023-05-04 09:38:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `buys`
-- ----------------------------
DROP TABLE IF EXISTS `buys`;
CREATE TABLE `buys` (
  `buyid` int(11) NOT NULL COMMENT '交易记录编号',
  `userid` int(11) NOT NULL COMMENT '用户编号',
  `goodsno` int(11) NOT NULL COMMENT '商品编号',
  `quantity` int(11) DEFAULT NULL COMMENT '购买数量',
  `buydate` date DEFAULT NULL COMMENT '购买日期',
  PRIMARY KEY (`buyid`),
  KEY `userid` (`userid`),
  KEY `goodsno` (`goodsno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of buys
-- ----------------------------
INSERT INTO `buys` VALUES ('13', '5', '7', '34', '2017-07-01');
INSERT INTO `buys` VALUES ('12', '9', '4', '5', '2017-06-01');
INSERT INTO `buys` VALUES ('11', '8', '8', '2345', '2017-05-01');
INSERT INTO `buys` VALUES ('10', '8', '6', '1234', '2017-04-01');
INSERT INTO `buys` VALUES ('9', '4', '9', '10', '2017-02-04');
INSERT INTO `buys` VALUES ('8', '7', '8', '1', '2017-02-01');
INSERT INTO `buys` VALUES ('7', '7', '5', '1', '2017-01-02');
INSERT INTO `buys` VALUES ('6', '3', '4', '1', '2015-02-08');
INSERT INTO `buys` VALUES ('5', '3', '2', '2', '2014-06-06');
INSERT INTO `buys` VALUES ('4', '3', '3', '3', '2012-02-02');
INSERT INTO `buys` VALUES ('3', '1', '2', '3', '2010-01-01');
INSERT INTO `buys` VALUES ('2', '1', '1', '1', '2009-10-10');
INSERT INTO `buys` VALUES ('1', '1', '1', '1', '2009-09-09');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `goodsno` int(11) NOT NULL COMMENT '商品编号',
  `goodsname` varchar(20) NOT NULL COMMENT '商品名称',
  `price` decimal(7,2) DEFAULT NULL COMMENT '价格',
  `storage` int(11) DEFAULT NULL COMMENT '库存数量',
  PRIMARY KEY (`goodsno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '液晶电视', '9999.00', '100');
INSERT INTO `goods` VALUES ('2', '手提电脑', '8888.00', '1000');
INSERT INTO `goods` VALUES ('3', '键盘', '55.00', '1000');
INSERT INTO `goods` VALUES ('4', '鼠标', '66.00', '100');
INSERT INTO `goods` VALUES ('5', 'CD', '20.00', '20');
INSERT INTO `goods` VALUES ('6', 'VCD', '20.00', '500');
INSERT INTO `goods` VALUES ('7', '手机', '2000.00', '2000');
INSERT INTO `goods` VALUES ('8', '耳机', '150.00', '200');
INSERT INTO `goods` VALUES ('9', '相机', '2400.00', '234');
INSERT INTO `goods` VALUES ('10', '摄像头', '89.00', '3456');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL COMMENT '用户编号',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `realname` varchar(16) NOT NULL COMMENT '真实名称',
  `age` int(11) DEFAULT NULL COMMENT '年龄',
  `balance` decimal(7,2) NOT NULL DEFAULT '0.00' COMMENT '账户余额',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'bird', '冯坤', '45', '0.00');
INSERT INTO `users` VALUES ('2', 'dragon', '王蒙', '43', '232.00');
INSERT INTO `users` VALUES ('3', 'fly', '李飞', '23', '1234.00');
INSERT INTO `users` VALUES ('4', 'happy', '董乐', null, '0.00');
INSERT INTO `users` VALUES ('5', 'ldp', '李大鹏', '45', '0.00');
INSERT INTO `users` VALUES ('6', 'solo', '张韧', '23', '0.00');
INSERT INTO `users` VALUES ('7', 'wm', '王明', null, '0.00');
INSERT INTO `users` VALUES ('8', 'wxm', '王晓明', '34', '234.00');
INSERT INTO `users` VALUES ('9', 'yanzi', '杨燕青', '100', '3456.00');
INSERT INTO `users` VALUES ('10', 'zhaoxiaoming', '赵晓明', '16', '123.00');
