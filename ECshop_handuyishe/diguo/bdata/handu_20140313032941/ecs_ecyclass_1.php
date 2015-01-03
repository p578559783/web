<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecyclass`;");
E_C("CREATE TABLE `ecs_ecyclass` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(150) NOT NULL DEFAULT '',
  `brand_logo` varchar(255) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `porduct_id` int(11) unsigned NOT NULL DEFAULT '0',
  `pclassid` tinyint(6) unsigned NOT NULL DEFAULT '1',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecyclass` values('1',0x31323132e5b9b4e7bb88e79b9be585b8,0x313338363830373037333039303430343538352e6a7067,0x31323132e5b9b4e7bb88e79b9be585b8,0x687474703a2f2f,'1','1','1','1');");
E_D("replace into `ecs_ecyclass` values('2',0xe5b9b4e7bb88e59381e7898ce59ba2,0x313338363830373038323339373032313231332e6a7067,0xe5b9b4e7bb88e59381e7898ce59ba2,0x687474703a2f2f,'1','1','1','1');");
E_D("replace into `ecs_ecyclass` values('3',0xe696b0e5b9b4e8a385e68f90e5898de8b4ad,0x313338363830373039393734383031343634382e6a7067,0xe696b0e5b9b4e8a385e68f90e5898de8b4ad,0x687474703a2f2f,'1','1','1','1');");
E_D("replace into `ecs_ecyclass` values('4',0x31,0x313338363830373531393733353137343937372e6a7067,'',0x687474703a2f2f,'1','1','2','1');");
E_D("replace into `ecs_ecyclass` values('5',0x32,0x313338363830373532363432303335363537382e6a7067,'',0x687474703a2f2f,'1','1','3','1');");
E_D("replace into `ecs_ecyclass` values('6',0x31,0x313338363830373635343035353630313331322e6a7067,'',0x687474703a2f2f,'1','1','4','1');");
E_D("replace into `ecs_ecyclass` values('7',0x32,0x313338363830373636313133313530393735302e6a7067,'',0x687474703a2f2f,'1','1','4','1');");
E_D("replace into `ecs_ecyclass` values('8',0x33,0x313338363830373636373139373533303639372e6a7067,'',0x687474703a2f2f,'1','1','4','1');");

require("../../inc/footer.php");
?>