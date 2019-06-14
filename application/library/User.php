<?php
class User extends Yaf_Plugin_Abstract {

    /**
     * Created by Mr.亮先生.
     * User: 16956
     * Date: 2019/6/14
     * Time: 15:17
     * @Url:
     * @param Yaf_Request_Abstract $request
     * @param Yaf_Response_Abstract $response
     */
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        echo '前';
    }

    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        echo "后";

    }
}
