<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class FindTimeControl 获取时段信息
 * @package wulilele\tickettrip2\Obj
 */
class FindTimeControl extends TicketBase
{
    public static $path = "/ticketInterface/findTimeControl";

    /**
     * @param $projectId string 项目ID
     * @require true 必填
     */
    public function setProjectId($projectId){
        $this->values['projectId'] = $projectId;
    }

    /**
     * @param $arrivateDate string 游玩日期
     * @require true 必填
     */
    public function setArrivateDate($arrivateDate){
        $this->values['arrivateDate'] = $arrivateDate;
    }
}