<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class SaveOrder 下单
 * @package wulilele\tickettrip2\Obj
 */
class CreateOrder extends TicketBase
{
    public static $path = "/ticketInterface/createOrder";

    public function __construct()
    {
        parent::__construct();
        //设置默认参数
        $this->values['tackCertificateTypeId'] = "1";   //默认刷取票身份证入园
        $this->values['phoneAreaNumber'] = "86"; //默认签单
    }

    /**
     * @param $name string 取票人姓名
     * @require true 必填
     */
    public function setTackUserName($name){
        $this->values['tackUserName'] = $name;
    }

    /**
     * @param $phone string 取票人手机号码，用于发送短信和彩信用
     * @require true 必填
     */
    public function setTackPhoneNumber($phone){
        $this->values['tackPhoneNumber'] = $phone;
    }

    /**
     * @param $idcard string 取票人身份
     * @require false
     */
    public function setTackCertificateNo($idcard){
        $this->values['tackCertificateNo'] = $idcard;
    }

    /**
     * @param $child_tid string 订单号
     * @require true
     */
    public function setThirdOrderNo($child_tid){
        $this->values['thirdOrderNo'] = $child_tid;
    }

    /**
     * 订单信息
     * @param array $array
     */
    public function setOrderDetailList($array = array()){
        $this->values["orderDetailList"] = $array;
    }

    /**
     * 证件类型
     * @param $tackCertificateTypeId
     */
    public function setTackCertificateTypeId($tackCertificateTypeId)
    {
        $this->values['tackCertificateTypeId'] = $tackCertificateTypeId;
    }

    /**
     * 手机号区号
     * @param $phoneAreaNumber
     */
    public function setPhoneAreaNumber($phoneAreaNumber)
    {
        $this->values['phoneAreaNumber'] = $phoneAreaNumber;
    }

    /**
     * 备注
     * @param $remake
     */
    public function setRemake($remake)
    {
        $this->values['remake'] = $remake;
    }

    /**
     * 参数合法性检查
     * @return bool|void
     */
    public function check()
    {
        return true;
    }
}
