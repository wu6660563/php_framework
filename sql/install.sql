

DROP TABLE IF EXISTS `t_admin`;

CREATE TABLE `t_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `real_name` varchar(10) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `sex` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1男2女',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` char(10) NOT NULL DEFAULT '' COMMENT '密码盐',
  `power` text NOT NULL COMMENT '权限',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_ip` char(15) NOT NULL DEFAULT '' COMMENT '最后登录IP',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `t_admin` */

insert  into `t_admin`(`id`,`user_name`,`real_name`,`sex`,`email`,`password`,`salt`,`power`,`last_login`,`last_ip`) values (1,'admin','',1,'','fffc8435c7ea6d86bab15c51e116c91a','vQwn63pPuH','',1460164978,'127.0.0.1');

/*Table structure for table `t_customer_login` */

DROP TABLE IF EXISTS `t_customer_login`;

CREATE TABLE `t_customer_login` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login_date` date NOT NULL COMMENT '登录日期',
  `customer_id` int(11) NOT NULL COMMENT '用户ID',
  `platform` tinyint(4) NOT NULL DEFAULT '0' COMMENT '登录平台',
  `login_time` int(11) NOT NULL DEFAULT '0' COMMENT '登录时间',
  `3day_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '之后3天内是否回访',
  `7day_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '7天回访',
  `14day_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '14天回访',
  `30day_login` tinyint(4) NOT NULL DEFAULT '0' COMMENT '30天回访',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_date_id` (`login_date`,`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `t_customer_login` */

/*Table structure for table `t_lock` */

DROP TABLE IF EXISTS `t_lock`;

CREATE TABLE `t_lock` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lock_name` varchar(50) NOT NULL DEFAULT '',
  `lock_value` int(11) NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lock_name` (`lock_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

