<?php
/**
 * Created by PhpStorm.
 * User: huimingdeng
 * Date: 2019/3/2
 * Time: 20:23
 */
namespace core;
class Bootstrap{
    /**
     * 解析 URL
     */
    public static function run(){
//        echo "my is bootstrap::run";
        self::parseUrl();
    }

    public static function parseUrl(){
        dd('abc');
    }
}