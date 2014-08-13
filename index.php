<?php

if($_SERVER['REQUEST_URI'] == "/index.php") {
header("Location: /",TRUE,301);
exit();
}

if($_SERVER['REMOTE_ADDR'] == "127.0.0.1"){
defined('YII_DEBUG') or define('YII_DEBUG',true);
$yii=dirname(__FILE__).'/../YiiRoot/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/local_main.php';
}

else {
define('YII_DEBUG', false);
$yii=dirname(__FILE__).'/../YiiRoot/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/server_main.php';
define('YII_ENABLE_ERROR_HANDLER', false);
//define('YII_ENABLE_EXCEPTION_HANDLER', false);
}
require_once($yii);
$app = Yii::createWebApplication($config); 

// GZIP - сжатие / attaching a handler to application start 
/*Yii::app()->onBeginRequest = function($event) 
{
		// starting output buffering with gzip handler 
		return ob_start("ob_gzhandler");
}; 
// attaching a handler to application end 
Yii::app()->onEndRequest = function($event) 
{
		// releasing output buffer 
		return ob_end_flush();
};*/

$app->run();