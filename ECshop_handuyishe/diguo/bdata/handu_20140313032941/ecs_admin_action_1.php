<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_action`;");
E_C("CREATE TABLE `ecs_admin_action` (
  `action_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `action_code` varchar(20) NOT NULL DEFAULT '',
  `relevance` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`action_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_action` values('1','0',0x676f6f6473,'');");
E_D("replace into `ecs_admin_action` values('2','0',0x636d735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('3','0',0x75736572735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('4','0',0x707269765f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('5','0',0x7379735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('6','0',0x6f726465725f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('7','0',0x70726f6d6f74696f6e,'');");
E_D("replace into `ecs_admin_action` values('8','0',0x656d61696c,'');");
E_D("replace into `ecs_admin_action` values('9','0',0x74656d706c617465735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('10','0',0x64625f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('11','0',0x736d735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('21','1',0x676f6f64735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('22','1',0x72656d6f76655f6261636b,'');");
E_D("replace into `ecs_admin_action` values('23','1',0x6361745f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('24','1',0x6361745f64726f70,0x6361745f6d616e616765);");
E_D("replace into `ecs_admin_action` values('25','1',0x617474725f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('26','1',0x6272616e645f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('27','1',0x636f6d6d656e745f70726976,'');");
E_D("replace into `ecs_admin_action` values('30','2',0x61727469636c655f636174,'');");
E_D("replace into `ecs_admin_action` values('31','2',0x61727469636c655f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('32','2',0x73686f70696e666f5f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('33','2',0x73686f7068656c705f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('34','2',0x766f74655f70726976,'');");
E_D("replace into `ecs_admin_action` values('35','7',0x746f7069635f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('38','3',0x696e746567726174655f7573657273,'');");
E_D("replace into `ecs_admin_action` values('39','3',0x73796e635f7573657273,0x696e746567726174655f7573657273);");
E_D("replace into `ecs_admin_action` values('40','3',0x75736572735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('41','3',0x75736572735f64726f70,0x75736572735f6d616e616765);");
E_D("replace into `ecs_admin_action` values('42','3',0x757365725f72616e6b,'');");
E_D("replace into `ecs_admin_action` values('43','4',0x61646d696e5f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('44','4',0x61646d696e5f64726f70,0x61646d696e5f6d616e616765);");
E_D("replace into `ecs_admin_action` values('45','4',0x616c6c6f745f70726976,0x61646d696e5f6d616e616765);");
E_D("replace into `ecs_admin_action` values('46','4',0x6c6f67735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('47','4',0x6c6f67735f64726f70,0x6c6f67735f6d616e616765);");
E_D("replace into `ecs_admin_action` values('48','5',0x73686f705f636f6e666967,'');");
E_D("replace into `ecs_admin_action` values('49','5',0x736869705f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('50','5',0x7061796d656e74,'');");
E_D("replace into `ecs_admin_action` values('51','5',0x73686970617265615f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('52','5',0x617265615f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('53','6',0x6f726465725f6f735f65646974,'');");
E_D("replace into `ecs_admin_action` values('54','6',0x6f726465725f70735f65646974,0x6f726465725f6f735f65646974);");
E_D("replace into `ecs_admin_action` values('55','6',0x6f726465725f73735f65646974,0x6f726465725f6f735f65646974);");
E_D("replace into `ecs_admin_action` values('56','6',0x6f726465725f65646974,0x6f726465725f6f735f65646974);");
E_D("replace into `ecs_admin_action` values('57','6',0x6f726465725f76696577,'');");
E_D("replace into `ecs_admin_action` values('58','6',0x6f726465725f766965775f66696e6973686564,'');");
E_D("replace into `ecs_admin_action` values('59','6',0x72657061795f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('60','6',0x626f6f6b696e67,'');");
E_D("replace into `ecs_admin_action` values('61','6',0x73616c655f6f726465725f7374617473,'');");
E_D("replace into `ecs_admin_action` values('62','6',0x636c69656e745f666c6f775f7374617473,'');");
E_D("replace into `ecs_admin_action` values('70','1',0x676f6f64735f74797065,'');");
E_D("replace into `ecs_admin_action` values('73','3',0x666565646261636b5f70726976,'');");
E_D("replace into `ecs_admin_action` values('74','4',0x74656d706c6174655f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('75','5',0x667269656e646c696e6b,'');");
E_D("replace into `ecs_admin_action` values('76','5',0x64625f6261636b7570,'');");
E_D("replace into `ecs_admin_action` values('77','5',0x64625f72656e6577,0x64625f6261636b7570);");
E_D("replace into `ecs_admin_action` values('78','7',0x736e617463685f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('79','7',0x626f6e75735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('80','7',0x676966745f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('81','7',0x636172645f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('82','7',0x7061636b,'');");
E_D("replace into `ecs_admin_action` values('83','7',0x61645f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('84','1',0x7461675f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('85','3',0x737572706c75735f6d616e616765,0x6163636f756e745f6d616e616765);");
E_D("replace into `ecs_admin_action` values('86','4',0x6167656e63795f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('87','3',0x6163636f756e745f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('88','5',0x666c6173685f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('89','5',0x6e6176696761746f72,'');");
E_D("replace into `ecs_admin_action` values('90','7',0x61756374696f6e,'');");
E_D("replace into `ecs_admin_action` values('91','7',0x67726f75705f6279,'');");
E_D("replace into `ecs_admin_action` values('92','7',0x6661766f757261626c65,'');");
E_D("replace into `ecs_admin_action` values('93','7',0x77686f6c655f73616c65,'');");
E_D("replace into `ecs_admin_action` values('94','1',0x676f6f64735f6175746f,'');");
E_D("replace into `ecs_admin_action` values('95','2',0x61727469636c655f6175746f,'');");
E_D("replace into `ecs_admin_action` values('96','5',0x63726f6e,'');");
E_D("replace into `ecs_admin_action` values('97','5',0x616666696c69617465,'');");
E_D("replace into `ecs_admin_action` values('98','5',0x616666696c696174655f636b,'');");
E_D("replace into `ecs_admin_action` values('99','8',0x617474656e74696f6e5f6c697374,'');");
E_D("replace into `ecs_admin_action` values('100','8',0x656d61696c5f6c697374,'');");
E_D("replace into `ecs_admin_action` values('101','8',0x6d6167617a696e655f6c697374,'');");
E_D("replace into `ecs_admin_action` values('102','8',0x766965775f73656e646c697374,'');");
E_D("replace into `ecs_admin_action` values('103','1',0x76697275616c63617264,'');");
E_D("replace into `ecs_admin_action` values('104','7',0x7061636b6167655f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('105','1',0x706963747572655f6261746368,'');");
E_D("replace into `ecs_admin_action` values('106','1',0x676f6f64735f6578706f7274,'');");
E_D("replace into `ecs_admin_action` values('107','1',0x676f6f64735f6261746368,'');");
E_D("replace into `ecs_admin_action` values('108','1',0x67656e5f676f6f64735f736372697074,'');");
E_D("replace into `ecs_admin_action` values('109','5',0x736974656d6170,'');");
E_D("replace into `ecs_admin_action` values('110','5',0x66696c655f70726976,'');");
E_D("replace into `ecs_admin_action` values('111','5',0x66696c655f636865636b,'');");
E_D("replace into `ecs_admin_action` values('112','9',0x74656d706c6174655f73656c656374,'');");
E_D("replace into `ecs_admin_action` values('113','9',0x74656d706c6174655f7365747570,'');");
E_D("replace into `ecs_admin_action` values('114','9',0x6c6962726172795f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('115','9',0x6c616e675f65646974,'');");
E_D("replace into `ecs_admin_action` values('116','9',0x6261636b75705f73657474696e67,'');");
E_D("replace into `ecs_admin_action` values('117','9',0x6d61696c5f74656d706c617465,'');");
E_D("replace into `ecs_admin_action` values('118','10',0x64625f6261636b7570,'');");
E_D("replace into `ecs_admin_action` values('119','10',0x64625f72656e6577,'');");
E_D("replace into `ecs_admin_action` values('120','10',0x64625f6f7074696d697a65,'');");
E_D("replace into `ecs_admin_action` values('121','10',0x73716c5f7175657279,'');");
E_D("replace into `ecs_admin_action` values('122','10',0x636f6e76657274,'');");
E_D("replace into `ecs_admin_action` values('124','11',0x736d735f73656e64,'');");
E_D("replace into `ecs_admin_action` values('128','7',0x65786368616e67655f676f6f6473,'');");
E_D("replace into `ecs_admin_action` values('129','6',0x64656c69766572795f76696577,'');");
E_D("replace into `ecs_admin_action` values('130','6',0x6261636b5f76696577,'');");
E_D("replace into `ecs_admin_action` values('131','5',0x7265675f6669656c6473,'');");
E_D("replace into `ecs_admin_action` values('132','5',0x73686f705f617574686f72697a6564,'');");
E_D("replace into `ecs_admin_action` values('133','5',0x776562636f6c6c6563745f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('134','4',0x737570706c696572735f6d616e616765,'');");
E_D("replace into `ecs_admin_action` values('135','4',0x726f6c655f6d616e616765,'');");

require("../../inc/footer.php");
?>