<?php


namespace wulilele\tickettrip2\kernel;

/**
 * 配置类
 * @package wulilele\tickettrip2\kernel
 */
class Config
{
    /**
     * 用户名
     * @var string username
     */
    public static $username = "demo_username";


    /**
     * 密钥
     * @var string key
     */
    public static $key = "demo_key";
    /**
     * @var Api接口路径
     */
    public static $apiurl = "apiUrl";//API接口地址

    /**
     * @param $username string
     * @param $key string
     */
    public static function set($username,$key,$apiurl){
        self::$username = $username;
        self::$key = $key;
        self::$apiurl = $apiurl;
    }
}