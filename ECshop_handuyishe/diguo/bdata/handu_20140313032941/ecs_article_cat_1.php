<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article_cat`;");
E_C("CREATE TABLE `ecs_article_cat` (
  `cat_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL DEFAULT '',
  `cat_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `show_in_nav` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `cat_type` (`cat_type`),
  KEY `sort_order` (`sort_order`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article_cat` values('1',0xe7b3bbe7bb9fe58886e7b1bb,'2','',0xe7b3bbe7bb9fe4bf9de79599e58886e7b1bb,'50','0','0');");
E_D("replace into `ecs_article_cat` values('2',0xe7bd91e5ba97e4bfa1e681af,'3','',0xe7bd91e5ba97e4bfa1e681afe58886e7b1bb,'50','0','1');");
E_D("replace into `ecs_article_cat` values('3',0xe7bd91e5ba97e5b8aee58aa9e58886e7b1bb,'4','',0xe7bd91e5ba97e5b8aee58aa9e58886e7b1bb,'50','0','1');");
E_D("replace into `ecs_article_cat` values('4',0xe696b0e6898be4b88ae8b7af,'5','','','50','0','3');");
E_D("replace into `ecs_article_cat` values('5',0xe585b3e4ba8ee8aea2e8b4ad,'5','','','50','0','3');");
E_D("replace into `ecs_article_cat` values('6',0xe585b3e4ba8ee9858de98081,'5','','','50','0','3');");
E_D("replace into `ecs_article_cat` values('7',0xe5b8aee58aa9e4b8ade5bf83,'5','','','50','0','3');");
E_D("replace into `ecs_article_cat` values('8',0xe594aee5908ee69c8de58aa1,'5','','','50','0','3');");
E_D("replace into `ecs_article_cat` values('9',0xe585b3e4ba8ee68891e4bbac,'5','','','50','0','3');");
E_D("replace into `ecs_article_cat` values('10',0xe88194e7b3bbe59088e4bd9c,'5','','','50','0','3');");

require("../../inc/footer.php");
?>