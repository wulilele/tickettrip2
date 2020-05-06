<?php


namespace wulilele\tickettrip2\kernel;

/**
 * 签名类
 * @package wulilele\tickettrip2\kernel
 */
class Sign
{
    /**
     * 生成请求header签名sign参数
     * @param $body array 请求body参数
     * @param $timestamp string 请求时间戳
     * @return string 进行签名转换后的sign值
     */
    public static function sign($body,$timestamp){
        return strtolower(md5(Config::$username . Config::$key . $timestamp . $body));
    }

    /**
     * 验证通知请求的header签名参数sign
     * @param $sign string 签名sign
     * @param $timestamp string 请求时间戳
     * @param $body string 请求body参数
     * @return bool
     */
    public static function check($sign, $timestamp ,$body){
        return strtolower(md5(Config::$key . $timestamp . $body)) == $sign;
    }

}