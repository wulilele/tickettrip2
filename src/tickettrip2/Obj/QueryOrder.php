<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class GetOrderInfoByOrderNo 查询订单
 * @package wulilele\tickettrip2\Obj
 */
class QueryOrder extends TicketBase
{
    public static $path = "/ticketInterface/queryOrder";

    /**
     * @param $third_tid string 第三方订单号
     */
    public function setThirdOrderNo($third_tid){
        $this->values['thirdOrderNo'] = $third_tid;
    }
}