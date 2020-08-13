<?php


namespace wulilele\tickettrip2\Obj;
use wulilele\tickettrip2\kernel\Config;
use wulilele\tickettrip2\kernel\Sign;

/**
 * Class TicketBase 请求基类
 * @package wulilele\tickettrip2\Obj
 */
class TicketBase
{
    public static $path = "";//接口相对路径

    public $_error = ""; //错误信息

    /**
     * @var array 参数数组
     * 以下为公共参数,会自动调取，不用传值
     * @params $userName string 用户名
     * @params $timestamp string 当前时间戳
     * @params $password string 加密后的密码
     */
    protected $values = array();
    protected $header = array();

    public function __construct()
    {
        $this->header['userName'] = Config::$username; //用户名
        $currentTimestamp = date('Y-m-d H:i:s');
        $this->header['timestamp'] = $currentTimestamp; //当前时间戳
        $this->header['sign'] = Sign::sign(json_encode($this->getValues()),$currentTimestamp); //加密密码
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * 获取请求头
     * @return array
     */
    public function getHeaders()
    {
        return $this->header;
    }

    /**
     * 参数合法性检查
     */
    public function check(){
        return true;
    }
}