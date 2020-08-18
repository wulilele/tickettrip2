<?php


namespace wulilele\tickettrip2\Obj;

/**
 * Class TimeControlList 购票信息的saveOrder的一部分
 * @package wulilele\tickettrip2\Obj
 */
class TimeControlParamList
{
    public $projectId; //项目ID
    public $ordTimeControlId; //分时预约时段ID

    /**
     * 项目ID
     * @param $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * 分时预约时段
     * @param $ordTimeControlId
     */
    public function setOrdTimeControlId($ordTimeControlId)
    {
        $this->ordTimeControlId = $ordTimeControlId;
    }
}
