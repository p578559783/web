<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','15','1',0x3235,'');");
E_D("replace into `ecs_goods_attr` values('2','15','1',0x3236,'');");
E_D("replace into `ecs_goods_attr` values('3','15','1',0x3237,'');");
E_D("replace into `ecs_goods_attr` values('4','15','1',0x3238,'');");
E_D("replace into `ecs_goods_attr` values('5','15','1',0x3239,'');");
E_D("replace into `ecs_goods_attr` values('6','23','1',0x3235,'');");
E_D("replace into `ecs_goods_attr` values('7','23','1',0x3236,'');");
E_D("replace into `ecs_goods_attr` values('8','23','1',0x3237,'');");
E_D("replace into `ecs_goods_attr` values('9','23','1',0x3238,'');");
E_D("replace into `ecs_goods_attr` values('10','23','1',0x3239,'');");

require("../../inc/footer.php");
?>