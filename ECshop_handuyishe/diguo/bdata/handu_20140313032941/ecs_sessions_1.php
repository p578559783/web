<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values(0x3939613736303961643236666639343632626333363964383938643861633235,'1394681396','0','1',0x3132372e302e302e31,'0','0','0.00','0',0x613a343a7b733a31303a2261646d696e5f6e616d65223b733a353a2261646d696e223b733a31313a22616374696f6e5f6c697374223b733a333a22616c6c223b733a31303a226c6173745f636865636b223b693a313339343638313339363b733a31323a22737570706c696572735f6964223b733a313a2230223b7d);");
E_D("replace into `ecs_sessions` values(0x6336383036393131376462393666366266623764633032383936646466313462,'1394680739','0','0',0x3132372e302e302e31,'0','0','1.00','0',0x613a333a7b733a373a2266726f6d5f6164223b693a303b733a373a2272656665726572223b733a363a22e69cace7ab99223b733a31303a226c6f67696e5f6661696c223b693a303b7d);");

require("../../inc/footer.php");
?>