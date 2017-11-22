<?php
/**
 * Created by PhpStorm.
 * User: zhurungen
 * Date: 2017/11/22
 * Time: 15:54
 */

class singleton
{
    private static $instance = null;

    //私有化构造函数
    private function __construct()
    {
        echo '新实例';
    }

    //私有化克隆函数
    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}

$a = singleton::getInstance();