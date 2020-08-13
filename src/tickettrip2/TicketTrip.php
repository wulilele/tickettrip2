<?php
namespace wulilele\tickettrip2;

use wulilele\tickettrip2\kernel\Config;
use Exception;
use wulilele\tickettrip2\kernel\Sign;

class TicketTrip
{

    /**
     * @param array $options
     * @throws Exception
     */
    public function __construct($options = array())
    {
        //检查配置参数是否合法
        $username = isset($options['username']) ? $options['username'] : "";
        if(empty($username)){
            throw new Exception("接口用户名username必须");
        }
        $key = isset($options['key']) ? $options['key'] : "";
        if(empty($key)){
            throw new Exception("接口加密密钥key必须");
        }
        $apiUrl = isset($options['apiUrl']) ? $options['apiUrl'] : "";
        if(empty($apiUrl)){
            throw new Exception("接口地址apiUrl必须");
        }
        //设置配置参数
        Config::set($username,$key,$apiUrl);
    }

    /**
     * 云平台接口请求统一方法
     * @param object $object TicketBase 参数对象
     * @return array
     * @throws Exception
     */
    public function request($object){
        //增加参数检查
        if(!$object->check()){
            throw new Exception($object->_error);   //抛出异常错误信息
        }

        $url = Config::$apiurl . $object::$path;//接口完整路径
        $data = $object->getValues();//请求参数
        $param = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = [
            "Content-Type : application/json"
        ];

        $currentTimestamp = date('Y-m-d H:i:s');
        $object->header['userName'] = Config::$username; //用户名
        $object->header['timestamp'] = $currentTimestamp; //当前时间戳
        $object->header['sign'] = Sign::sign(json_encode($param),$currentTimestamp); //加密密码
        $header_data = $object->getHeaders();
        foreach ($header_data as $key=>$val){
            array_push($headers,$key.' : '.$val);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$param);
        $response = curl_exec($ch);
        curl_close($ch);
        return  $response;
    }

    /**
     * 执行请求
     * @param $obj
     */
    public function exec($obj){
        return $this->request($obj);
    }
}