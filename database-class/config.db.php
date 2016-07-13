<?php  
/*
 * @creattime			2014-04-04
 * @function			datebase connect
 * @copyright			(C) 2013-2014 ChangZhao
 * @site				http://zhaochang.org/
 * @lastmodify			2014-6-19
 *
*/
	header("Content-Type:text/html;charset=utf-8");
	$db_config["hostname"] = "127.0.0.1"; 
	$db_config["username"] = "root"; 
	$db_config["password"] = "zhao7528377zz"; 
	$db_config["database"] = "lab"; 
	$db_config["charset"] = "utf8";
	$db_config["pconnect"] = 1;
	$db_config["log"] = 0;
	$db_config["logfilepath"] = './';
?>
