<?php
define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->bootstrap()->getDispatcher()->dispatch(new Yaf_Request_Simple());
//$app->bootstrap() ;//可选的调用
//$app->run();
