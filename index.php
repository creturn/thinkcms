<?php 
header("Content-type: text/html;charset=utf-8");
ini_set('memory_limit','32M');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('MyCms',true);
define('UPLOAD_PATH','./Uploads/');
define('APP_NAME','MyCms');
define('APP_PATH','./MyCms/');
define('APP_LANG',true);
define('APP_DEBUG',true);
define('THINK_PATH','./Core/');
require(THINK_PATH.'Core.php');

?>
