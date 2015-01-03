<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_products`;");
E_C("CREATE TABLE `ecs_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_products` values('1','23',0x36,0x454353303030303233675f7031,'30');");
E_D("replace into `ecs_products` values('2','23',0x37,0x454353303030303233675f7032,'30');");
E_D("replace into `ecs_products` values('3','23',0x38,0x454353303030303233675f7033,'30');");
E_D("replace into `ecs_products` values('4','23',0x39,0x454353303030303233675f7034,'30');");
E_D("replace into `ecs_products` values('5','23',0x3130,0x454353303030303233675f7035,'30');");

require("../../inc/footer.php");
?>