<?php

/**
 * ECSHOP mobile前台公共函数
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liuhui $
 * $Id: init.php 15013 2008-10-23 09:31:42Z liuhui $
*/

if (!defined('IN_ECS'))
{
	die('Hacking attempt');
}
define('ECS_WAP', true);

error_reporting(E_ALL);

if (__FILE__ == '')
{
	die('Fatal error code: 0');
}

/*自定义路径*/
$phonepath = 'mobile';

/* 取得当前ecshop所在的根目录 */
define('ROOT_PATH', str_replace($phonepath.'/includes/init.php', '', str_replace('\\', '/', __FILE__)));

/* 初始化设置 */
@ini_set('memory_limit',		  '64M');
@ini_set('session.cache_expire',  180);
@ini_set('session.use_cookies',   1);
@ini_set('session.auto_start',	0);
@ini_set('display_errors',		0);
@ini_set("arg_separator.output","&amp;");

if (DIRECTORY_SEPARATOR == '\\')
{
	@ini_set('include_path',	  '.;' . ROOT_PATH);
}
else
{
	@ini_set('include_path',	  '.:' . ROOT_PATH);
}

if (file_exists(ROOT_PATH . 'data/config.php'))
{
	include(ROOT_PATH . 'data/config.php');
}
else
{
	include(ROOT_PATH . 'includes/config.php');
}

if (defined('DEBUG_MODE') == false)
{
	define('DEBUG_MODE', 7);
}

if (PHP_VERSION >= '5.1' && !empty($timezone))
{
	date_default_timezone_set($timezone);
}

$php_self = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
if ('/' == substr($php_self, -1))
{
	$php_self .= 'index.php';
}
define('PHP_SELF', $php_self);

require(ROOT_PATH . 'includes/cls_ecshop.php');
require(ROOT_PATH . 'includes/lib_goods.php');
require(ROOT_PATH . 'includes/lib_base.php');
require(ROOT_PATH . 'includes/lib_common.php');
require(ROOT_PATH . 'includes/lib_time.php');
require(ROOT_PATH . 'includes/lib_main.php');
require(ROOT_PATH . "".$phonepath."/includes/lib_main.php");
require(ROOT_PATH . 'includes/inc_constant.php');
require(ROOT_PATH . 'includes/cls_error.php');

/*控制只能手机访
$iPhone = strstr($_SERVER['HTTP_USER_AGENT'],'iPhone');
$iPod = strstr($_SERVER['HTTP_USER_AGENT'],'iPod');
$Android = stripos($_SERVER['HTTP_USER_AGENT'],'Android') !== false;
if($iPhone or $iPod or $Android)
{
}
else{
  echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><title>".$GLOBALS['_CFG']['shop_name']."</title></head><body><p align='left'>请使用安卓,iPhone,iPod访问！</p></body></html>";
  exit();
}问*/
/* 对用户传入的变量进行转义操作。*/
if (!get_magic_quotes_gpc())
{
	if (!empty($_GET))
	{
		$_GET  = addslashes_deep($_GET);
	}
	if (!empty($_POST))
	{
		$_POST = addslashes_deep($_POST);
	}

	$_COOKIE   = addslashes_deep($_COOKIE);
	$_REQUEST  = addslashes_deep($_REQUEST);
}

/* 创建 ECSHOP 对象 */
$ecs = new ECS($db_name, $prefix);

/* 初始化数据库类 */
require(ROOT_PATH . 'includes/cls_mysql.php');
$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);
$db_host = $db_user = $db_pass = $db_name = NULL;

/* 创建错误处理对象 */
$err = new ecs_error('message.html');


/* 载入系统参数 */
$_CFG = load_config();

/* 初始化session */
require(ROOT_PATH . 'includes/cls_session.php');
$sess = new cls_session($db, $ecs->table('sessions'), $ecs->table('sessions_data'), 'ecsid');
define('SESS_ID', $sess->get_session_id());

if (!defined('INIT_NO_SMARTY'))
{
	header('Cache-control: private');
	header('Content-type: text/html; charset=utf-8');

	/* 创建 Smarty 对象。*/
	require(ROOT_PATH . 'includes/cls_template.php');
	$smarty = new cls_template;

	$smarty->cache_lifetime = $_CFG['cache_time'];
	$smarty->template_dir   = ROOT_PATH . "".$phonepath."/templates";
	$smarty->cache_dir	  = ROOT_PATH . 'temp/caches';
	$smarty->compile_dir	= ROOT_PATH . "temp/compiled/".$phonepath."";

	if ((DEBUG_MODE & 2) == 2)
	{
		$smarty->direct_output = true;
		$smarty->force_compile = true;
	}
	else
	{
		$smarty->direct_output = false;
		$smarty->force_compile = false;
	}
}

if (!defined('INIT_NO_USERS'))
{
	/* 会员信息 */
	$user =& init_users();
	if (empty($_SESSION['user_id']))
	{
		if ($user->get_cookie())
		{
			/* 如果会员已经登录并且还没有获得会员的帐户余额、积分以及优惠券 */
			if ($_SESSION['user_id'] > 0 && !isset($_SESSION['user_money']))
			{
				update_user_info();
			}
		}
		else
		{
			$_SESSION['user_id']	 = 0;
			$_SESSION['user_name']   = '';
			$_SESSION['email']	   = '';
			$_SESSION['user_rank']   = 0;
			$_SESSION['discount']	= 1.00;
		}
	}
}

if ((DEBUG_MODE & 1) == 1)
{
	error_reporting(E_ALL);
}
else
{
	error_reporting(E_ALL ^ E_NOTICE);
}
if ((DEBUG_MODE & 4) == 4)
{
	include(ROOT_PATH . 'includes/lib.debug.php');
}

/* 载入系统参数 */
$_CFG = load_config();

/* 载入语言文件 */
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/common.php');

if ($_CFG['shop_closed'] == 1)
{
    /* 商店关闭了，输出关闭的消息 */
    header('Content-type: text/html; charset='.EC_CHARSET);

    die('<div style="margin: 150px; text-align: center; font-size: 14px"><p>' . $_LANG['shop_closed'] . '</p><p>' . $_CFG['close_comment'] . '</p></div>');
}

/* wap头文件 */
//if (substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/')) != '/user.php')
//{}
header("Content-Type:text/html; charset=utf-8");
/*
if (empty($_CFG['wap_config']))
{
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' /><title>".$GLOBALS['_CFG']['shop_name']."</title></head><body><p align='left'>对不起,{$_CFG['shop_name']}暂时没有开启手机购物功能</p></body></html>";
	exit();
}*/
//20:56 2013-7-11
$GLOBALS['smarty']->assign('shop_name',		$GLOBALS['_CFG']['shop_name']);
$GLOBALS['smarty']->assign('service_phone',	$GLOBALS['_CFG']['service_phone']);
$GLOBALS['smarty']->assign('cart_info',		cart_info());
$GLOBALS['smarty']->assign('phonepath',		$phonepath);

/* 判断是否支持 Gzip 模式 */
if (!defined('INIT_NO_SMARTY') && gzip_enabled())
{
    ob_start('ob_gzhandler');
}
else
{
    ob_start();
}


?>