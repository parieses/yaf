<?php
class Log{
    public  static  function getIpUri(){
        return $_SERVER['REMOTE_ADDR'].' | '.$_SERVER['REQUEST_URI'].' | '.$_SERVER['REQUEST_METHOD'].' | ';
    }
    public static function setBasePath($basePath='')
    {
        if(empty($basePth)){
            $basePath = Yaf_Registry::get('conf')['seaslog']['basepath'];
        }
        Log::setBasePath($basePath);
    }
    public static function getBasePath()
    {
        return Log::getBasePath();
    }
    public static function setLogger($module='')
    {
        if(empty($module)){
            $module = Yaf_Registry::get('conf')['seaslog']['module'];
        }
        Log::setLogger($module);
    }
    public static  function getLastLogger()
    {
        return Log::getLastLogger();
    }

    public static function analyzerCount($level = 'all',$log_path = '*',$key_word = NULL)
    {
        return array();
    }
    public static function analyzerDetail($level = SEASLOG_INFO, $log_path = '*', $key_word = NULL, $start = 1, $limit = 20, $order = SEASLOG_DETIAL_ORDER_ASC)
    {
        return Log::analyzerDetail($level, $log_path = '*', $key_word = NULL, $start = 1, $limit = 20, $order = SEASLOG_DETIAL_ORDER_ASC);
    }
    public static function getBuffer()
    {
        return array();
    }
    public static function flushBuffer()
    {
        return TRUE;
    }
    public static function debug($message,array $content = array(),$module = '')
    {
        $message = self::getIpUri().$message;
        if($module !== ''){
            $module = $_SERVER['SERVER_NAME'].'/'.$module;
        }
        Log::debug($message,$content,$module);
    }

    public static function info($message,array $content = array(),$module = '')
    {
        $message = self::getIpUri().$message;
        if($module !== ''){
            $module = $_SERVER['SERVER_NAME'].'/'.$module;
        }
        Log::info($message,$content,$module);
    }

    public  static  function notice($message,array $content = array(),$module = '')
    {
        $message = self::getIpUri().$message;
        if($module !== ''){
            $module = $_SERVER['SERVER_NAME'].'/'.$module;
        }
        Log::notice($message,$content,$module);
    }

    public static function warning($message,array $content = array(),$module = '')
    {
        $message = self::getIpUri().$message;
        if($module !== ''){
            $module = $_SERVER['SERVER_NAME'].'/'.$module;
        }
        Log::warning($message,$content,$module);
    }
    public static function error($message,array $content = array(),$module = '')
    {
        $message = self::getIpUri().$message;
        if($module !== ''){
            $module = $_SERVER['SERVER_NAME'].'/'.$module;
        }
        Log::error($message,$content,$module);
    }

    public static function critical($message,array $content = array(),$module = '')
    {
        $message = self::getIpUri().$message;
        if($module !== ''){
            $module = $_SERVER['SERVER_NAME'].'/'.$module;
        }
        Log::critical($message,$content,$module);
    }

    public static function alert($message,array $content = array(),$module = '')
    {
        $message = self::getIpUri().$message;
        if($module !== ''){
            $module = $_SERVER['SERVER_NAME'].'/'.$module;
        }
        Log::alert($message,$content,$module);
    }
    public static function emergency($message,array $content = array(),$module = '')
    {
        $message = self::getIpUri().$message;
        if($module !== ''){
            $module = $_SERVER['SERVER_NAME'].'/'.$module;
        }
        Log::emergency($message,$content,$module);
    }

    public static  function log($level,$message,array $content = array(),$module = '')
    {
        $message = self::getIpUri().$message;
        if($module !== ''){
            $module = $_SERVER['SERVER_NAME'].'/'.$module;
        }
        Log::log($level,$message,$content,$module);
    }
}
?>