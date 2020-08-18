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
     * @param $thirdOrderNo string 第三方订单号
     */
    public function setThirdOrderNo($thirdOrderNo){
        $this->values['thirdOrderNo'] = $thirdOrderNo;
    }
}
