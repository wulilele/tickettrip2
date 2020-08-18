<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class PayOrder 支付订单
 * @package wulilele\tickettrip2\Obj
 */
class PayOrder extends TicketBase
{
    public static $path = "/ticketInterface/payOrder";

    /**
     * @param $thirdOrderNo string 第三方订单号
     * @require true 必填
     */
    public function setThirdOrderNo($thirdOrderNo){
        $this->values['thirdOrderNo'] = $thirdOrderNo;
    }

    /**
     * @param $paymentTypeId Integer 支付方式
     * @require true 必填
     */
    public function setPaymentTypeId($paymentTypeId){
        $this->values['paymentTypeId'] = $paymentTypeId;
    }
}
