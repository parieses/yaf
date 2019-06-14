<?php

/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{

    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $config);
    }
    //自定义插件
    public function _initDefaultName(Yaf_Dispatcher $dispatcher) {
        $user = new User();
        $dispatcher->registerPlugin($user);
    }
    public function _initLog(){
        Yaf_Loader::import("Log/SeaLog.php");
        Log::setBasePath();
        Log::setLogger();
    }
    public function _initLib(){
        Yaf_Loader::import("Common/Utils.php");
        Yaf_Registry::set("utils",Utils::getInstance());
    }

}
