<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class OrderCertificateList 实名制信息
 * @package wulilele\tickettrip2\Obj
 */
class OrderCertificateList
{
    public $certificateName;//持票人姓名
    public $certificateTypeId = 1; //证件类型
    public $certificateNo;//证件号码
    public $phoneNumber;//持票人手机号码

    /**
     * 持票人姓名
     * @param mixed $certificateName
     */
    public function setCertificateName($certificateName)
    {
        $this->certificateName = $certificateName;
    }

    /**
     * 证件类型
     * @param $certificateTypeId
     */
    public function setCertificateTypeId($certificateTypeId)
    {
        $this->certificateTypeId = $certificateTypeId;
    }

    /**
     * 证件号码
     * @param mixed $certificateNo
     */
    public function setCertificateNo($certificateNo)
    {
        $this->certificateNo = $certificateNo;
    }

    /**
     * 持票人手机号码
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
}