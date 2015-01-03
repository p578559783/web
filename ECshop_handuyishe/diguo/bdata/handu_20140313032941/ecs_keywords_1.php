<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2012-05-10',0x656373686f70,0x3232,'13');");
E_D("replace into `ecs_keywords` values('2012-05-13',0x656373686f70,0xe59381e5908de68896e59586e59381e58fb7,'1');");
E_D("replace into `ecs_keywords` values('2012-05-13',0x656373686f70,0x3232,'3');");
E_D("replace into `ecs_keywords` values('2012-05-13',0x656373686f70,0x65656565,'1');");
E_D("replace into `ecs_keywords` values('2012-05-13',0x656373686f70,0xe5a5b3e8a385,'1');");
E_D("replace into `ecs_keywords` values('2012-05-13',0x656373686f70,0x66656d696e6965,'14');");
E_D("replace into `ecs_keywords` values('2012-05-13',0x656373686f70,0x32,'1');");
E_D("replace into `ecs_keywords` values('2012-05-13',0x656373686f70,0x4869efbc81e683b3e689bee4bb80e4b988efbc9f,'1');");
E_D("replace into `ecs_keywords` values('2012-05-13',0x656373686f70,0x63757465,'6');");
E_D("replace into `ecs_keywords` values('2013-12-12',0x656373686f70,0x32373031,'2');");
E_D("replace into `ecs_keywords` values('2013-12-12',0x656373686f70,0xe8a1a3,'1');");
E_D("replace into `ecs_keywords` values('2013-12-12',0x656373686f70,0xe99288e7bb87e8a1ab,'20');");

require("../../inc/footer.php");
?>