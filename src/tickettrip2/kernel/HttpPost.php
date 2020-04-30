<?php


namespace wulilele\tickettrip2\kernel;
use wulilele\tickettrip2\kernel\Config;

class HttpPost
{
    public static function post($apiPath,$data=array()){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiPath);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // 从证书中检查SSL加密算法是否存在
        $handles = curl_exec($ch);
        curl_close($ch);
        return $handles;
    }
}