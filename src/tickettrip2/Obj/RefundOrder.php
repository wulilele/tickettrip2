<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class RefundOrder 订单退订
 * @package wulilele\tickettrip2\Obj
 */
class RefundOrder extends TicketBase
{
    public static $path = "/ticketInterface/refundOrder";

    /**
     * @param $thirdOrderNo string 第三方订单号
     * @require true 必填
     */
    public function setThirdOrderNo($thirdOrderNo){
        $this->values['thirdOrderNo'] = $thirdOrderNo;
    }
}