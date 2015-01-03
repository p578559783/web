<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('1','1','0',0xe9a696e9a1b55fe5b9bbe781afe78987e4b88be59bbe31,'',0x313338363735353939303538363431323430392e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('2','2','0',0xe9a696e9a1b55fe5b9bbe781afe78987e4b88be59bbe32,'',0x313338363735353939363933393234323634332e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('3','3','0',0xe9a696e9a1b55fe5b9bbe781afe78987e4b88be59bbe33,'',0x313338363735363030323438323433333337322e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('4','4','0',0xe9a696e9a1b55fe5b9bbe781afe78987e4b88be59bbe34,'',0x313338363735363030393431353632393234362e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('5','5','0',0xe9a696e9a1b55fe5b9bbe781afe78987e4b88be59bbe35,'',0x313338363735363031353535343934333336312e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('6','6','0',0xe9a696e9a1b55fe5b9bbe781afe78987e4b88be59bbe36,'',0x313338363735363032313236333039353035372e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('7','7','0',0xe9a696e9a1b55fe7acace4b880e58886e7b1bbe5b9bbe781afe59bbe31,'',0x313338363735363736363136343936333935352e6a7067,'1386691200','1920873600','','','','1','1');");
E_D("replace into `ecs_ad` values('8','8','0',0xe9a696e9a1b55fe7acace4b880e58886e7b1bbe5b9bbe781afe59bbe32,'',0x313338363735363737323837373536363236392e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('9','9','0',0xe9a696e9a1b55fe7acace4b880e58886e7b1bbe5b9bbe781afe59bbe33,'',0x313338363735363737383234363637363338382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('10','10','0',0xe9a696e9a1b55fe7acace4b880e58886e7b1bbe58fb3e59bbe31,'',0x313338363735363738393634313434323233372e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('11','11','0',0xe9a696e9a1b55fe7acace4b880e58886e7b1bbe58fb3e59bbe32,'',0x313338363735363739353235383132343236302e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('12','12','0',0xe9a696e9a1b55fe7acace4ba8ce58886e7b1bbe5b9bbe781afe59bbe31,'',0x313338363736353031343639373935363833382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('13','13','0',0xe9a696e9a1b55fe7acace4ba8ce58886e7b1bbe5b9bbe781afe59bbe32,'',0x313338363736353032333333303534373431312e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('14','14','0',0xe9a696e9a1b55fe7acace4ba8ce58886e7b1bbe5b9bbe781afe59bbe33,'',0x313338363735363737383234363637363338382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('15','15','0',0xe9a696e9a1b55fe7acace4ba8ce58886e7b1bbe58fb3e59bbe31,'',0x313338363735363738393634313434323233372e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('16','16','0',0xe9a696e9a1b55fe7acace4ba8ce58886e7b1bbe58fb3e59bbe32,'',0x313338363735363739353235383132343236302e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('17','17','0',0xe9a696e9a1b55fe7acace4b889e58886e7b1bbe5b9bbe781afe59bbe31,'',0x313338363736343435333234383932333332382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('18','18','0',0xe9a696e9a1b55fe7acace4b889e58886e7b1bbe5b9bbe781afe59bbe32,'',0x313338363736343436323136333531393031352e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('19','19','0',0xe9a696e9a1b55fe7acace4b889e58886e7b1bbe5b9bbe781afe59bbe33,'',0x313338363736343436393437363135323535382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('20','20','0',0xe9a696e9a1b55fe7acace4b889e58886e7b1bbe58fb3e59bbe31,'',0x313338363736343639333230333636363639342e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('21','21','0',0xe9a696e9a1b55fe7acace4b889e58886e7b1bbe58fb3e59bbe32,'',0x313338363736343730353031363134363037392e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('22','22','0',0xe9a696e9a1b55fe7acace59b9be58886e7b1bbe5b9bbe781afe59bbe31,'',0x313338363736343935363137333130393535352e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('23','23','0',0xe9a696e9a1b55fe7acace59b9be58886e7b1bbe5b9bbe781afe59bbe32,'',0x313338363735363737323837373536363236392e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('24','24','0',0xe9a696e9a1b55fe7acace59b9be58886e7b1bbe5b9bbe781afe59bbe33,'',0x313338363735363737383234363637363338382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('25','25','0',0xe9a696e9a1b55fe7acace59b9be58886e7b1bbe58fb3e59bbe31,'',0x313338363736353036353536303539373738322e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('26','26','0',0xe9a696e9a1b55fe7acace59b9be58886e7b1bbe58fb3e59bbe32,'',0x313338363736353037313830303933343434342e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('27','27','0',0xe9a696e9a1b55fe7acace4ba94e58886e7b1bbe5b9bbe781afe59bbe31,'',0x313338363736343936343530383935303631352e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('28','28','0',0xe9a696e9a1b55fe7acace4ba94e58886e7b1bbe5b9bbe781afe59bbe32,'',0x313338363735363737323837373536363236392e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('29','29','0',0xe9a696e9a1b55fe7acace4ba94e58886e7b1bbe5b9bbe781afe59bbe33,'',0x313338363735363737383234363637363338382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('30','30','0',0xe9a696e9a1b55fe7acace4ba94e58886e7b1bbe58fb3e59bbe31,'',0x313338363735363738393634313434323233372e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('31','31','0',0xe9a696e9a1b55fe7acace4ba94e58886e7b1bbe58fb3e59bbe32,'',0x313338363735363739353235383132343236302e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('32','32','0',0xe9a696e9a1b55fe7acace585ade58886e7b1bbe5b9bbe781afe59bbe31,'',0x313338363736343937303139343335373036382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('33','33','0',0xe9a696e9a1b55fe7acace585ade58886e7b1bbe5b9bbe781afe59bbe32,'',0x313338363735363737323837373536363236392e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('34','34','0',0xe9a696e9a1b55fe7acace585ade58886e7b1bbe5b9bbe781afe59bbe33,'',0x313338363735363737383234363637363338382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('35','35','0',0xe9a696e9a1b55fe7acace585ade58886e7b1bbe58fb3e59bbe31,'',0x313338363736343838333331323838393634362e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('36','36','0',0xe9a696e9a1b55fe7acace585ade58886e7b1bbe58fb3e59bbe32,'',0x313338363736343837343836383733323330392e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('37','37','0',0xe9a696e9a1b55fe7acace4b889e58886e7b1bbe58fb3e59bbe33,'',0x313338363736343637343833383338323532382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('38','38','0',0xe9a696e9a1b55fe7acace585ade58886e7b1bbe58fb3e59bbe33,'',0x313338363736343836353039363138393736352e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('39','39','0',0xe9a696e9a1b55fe696b0e997bbe4b8ade5bf83e59bbe31,'',0x313338363736353236353632323932383232312e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('40','40','0',0xe9a696e9a1b55fe696b0e997bbe4b8ade5bf83e59bbe32,'',0x313338363736353237353334373539353536352e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('41','41','0',0xe9a696e9a1b55fe696b0e997bbe4b8ade5bf83e59bbe33,'',0x313338363736353238353034353632353038352e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('42','42','0',0xe9a696e9a1b55fe696b0e997bbe4b8ade5bf83e59bbe34,'',0x313338363736353239313330373036343036392e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('43','43','0',0xe9a696e9a1b55fe7b2bee5bda9e6b4bbe58aa8e59bbe31,'',0x313338363736353834303637313238343036302e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('44','44','0',0xe9a696e9a1b55fe7b2bee5bda9e6b4bbe58aa8e59bbe32,'',0x313338363736353834393231373736343037322e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('45','45','0',0xe9a696e9a1b55fe7b2bee5bda9e6b4bbe58aa8e59bbe33,'',0x313338363736353835363635383830303932332e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('46','46','0',0xe9a696e9a1b55fe7b2bee5bda9e6b4bbe58aa8e59bbe34,'',0x313338363736353836323132313637303636372e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('47','47','0',0xe9a696e9a1b55fe7b2bee5bda9e6b4bbe58aa8e59bbe35,'',0x313338363736353836393533353638363736382e6a7067,'1386691200','1920873600','','','','0','1');");
E_D("replace into `ecs_ad` values('48','48','0',0xe9a696e9a1b55fe4b8ade997b442414e4e4552,'',0x313338393431313839363337313539363038372e6a7067,'1389369600','1896883200','','','','0','1');");

require("../../inc/footer.php");
?>