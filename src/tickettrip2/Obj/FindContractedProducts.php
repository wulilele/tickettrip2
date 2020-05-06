<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class ContractedProducts 签约产品
 * @package wulilele\tickettrip2\Obj
 */
class FindContractedProducts extends TicketBase
{
    public static $path = "/ticketInterface/findContractedProducts";

    /**
     * @param $scenicTicketNo string 产品编号
     * @require true 必填
     */
    public function setScenicTicketNo($scenicTicketNo){
        $this->values['scenicTicketNo'] = $scenicTicketNo;
    }
}