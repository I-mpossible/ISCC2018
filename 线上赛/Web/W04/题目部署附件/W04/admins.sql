/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : baji

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-07-01 13:51:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admins`
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) DEFAULT NULL,
  `userPwd` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT '0',
  `role` tinyint(1) DEFAULT '0',
  `money` int(1) DEFAULT '1000',
  `flag` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'admin', '0aeefc4806c07287d7a39f90b5b12240', 'admin@qq.com', '0', '0', '10000', 'Y0u_@@33w_dxxmn_9rf0Od');
