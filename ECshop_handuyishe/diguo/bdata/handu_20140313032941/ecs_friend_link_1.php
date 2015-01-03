<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_friend_link`;");
E_C("CREATE TABLE `ecs_friend_link` (
  `link_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_logo` varchar(255) NOT NULL DEFAULT '',
  `show_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`link_id`),
  KEY `show_order` (`show_order`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_friend_link` values('2',0xe4b9b0e590a6e7bd91,0x687474703a2f2f7777772e6d6169666f752e6e65742f,'','51');");
E_D("replace into `ecs_friend_link` values('3',0xe5858de8b4b9e5bc80e78bace7ab8be7bd91e5ba97,0x687474703a2f2f7777772e776477642e636f6d2f,'','52');");

require("../../inc/footer.php");
?>