<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_user`;");
E_C("CREATE TABLE `ecs_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `suppliers_id` smallint(5) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_user` values('1',0x61646d696e,0x3435353136333333354071712e636f6d,0x6630306232613135346563323736633530663564633837383466366638303164,0x35343334,'1336651277','1394428850',0x3132372e302e302e31,0x616c6c,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0','','0');");

require("../../inc/footer.php");
?>