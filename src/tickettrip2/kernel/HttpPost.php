<?php


namespace wulilele\tickettrip2\kernel;
use wulilele\tickettrip2\kernel\Config;

class HttpPost
{
    protected $httpHeader;

    public function httpHeader()
    {
        $this->httpHeader['username'] = Config::$username;//用户名
        $currentTimestamp = date('YmdHis');
        $this->httpHeader['timestamp'] = $currentTimestamp; //当前时间戳
    }
}