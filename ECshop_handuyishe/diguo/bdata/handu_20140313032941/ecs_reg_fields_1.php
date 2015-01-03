<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_reg_fields`;");
E_C("CREATE TABLE `ecs_reg_fields` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `reg_field_name` varchar(60) NOT NULL,
  `dis_order` tinyint(3) unsigned NOT NULL DEFAULT '100',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_need` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_reg_fields` values('1',0x4d534e,'0','0','1','1');");
E_D("replace into `ecs_reg_fields` values('2',0x5151,'0','0','1','1');");
E_D("replace into `ecs_reg_fields` values('3',0xe58a9ee585ace794b5e8af9d,'0','0','1','1');");
E_D("replace into `ecs_reg_fields` values('4',0xe5aeb6e5baade794b5e8af9d,'0','0','1','1');");
E_D("replace into `ecs_reg_fields` values('5',0xe6898be69cba,'0','0','1','1');");
E_D("replace into `ecs_reg_fields` values('6',0xe5af86e7a081e689bee59b9ee997aee9a298,'0','0','1','1');");

require("../../inc/footer.php");
?>