<?php


namespace wulilele\tickettrip2\kernel;
use wulilele\tickettrip2\kernel\Config;

class HttpPost
{
    public static function post($apiPath,$data=array()){
        return curlPost($apiPath, self::createSign($data));
    }
}