<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('1','','0',0xe69fa5e79c8be8b4ade789a9e8bda6,'1','1','0',0x666c6f772e706870,0x746f70);");
E_D("replace into `ecs_nav` values('2','','0',0xe794a8e688b7e4b8ade5bf83,'1','2','0',0x757365722e706870,0x746f70);");
E_D("replace into `ecs_nav` values('4','','0',0xe79599e8a880e69dbf,'1','3','0',0x6d6573736167652e706870,0x746f70);");
E_D("replace into `ecs_nav` values('5',0x63,'1',0xe697b6e5b09ae5a5b3e8a385,'1','2','0',0x63617465676f72792e7068703f69643d31,0x6d6964646c65);");
E_D("replace into `ecs_nav` values('6',0x63,'16',0xe794b7e8a385e4b893e58cba,'1','4','0',0x63617465676f72792e7068703f69643d3136,0x6d6964646c65);");
E_D("replace into `ecs_nav` values('7',0x63,'17',0xe4bc98e99b854f4c,'1','6','0',0x63617465676f72792e7068703f69643d3137,0x6d6964646c65);");
E_D("replace into `ecs_nav` values('8',0x63,'30',0xe58c85e58c85e7b3bbe58897,'1','8','0',0x63617465676f72792e7068703f69643d3330,0x6d6964646c65);");
E_D("replace into `ecs_nav` values('9',0x63,'19',0xe6aca7e7be8ee9a38ee5b09a,'1','10','0',0x63617465676f72792e7068703f69643d3139,0x6d6964646c65);");
E_D("replace into `ecs_nav` values('10',0x63,'18',0xe58fafe788b1e7aba5e8a385,'1','12','0',0x63617465676f72792e7068703f69643d3138,0x6d6964646c65);");
E_D("replace into `ecs_nav` values('11','','0',0xe68a98e689a3e4b893e58cba,'1','13','0',0x7365617263682e7068703f696e74726f3d70726f6d6f74696f6e,0x6d6964646c65);");

require("../../inc/footer.php");
?>