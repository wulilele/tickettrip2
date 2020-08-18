<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class TicketInfomation 购票信息saveOrder
 * @package wulilele\tickettrip2\Obj
 */
class TicketInfomation
{
    public $saleSum;  //购票数量
    public $thirdscenicTicketNo; //第三方产品编号
    public $scenicTicketNo;    //产品编号
    public $settlementPrice;  //结算价格
    public $timeControlParamList; //分时预约时段集合
    public $arriveDT; //游玩日期
    public $orderCertificateList; //实名制信息
    public $unitPrice; //售卖价格
    /**
     * 实名制信息
     * @param array $orderCertificateList 实名制信息对象数组
     */
    public function setOrderCertificateList($orderCertificateList)
    {
        $this->orderCertificateList = $orderCertificateList;
    }

    /**
     * 购票数量
     * @param int $saleSum
     */
    public function setSaleSum($saleSum)
    {
        $this->saleSum = $saleSum;
    }

    /**
     * 第三方产品编号
     * @param string $thirdTypeNO
     */
    public function setThirdscenicTicketNo($thirdTypeNO)
    {
        $this->thirdscenicTicketNo = $thirdTypeNO;
    }

    /**
     * 结算价格
     * @param string $settlementPrice
     */
    public function setSettlementPrice($settlementPrice)
    {
        $this->settlementPrice = $settlementPrice;
    }

    /**
     * 产品编号
     * @param string $productNum
     */
    public function setScenicTicketNo($productNum)
    {
        $this->scenicTicketNo = $productNum;
    }

    /**
     * 分时预约时段集合
     * @param array $array
     */
    public function setTimeControlParamList($array = array()){
        $this->timeControlParamList = $array;
    }

    /**
     * 游玩日期
     * @param $arriveDT
     */
    public function setArriveDT($arriveDT)
    {
        $this->arriveDT = $arriveDT;
    }

    /**
     * 售卖价格
     * @param $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }
}
