<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f766f74655f6c6973742e6c6269,'8','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f656d61696c5f6c6973742e6c6269,'9','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f6f726465725f71756572792e6c6269,'6','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f636172742e6c6269,'0','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f70726f6d6f74696f6e5f696e666f2e6c6269,'3','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f61756374696f6e2e6c6269,'4','0','3','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f67726f75705f6275792e6c6269,'5','0','3','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,'',0x2f6c6962726172792f7265636f6d6d656e645f70726f6d6f74696f6e2e6c6269,'0','0','4','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe58fb3e8beb9e4b8bbe58cbae59f9f,0x2f6c6962726172792f7265636f6d6d656e645f686f742e6c6269,'2','0','10','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe58fb3e8beb9e4b8bbe58cbae59f9f,0x2f6c6962726172792f7265636f6d6d656e645f6e65772e6c6269,'1','0','10','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe58fb3e8beb9e4b8bbe58cbae59f9f,0x2f6c6962726172792f7265636f6d6d656e645f626573742e6c6269,'0','0','10','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f696e766f6963655f71756572792e6c6269,'7','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f746f7031302e6c6269,'2','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f63617465676f72795f747265652e6c6269,'1','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,'',0x2f6c6962726172792f6272616e64732e6c6269,'0','0','11','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x63617465676f7279,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f63617465676f72795f747265652e6c6269,'1','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x63617465676f7279,0xe58fb3e8beb9e58cbae59f9f,0x2f6c6962726172792f7265636f6d6d656e645f626573742e6c6269,'0','0','5','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x63617465676f7279,0xe58fb3e8beb9e58cbae59f9f,0x2f6c6962726172792f676f6f64735f6c6973742e6c6269,'1','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x63617465676f7279,0xe58fb3e8beb9e58cbae59f9f,0x2f6c6962726172792f70616765732e6c6269,'2','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x63617465676f7279,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f636172742e6c6269,'0','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x63617465676f7279,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f70726963655f67726164652e6c6269,'3','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x63617465676f7279,0xe5b7a6e8beb9e58cbae59f9f,0x2f6c6962726172792f66696c7465725f617474722e6c6269,'2','0','0','0',0x64656661756c74,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe9a696e9a1b55fe7acace585ade58886e7b1bbe4baa7e59381,0x2f6c6962726172792f6361745f676f6f64732e6c6269,'0','1','10','1',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe9a696e9a1b55fe7acace4ba94e58886e7b1bbe4baa7e59381,0x2f6c6962726172792f6361745f676f6f64732e6c6269,'0','1','10','1',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe9a696e9a1b55fe7acace59b9be58886e7b1bbe4baa7e59381,0x2f6c6962726172792f6361745f676f6f64732e6c6269,'0','18','5','1',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe9a696e9a1b55fe7acace4b880e58886e7b1bbe4baa7e59381,0x2f6c6962726172792f6361745f676f6f64732e6c6269,'0','1','10','1',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe9a696e9a1b55fe7acace4ba8ce58886e7b1bbe4baa7e59381,0x2f6c6962726172792f6361745f676f6f64732e6c6269,'0','1','10','1',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,0xe9a696e9a1b55fe7acace4b889e58886e7b1bbe4baa7e59381,0x2f6c6962726172792f6361745f676f6f64732e6c6269,'0','16','4','1',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,'',0x2f6c6962726172792f6272616e64732e6c6269,'0','0','3','0',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,'',0x2f6c6962726172792f61756374696f6e2e6c6269,'0','0','3','0',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,'',0x2f6c6962726172792f67726f75705f6275792e6c6269,'0','0','3','0',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,'',0x2f6c6962726172792f7265636f6d6d656e645f70726f6d6f74696f6e2e6c6269,'0','0','4','0',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,'',0x2f6c6962726172792f7265636f6d6d656e645f686f742e6c6269,'0','0','3','0',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,'',0x2f6c6962726172792f7265636f6d6d656e645f6e65772e6c6269,'0','0','3','0',0x6864,'');");
E_D("replace into `ecs_template` values(0x696e646578,'',0x2f6c6962726172792f7265636f6d6d656e645f626573742e6c6269,'0','0','3','0',0x6864,'');");

require("../../inc/footer.php");
?>