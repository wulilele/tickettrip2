<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class CancelOrder 取消订单
 * @package wulilele\tickettrip2\Obj
 */
class CancelOrder extends TicketBase
{
    public static $path = "/ticketInterface/cancelOrder";

    /**
     * @param $third_tid string 票在旅途云平台订单号
     */
    public function setOrderNo($third_tid){
        $this->values['orderNo'] = $third_tid;
    }
}