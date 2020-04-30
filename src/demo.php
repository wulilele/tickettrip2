<?php

require "../vendor/autoload.php";
require "tickettrip2/TicketTrip.php";
require "tickettrip2/kernel/Config.php";

//配置
\wulilele\tickettrip2\kernel\Config::$key = "123";
\wulilele\tickettrip2\kernel\Config::$username = "user";

//运行实例
$trip = new \wulilele\tickettrip2\TicketTrip();
$trip->exec();