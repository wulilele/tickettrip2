<?php
namespace wulilele\tickettrip2;

use wulilele\tickettrip2\kernel\Config;

class TicketTrip
{

    /**
     * 执行请求
     */
    public function exec(){
        echo Config::$username;
    }
}