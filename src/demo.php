<?php

require "../vendor/autoload.php";
require "tickettrip2/TicketTrip.php";
require "tickettrip2/kernel/Config.php";
require "tickettrip2/Obj/CreateOrder.php";

//配置
\wulilele\tickettrip2\kernel\Config::$key = "123";
\wulilele\tickettrip2\kernel\Config::$username = "user";
//运行实例
$trip = new \wulilele\tickettrip2\TicketTrip();
$createOrder = new \wulilele\tickettrip2\Obj\CreateOrder();
$createOrder->setTackUserName("哈哈");
$trip->exec($createOrder);
