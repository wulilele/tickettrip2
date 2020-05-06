<?php


namespace wulilele\tickettrip2\kernel;
use wulilele\tickettrip2\kernel\Config;
use Exception;
class HttpPost
{

    /**
     * Lite constructor.
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
        Config::$username = $username;
        Config::$key = $key;
    }

    public static function post($apiPath,$data=array()){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiPath);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // 从证书中检查SSL加密算法是否存在
        $handles = curl_exec($ch);
        curl_close($ch);
        return $handles;
    }
}