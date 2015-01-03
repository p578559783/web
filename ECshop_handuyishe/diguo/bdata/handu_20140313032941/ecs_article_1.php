<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article`;");
E_C("CREATE TABLE `ecs_article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '',
  `author_email` varchar(60) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `article_type` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `file_url` varchar(255) NOT NULL DEFAULT '',
  `open_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article` values('1','2',0xe5858de8b4a3e69da1e6acbe,'','','','','0','1','1336651277','','0','','');");
E_D("replace into `ecs_article` values('2','2',0xe99a90e7a781e4bf9de68aa4,'','','','','0','1','1336651277','','0','','');");
E_D("replace into `ecs_article` values('3','2',0xe592a8e8afa2e783ade782b9,'','','','','0','1','1336651277','','0','','');");
E_D("replace into `ecs_article` values('4','2',0xe88194e7b3bbe68891e4bbac,'','','','','0','1','1336651277','','0','','');");
E_D("replace into `ecs_article` values('5','2',0xe585ace58fb8e7ae80e4bb8b,'','','','','0','1','1336651277','','0','','');");
E_D("replace into `ecs_article` values('6','-1',0xe794a8e688b7e58d8fe8aeae,'','','','','0','1','1336651277','','0','','');");
E_D("replace into `ecs_article` values('7','4',0xe6808ee6a0b7e4b88be8aea2e58d95,'','','','','0','1','1336820137','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('8','4',0xe4bc9ae59198e7ad89e7baa7e588b6e5baa6,'','','','','0','1','1336820148','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('9','4',0xe7a7afe58886e588b6e5baa6,'','','','','0','1','1336820159','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('10','4',0xe4bc98e683a0e588b8e588b6e5baa6,'','','','','0','1','1336820169','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('11','5',0xe7bd91e4b88ae694afe4bb98,'','','','','0','1','1336820214','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('12','5',0xe982aee5b180e6b187e6acbe,'','','','','0','1','1336820222','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('13','5',0xe993b6e8a18ce6b187e6acbe,'','','','','0','1','1336820235','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('14','5',0xe8b4a7e588b0e4bb98e6acbe,'','','','','0','1','1336820250','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('15','6',0xe9858de98081e697b6e997b4,'','','','','0','1','1336820258','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('16','6',0xe9858de98081e8b4b9e794a8,'','','','','0','1','1336820268','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('17','7',0xe689bee59b9ee5af86e7a081,'','','','','0','1','1336820282','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('18','7',0xe5b8b8e8a781e997aee9a298,'','','','','0','1','1336820291','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('19','7',0xe585ace5918ae6a08f,'','','','','0','1','1336820299','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('20','8',0xe98080e68da2e8b4a7e694bfe7ad96,'','','','','0','1','1336820306','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('21','8',0xe98080e68da2e8b4a7e794b3e8afb7,'','','','','0','1','1336820313','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('22','8',0x313a31e79599e8a880e7ad94e5a48d,'','','','','0','1','1336820320','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('23','9',0xe585ace58fb8e7ae80e4bb8b,'','','','','0','1','1336820328','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('24','9',0xe8af9ae88198e88bb1e6898d,'','','','','0','1','1336820335','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('25','10',0xe88194e7b3bbe68891e4bbac,'','','','','0','1','1336820342','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('26','10',0xe58f8be68385e993bee68ea5,'','','','','0','1','1336820350','','0',0x687474703a2f2f,'');");
E_D("replace into `ecs_article` values('27','10',0xe5ae9ee4bd93e689b9e58f91e68b9be58b9f,'','','','','0','1','1336820358','','0',0x687474703a2f2f,'');");

require("../../inc/footer.php");
?>