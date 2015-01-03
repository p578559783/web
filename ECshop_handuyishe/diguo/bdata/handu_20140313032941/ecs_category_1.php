<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `is_wshow` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1',0xe697b6e5b09ae5a5b3e8a385,'','','0','50','','','1','','1','0','','1');");
E_D("replace into `ecs_category` values('2',0xe4b88ae8a385,'','','1','50','','','0','','1','0','','1');");
E_D("replace into `ecs_category` values('3',0xe8a1ace8a1ab2fe7bda9e8a1ab,'','','9','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('4',0xe5a4b9e5858b2fe5a4a7e8a1a3,'','','2','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('5',0xe5bc80e8a59fe8a1ab,'','','2','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('6',0xe8bf9ee8a1a3e8a399,'','','9','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('7',0xe58d8ae8baabe8a399,'','','1','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('8',0xe8a3a4e8a385,'','','1','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('9',0xe8a399e8a385,'','','1','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('10',0xe8a3a4e8a29c,'','','1','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('11',0xe99e8b,'','','9','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('12',0xe29885e58ca1e5a881,'','','2','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('13',0xe58c85,'','','14','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('14',0xe9858de9a5b0,'','','1','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('15',0xe9a696e9a5b0,'','','30','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('16',0xe794b7e8a385e4b893e58cba,'','','0','50','','','1','','1','0','','0');");
E_D("replace into `ecs_category` values('17',0xe4bc98e99b854f4c,'','','0','50','','','1','','1','0','','0');");
E_D("replace into `ecs_category` values('18',0xe58fafe788b1e7aba5e8a385,'','','0','50','','','1','','1','0','','0');");
E_D("replace into `ecs_category` values('19',0xe6aca7e7be8ee9a38ee5b09a,'','','0','50','','','1','','1','0','','0');");
E_D("replace into `ecs_category` values('20',0x54e681a4e8a1ab,'','','28','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('21',0xe8a1ace8a1ab,'','','28','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('22',0xe5a496e5a597,'','','28','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('23',0xe99288e7bb87e8a1ab,'','','28','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('24',0xe9a9ace794b2,'','','28','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('25',0xe99e8be58c85e9858de9a5b0,'','','16','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('26',0xe8a3a4e8a385,'','','16','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('27',0xe7899be4bb94e8a3a4,'','','26','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('28',0xe4b88ae8a385,'','','16','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('29',0xe99e8b,'','','26','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('30',0xe58c85e58c85e7b3bbe58897,'','','0','50','','','1','','1','0','','0');");
E_D("replace into `ecs_category` values('31',0xe69785e8a18ce7aeb1,'','','30','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('32',0xe8bea3e5a688e58c85,'','','30','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('33',0xe59586e58aa1e794b7e58c85,'','','30','50','','','0','','1','0','','0');");
E_D("replace into `ecs_category` values('34',0xe794b5e5ad90e695b0e7a081,'','','0','50','','','0','','1','0','','0');");

require("../../inc/footer.php");
?>