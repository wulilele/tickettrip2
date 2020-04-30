<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class RepeatSms 短信重发
 * @package wulilele\tickettrip2\Obj
 */
class RepeatSms extends TicketBase
{
    public static $path = "/ticketInterface/repeatSms";

    /**
     * @param $third_tid string 票在旅途云平台订单号
     */
    public function setThirdOrderNo($third_tid){
        $this->values['thirdOrderNo'] = $third_tid;
    }
}