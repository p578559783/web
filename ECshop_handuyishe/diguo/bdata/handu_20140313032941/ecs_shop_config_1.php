<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shop_config`;");
E_C("CREATE TABLE `ecs_shop_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=904 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shop_config` values('1','0',0x73686f705f696e666f,0x67726f7570,'','','','1');");
E_D("replace into `ecs_shop_config` values('2','0',0x6261736963,0x67726f7570,'','','','1');");
E_D("replace into `ecs_shop_config` values('3','0',0x646973706c6179,0x67726f7570,'','','','1');");
E_D("replace into `ecs_shop_config` values('4','0',0x73686f7070696e675f666c6f77,0x67726f7570,'','','','1');");
E_D("replace into `ecs_shop_config` values('5','0',0x736d7470,0x67726f7570,'','','','1');");
E_D("replace into `ecs_shop_config` values('6','0',0x68696464656e,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('7','0',0x676f6f6473,0x67726f7570,'','','','1');");
E_D("replace into `ecs_shop_config` values('8','0',0x736d73,0x67726f7570,'','','','1');");
E_D("replace into `ecs_shop_config` values('9','0',0x776170,0x67726f7570,'','','','1');");
E_D("replace into `ecs_shop_config` values('101','1',0x73686f705f6e616d65,0x74657874,'','',0xe99fa9e983bde8a1a3e8888d,'1');");
E_D("replace into `ecs_shop_config` values('102','1',0x73686f705f7469746c65,0x74657874,'','',0xe99fa9e983bde8a1a3e8888d2d2de69c80e5a4a7e79a84e69c8de8a385e59381e7898ce7bd91e4b88ae59586e59f8eefbc81,'1');");
E_D("replace into `ecs_shop_config` values('103','1',0x73686f705f64657363,0x74657874,'','',0xe99fa9e983bde8a1a3e8888d2d2de69c80e5a4a7e79a84e69c8de8a385e59381e7898ce7bd91e4b88ae59586e59f8eefbc81,'1');");
E_D("replace into `ecs_shop_config` values('104','1',0x73686f705f6b6579776f726473,0x74657874,'','',0xe99fa9e983bde8a1a3e8888d2d2de69c80e5a4a7e79a84e69c8de8a385e59381e7898ce7bd91e4b88ae59586e59f8eefbc81,'1');");
E_D("replace into `ecs_shop_config` values('105','1',0x73686f705f636f756e747279,0x6d616e75616c,'','',0x31,'1');");
E_D("replace into `ecs_shop_config` values('106','1',0x73686f705f70726f76696e6365,0x6d616e75616c,'','',0x32,'1');");
E_D("replace into `ecs_shop_config` values('107','1',0x73686f705f63697479,0x6d616e75616c,'','',0x3532,'1');");
E_D("replace into `ecs_shop_config` values('108','1',0x73686f705f61646472657373,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('109','1',0x7171,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('110','1',0x7777,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('111','1',0x736b797065,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('112','1',0x796d,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('113','1',0x6d736e,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('114','1',0x736572766963655f656d61696c,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('115','1',0x736572766963655f70686f6e65,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('116','1',0x73686f705f636c6f736564,0x73656c656374,0x302c31,'','0','1');");
E_D("replace into `ecs_shop_config` values('117','1',0x636c6f73655f636f6d6d656e74,0x7465787461726561,'','','','1');");
E_D("replace into `ecs_shop_config` values('118','1',0x73686f705f6c6f676f,0x66696c65,'',0x2e2e2f7468656d65732f7b2474656d706c6174657d2f696d616765732f,'','1');");
E_D("replace into `ecs_shop_config` values('119','1',0x6c6963656e736564,0x73656c656374,0x302c31,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('120','1',0x757365725f6e6f74696365,0x7465787461726561,'','',0xe794a8e688b7e4b8ade5bf83e585ace5918aefbc81,'1');");
E_D("replace into `ecs_shop_config` values('121','1',0x73686f705f6e6f74696365,0x7465787461726561,'','','','1');");
E_D("replace into `ecs_shop_config` values('122','1',0x73686f705f7265675f636c6f736564,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('201','2',0x6c616e67,0x6d616e75616c,'','',0x7a685f636e,'1');");
E_D("replace into `ecs_shop_config` values('202','2',0x6963705f6e756d626572,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('203','2',0x6963705f66696c65,0x66696c65,'',0x2e2e2f636572742f,'','1');");
E_D("replace into `ecs_shop_config` values('204','2',0x77617465726d61726b,0x66696c65,'',0x2e2e2f696d616765732f,'','1');");
E_D("replace into `ecs_shop_config` values('205','2',0x77617465726d61726b5f706c616365,0x73656c656374,0x302c312c322c332c342c35,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('206','2',0x77617465726d61726b5f616c706861,0x74657874,'','',0x3635,'1');");
E_D("replace into `ecs_shop_config` values('207','2',0x7573655f73746f72616765,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('208','2',0x6d61726b65745f70726963655f72617465,0x74657874,'','',0x312e32,'1');");
E_D("replace into `ecs_shop_config` values('209','2',0x72657772697465,0x73656c656374,0x302c312c32,'','0','1');");
E_D("replace into `ecs_shop_config` values('210','2',0x696e74656772616c5f6e616d65,0x74657874,'','',0xe7a7afe58886,'1');");
E_D("replace into `ecs_shop_config` values('211','2',0x696e74656772616c5f7363616c65,0x74657874,'','',0x31,'1');");
E_D("replace into `ecs_shop_config` values('212','2',0x696e74656772616c5f70657263656e74,0x74657874,'','',0x31,'1');");
E_D("replace into `ecs_shop_config` values('213','2',0x736e5f707265666978,0x74657874,'','',0x454353,'1');");
E_D("replace into `ecs_shop_config` values('214','2',0x636f6d6d656e745f636865636b,0x73656c656374,0x302c31,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('215','2',0x6e6f5f70696374757265,0x66696c65,'',0x2e2e2f696d616765732f,'','1');");
E_D("replace into `ecs_shop_config` values('218','2',0x73746174735f636f6465,0x7465787461726561,'','','','1');");
E_D("replace into `ecs_shop_config` values('219','2',0x63616368655f74696d65,0x74657874,'','',0x33363030,'1');");
E_D("replace into `ecs_shop_config` values('220','2',0x72656769737465725f706f696e7473,0x74657874,'','','0','1');");
E_D("replace into `ecs_shop_config` values('221','2',0x656e61626c655f677a6970,0x73656c656374,0x302c31,'','0','1');");
E_D("replace into `ecs_shop_config` values('222','2',0x746f7031305f74696d65,0x73656c656374,0x302c312c322c332c34,'','0','1');");
E_D("replace into `ecs_shop_config` values('223','2',0x74696d657a6f6e65,0x6f7074696f6e73,0x2d31322c2d31312c2d31302c2d392c2d382c2d372c2d362c2d352c2d342c2d332e352c2d332c2d322c2d312c302c312c322c332c332e352c342c342e352c352c352e352c352e37352c362c362e352c372c382c392c392e352c31302c31312c3132,'',0x38,'1');");
E_D("replace into `ecs_shop_config` values('224','2',0x75706c6f61645f73697a655f6c696d6974,0x6f7074696f6e73,0x2d312c302c36342c3132382c3235362c3531322c313032342c323034382c34303936,'',0x3634,'1');");
E_D("replace into `ecs_shop_config` values('226','2',0x63726f6e5f6d6574686f64,0x73656c656374,0x302c31,'','0','1');");
E_D("replace into `ecs_shop_config` values('227','2',0x636f6d6d656e745f666163746f72,0x73656c656374,0x302c312c322c33,'','0','1');");
E_D("replace into `ecs_shop_config` values('228','2',0x656e61626c655f6f726465725f636865636b,0x73656c656374,0x302c31,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('229','2',0x64656661756c745f73746f72616765,0x74657874,'','',0x31,'1');");
E_D("replace into `ecs_shop_config` values('230','2',0x6267636f6c6f72,0x74657874,'','',0x23464646464646,'1');");
E_D("replace into `ecs_shop_config` values('231','2',0x76697369745f7374617473,0x73656c656374,0x6f6e2c6f6666,'',0x6f6e,'1');");
E_D("replace into `ecs_shop_config` values('232','2',0x73656e645f6d61696c5f6f6e,0x73656c656374,0x6f6e2c6f6666,'',0x6f6666,'1');");
E_D("replace into `ecs_shop_config` values('233','2',0x6175746f5f67656e65726174655f67616c6c657279,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('234','2',0x72657461696e5f6f726967696e616c5f696d67,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('235','2',0x6d656d6265725f656d61696c5f76616c6964617465,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('236','2',0x6d6573736167655f626f617264,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('239','2',0x63657274696669636174655f6964,0x68696464656e,'','',0x343432353434343632,'1');");
E_D("replace into `ecs_shop_config` values('240','2',0x746f6b656e,0x68696464656e,'','',0x31353332666335313633643462666135336464626537303130663134393464323764616461636636393131633838333764313566633166623830313834343033,'1');");
E_D("replace into `ecs_shop_config` values('241','2',0x6365727469,0x68696464656e,'','',0x687474703a2f2f736572766963652e73686f7065782e636e2f6f70656e6170692f6170692e706870,'1');");
E_D("replace into `ecs_shop_config` values('242','2',0x73656e645f7665726966795f656d61696c,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('243','2',0x656e745f6964,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('244','2',0x656e745f6163,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('245','2',0x656e745f7369676e,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('246','2',0x656e745f656d61696c,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('301','3',0x646174655f666f726d6174,0x68696464656e,'','',0x592d6d2d64,'1');");
E_D("replace into `ecs_shop_config` values('302','3',0x74696d655f666f726d6174,0x74657874,'','',0x592d6d2d6420483a693a73,'1');");
E_D("replace into `ecs_shop_config` values('303','3',0x63757272656e63795f666f726d6174,0x74657874,'','',0xefbfa52573e58583,'1');");
E_D("replace into `ecs_shop_config` values('304','3',0x7468756d625f7769647468,0x74657874,'','',0x323230,'1');");
E_D("replace into `ecs_shop_config` values('305','3',0x7468756d625f686569676874,0x74657874,'','',0x323230,'1');");
E_D("replace into `ecs_shop_config` values('306','3',0x696d6167655f7769647468,0x74657874,'','',0x343230,'1');");
E_D("replace into `ecs_shop_config` values('307','3',0x696d6167655f686569676874,0x74657874,'','',0x343230,'1');");
E_D("replace into `ecs_shop_config` values('312','3',0x746f705f6e756d626572,0x74657874,'','',0x3130,'1');");
E_D("replace into `ecs_shop_config` values('313','3',0x686973746f72795f6e756d626572,0x74657874,'','',0x35,'1');");
E_D("replace into `ecs_shop_config` values('314','3',0x636f6d6d656e74735f6e756d626572,0x74657874,'','',0x35,'1');");
E_D("replace into `ecs_shop_config` values('315','3',0x626f756768745f676f6f6473,0x74657874,'','',0x33,'1');");
E_D("replace into `ecs_shop_config` values('316','3',0x61727469636c655f6e756d626572,0x74657874,'','',0x38,'1');");
E_D("replace into `ecs_shop_config` values('317','3',0x676f6f64735f6e616d655f6c656e677468,0x74657874,'','',0x3330,'1');");
E_D("replace into `ecs_shop_config` values('318','3',0x70726963655f666f726d6174,0x73656c656374,0x302c312c322c332c342c35,'',0x35,'1');");
E_D("replace into `ecs_shop_config` values('319','3',0x706167655f73697a65,0x74657874,'','',0x3238,'1');");
E_D("replace into `ecs_shop_config` values('320','3',0x736f72745f6f726465725f74797065,0x73656c656374,0x302c312c32,'','0','1');");
E_D("replace into `ecs_shop_config` values('321','3',0x736f72745f6f726465725f6d6574686f64,0x73656c656374,0x302c31,'','0','1');");
E_D("replace into `ecs_shop_config` values('322','3',0x73686f775f6f726465725f74797065,0x73656c656374,0x302c312c32,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('323','3',0x617474725f72656c617465645f6e756d626572,0x74657874,'','',0x35,'1');");
E_D("replace into `ecs_shop_config` values('324','3',0x676f6f64735f67616c6c6572795f6e756d626572,0x74657874,'','',0x35,'1');");
E_D("replace into `ecs_shop_config` values('325','3',0x61727469636c655f7469746c655f6c656e677468,0x74657874,'','',0x3136,'1');");
E_D("replace into `ecs_shop_config` values('326','3',0x6e616d655f6f665f726567696f6e5f31,0x74657874,'','',0xe59bbde5aeb6,'1');");
E_D("replace into `ecs_shop_config` values('327','3',0x6e616d655f6f665f726567696f6e5f32,0x74657874,'','',0xe79c81,'1');");
E_D("replace into `ecs_shop_config` values('328','3',0x6e616d655f6f665f726567696f6e5f33,0x74657874,'','',0xe5b882,'1');");
E_D("replace into `ecs_shop_config` values('329','3',0x6e616d655f6f665f726567696f6e5f34,0x74657874,'','',0xe58cba,'1');");
E_D("replace into `ecs_shop_config` values('330','3',0x7365617263685f6b6579776f726473,0x74657874,'','',0x32303133e7a78be586ace696b0e593812ce68993e5ba95e8a1ab2ce5bc80e8a1ab2ce8a1ace8a1ab2ce8bf9ee8a1a3e8a3992ce5b08fe8849ae7899be4bb94e8a3a42ce5a5b3e99e8b2ce9858de9a5b0,'0');");
E_D("replace into `ecs_shop_config` values('332','3',0x72656c617465645f676f6f64735f6e756d626572,0x74657874,'','',0x34,'1');");
E_D("replace into `ecs_shop_config` values('333','3',0x68656c705f6f70656e,0x73656c656374,0x302c31,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('334','3',0x61727469636c655f706167655f73697a65,0x74657874,'','',0x3130,'1');");
E_D("replace into `ecs_shop_config` values('335','3',0x706167655f7374796c65,0x73656c656374,0x302c31,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('336','3',0x7265636f6d6d656e645f6f72646572,0x73656c656374,0x302c31,'','0','1');");
E_D("replace into `ecs_shop_config` values('337','3',0x696e6465785f6164,0x68696464656e,'','',0x737973,'1');");
E_D("replace into `ecs_shop_config` values('401','4',0x63616e5f696e766f696365,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('402','4',0x7573655f696e74656772616c,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('403','4',0x7573655f626f6e7573,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('404','4',0x7573655f737572706c7573,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('405','4',0x7573655f686f775f6f6f73,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('406','4',0x73656e645f636f6e6669726d5f656d61696c,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('407','4',0x73656e645f736869705f656d61696c,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('408','4',0x73656e645f63616e63656c5f656d61696c,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('409','4',0x73656e645f696e76616c69645f656d61696c,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('410','4',0x6f726465725f7061795f6e6f7465,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('411','4',0x6f726465725f756e7061795f6e6f7465,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('412','4',0x6f726465725f736869705f6e6f7465,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('413','4',0x6f726465725f726563656976655f6e6f7465,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('414','4',0x6f726465725f756e736869705f6e6f7465,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('415','4',0x6f726465725f72657475726e5f6e6f7465,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('416','4',0x6f726465725f696e76616c69645f6e6f7465,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('417','4',0x6f726465725f63616e63656c5f6e6f7465,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('418','4',0x696e766f6963655f636f6e74656e74,0x7465787461726561,'','','','1');");
E_D("replace into `ecs_shop_config` values('419','4',0x616e6f6e796d6f75735f627579,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('420','4',0x6d696e5f676f6f64735f616d6f756e74,0x74657874,'','','0','1');");
E_D("replace into `ecs_shop_config` values('421','4',0x6f6e655f737465705f627579,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('422','4',0x696e766f6963655f74797065,0x6d616e75616c,'','',0x613a323a7b733a343a2274797065223b613a333a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a303a22223b7d733a343a2272617465223b613a333a7b693a303b643a313b693a313b643a312e353b693a323b643a303b7d7d,'1');");
E_D("replace into `ecs_shop_config` values('423','4',0x73746f636b5f6465635f74696d65,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('424','4',0x636172745f636f6e6669726d,0x6f7074696f6e73,0x312c322c332c34,'',0x33,'0');");
E_D("replace into `ecs_shop_config` values('425','4',0x73656e645f736572766963655f656d61696c,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('426','4',0x73686f775f676f6f64735f696e5f63617274,0x73656c656374,0x312c322c33,'',0x33,'1');");
E_D("replace into `ecs_shop_config` values('427','4',0x73686f775f617474725f696e5f63617274,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('501','5',0x736d74705f686f7374,0x74657874,'','',0x6c6f63616c686f7374,'1');");
E_D("replace into `ecs_shop_config` values('502','5',0x736d74705f706f7274,0x74657874,'','',0x3235,'1');");
E_D("replace into `ecs_shop_config` values('503','5',0x736d74705f75736572,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('504','5',0x736d74705f70617373,0x70617373776f7264,'','','','1');");
E_D("replace into `ecs_shop_config` values('505','5',0x736d74705f6d61696c,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('506','5',0x6d61696c5f63686172736574,0x73656c656374,0x555446382c4742323331322c42494735,'',0x55544638,'1');");
E_D("replace into `ecs_shop_config` values('507','5',0x6d61696c5f73657276696365,0x73656c656374,0x302c31,'','0','0');");
E_D("replace into `ecs_shop_config` values('508','5',0x736d74705f73736c,0x73656c656374,0x302c31,'','0','0');");
E_D("replace into `ecs_shop_config` values('601','6',0x696e746567726174655f636f6465,0x68696464656e,'','',0x656373686f70,'1');");
E_D("replace into `ecs_shop_config` values('602','6',0x696e746567726174655f636f6e666967,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('603','6',0x686173685f636f6465,0x68696464656e,'','',0x3331363933343232353430373434633061366236646136333562376135613933,'1');");
E_D("replace into `ecs_shop_config` values('604','6',0x74656d706c617465,0x68696464656e,'','',0x6864,'1');");
E_D("replace into `ecs_shop_config` values('605','6',0x696e7374616c6c5f64617465,0x68696464656e,'','',0x31333336363531323738,'1');");
E_D("replace into `ecs_shop_config` values('606','6',0x6563735f76657273696f6e,0x68696464656e,'','',0x76322e372e33,'1');");
E_D("replace into `ecs_shop_config` values('607','6',0x736d735f757365725f6e616d65,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('608','6',0x736d735f70617373776f7264,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('609','6',0x736d735f617574685f737472,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('610','6',0x736d735f646f6d61696e,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('611','6',0x736d735f636f756e74,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('612','6',0x736d735f746f74616c5f6d6f6e6579,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('613','6',0x736d735f62616c616e6365,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('614','6',0x736d735f6c6173745f72657175657374,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('616','6',0x616666696c69617465,0x68696464656e,'','',0x613a333a7b733a363a22636f6e666967223b613a373a7b733a363a22657870697265223b643a32343b733a31313a226578706972655f756e6974223b733a343a22686f7572223b733a31313a2273657061726174655f6279223b693a303b733a31353a226c6576656c5f706f696e745f616c6c223b733a323a223525223b733a31353a226c6576656c5f6d6f6e65795f616c6c223b733a323a223125223b733a31383a226c6576656c5f72656769737465725f616c6c223b693a323b733a31373a226c6576656c5f72656769737465725f7570223b693a36303b7d733a343a226974656d223b613a343a7b693a303b613a323a7b733a31313a226c6576656c5f706f696e74223b733a333a22363025223b733a31313a226c6576656c5f6d6f6e6579223b733a333a22363025223b7d693a313b613a323a7b733a31313a226c6576656c5f706f696e74223b733a333a22333025223b733a31313a226c6576656c5f6d6f6e6579223b733a333a22333025223b7d693a323b613a323a7b733a31313a226c6576656c5f706f696e74223b733a323a223725223b733a31313a226c6576656c5f6d6f6e6579223b733a323a223725223b7d693a333b613a323a7b733a31313a226c6576656c5f706f696e74223b733a323a223325223b733a31313a226c6576656c5f6d6f6e6579223b733a323a223325223b7d7d733a323a226f6e223b693a313b7d,'1');");
E_D("replace into `ecs_shop_config` values('617','6',0x63617074636861,0x68696464656e,'','','0','1');");
E_D("replace into `ecs_shop_config` values('618','6',0x636170746368615f7769647468,0x68696464656e,'','',0x313030,'1');");
E_D("replace into `ecs_shop_config` values('619','6',0x636170746368615f686569676874,0x68696464656e,'','',0x3230,'1');");
E_D("replace into `ecs_shop_config` values('620','6',0x736974656d6170,0x68696464656e,'','',0x613a363a7b733a31393a22686f6d65706167655f6368616e676566726571223b733a363a22686f75726c79223b733a31373a22686f6d65706167655f7072696f72697479223b733a333a22302e39223b733a31393a2263617465676f72795f6368616e676566726571223b733a363a22686f75726c79223b733a31373a2263617465676f72795f7072696f72697479223b733a333a22302e38223b733a31383a22636f6e74656e745f6368616e676566726571223b733a363a227765656b6c79223b733a31363a22636f6e74656e745f7072696f72697479223b733a333a22302e37223b7d,'0');");
E_D("replace into `ecs_shop_config` values('621','6',0x706f696e74735f72756c65,0x68696464656e,'','','','0');");
E_D("replace into `ecs_shop_config` values('622','6',0x666c6173685f7468656d65,0x68696464656e,'','',0x64796e666f637573,'1');");
E_D("replace into `ecs_shop_config` values('623','6',0x7374796c656e616d65,0x68696464656e,'','','','1');");
E_D("replace into `ecs_shop_config` values('701','7',0x73686f775f676f6f6473736e,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('702','7',0x73686f775f6272616e64,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('703','7',0x73686f775f676f6f6473776569676874,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('704','7',0x73686f775f676f6f64736e756d626572,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('705','7',0x73686f775f61646474696d65,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('706','7',0x676f6f6473617474725f7374796c65,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('707','7',0x73686f775f6d61726b65747072696365,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('801','8',0x736d735f73686f705f6d6f62696c65,0x74657874,'','','','1');");
E_D("replace into `ecs_shop_config` values('802','8',0x736d735f6f726465725f706c61636564,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('803','8',0x736d735f6f726465725f7061796564,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('804','8',0x736d735f6f726465725f73686970706564,0x73656c656374,0x312c30,'','0','1');");
E_D("replace into `ecs_shop_config` values('901','9',0x7761705f636f6e666967,0x73656c656374,0x312c30,'',0x31,'1');");
E_D("replace into `ecs_shop_config` values('902','9',0x7761705f6c6f676f,0x66696c65,'',0x2e2e2f696d616765732f,'','1');");
E_D("replace into `ecs_shop_config` values('903','2',0x6d6573736167655f636865636b,0x73656c656374,0x312c30,'',0x31,'1');");

require("../../inc/footer.php");
?>