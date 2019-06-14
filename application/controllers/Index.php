<?php
class IndexController extends Yaf_Controller_Abstract {
    //取消页面模板
    public function init() {
        Yaf_Dispatcher::getInstance()->disableView();
    }
    public function indexAction() {//默认Action
//        $this->getView()->assign("content", "Hello World");
        if ($this->getRequest()->isCli()) {
            echo "running in Cli mode";
        }else {
            echo "running in get mode";
        }
    }
}
?>
