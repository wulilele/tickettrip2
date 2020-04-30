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
    public $setmentPrice;  //结算价格
    public $timeControlList; //分时预约时段集合
    public $validStartDT; //有效开始时间
    public $validEndDT; //有效结束时间
    public $remark =""; //备注
    public $orderCertificateList; //实名制信息
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
     * 票种签约价格
     * @param string $setmentPrice
     */
    public function setSetmentPrice($setmentPrice)
    {
        $this->setmentPrice = $setmentPrice;
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
    public function setTimeControlList($array = array()){
        $this->timeControlList = $array;
    }

    /**
     * 有效开始时间
     * @param $start_date
     */
    public function setValidStartDT($start_date)
    {
        $this->validStartDT = $start_date;
    }

    /**
     * 有效结束时间
     * @param $end_date
     */
    public function setValidEndDT($end_date)
    {
        $this->validEndDT = $end_date;
    }

    /**
     * 备注
     * @param $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }
}