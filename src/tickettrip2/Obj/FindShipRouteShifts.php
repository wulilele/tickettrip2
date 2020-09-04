<?php


namespace wulilele\tickettrip2\Obj;

/**
 * 获取航线班次信息
 * Class FindShipRouteShifts
 * @package wulilele\tickettrip2\Obj
 */
class FindShipRouteShifts extends TicketBase
{
    public static $path = "/ticketInterface/findShipRouteShifts";


    /**
     * @param $routeId long 航线ID
     * @require true 必填
     */
    public function setRouteId($routeId){
        $this->values['routeId'] = $routeId;
    }

    /**
     * @param $shiftsDate string 班次日期
     * @require true 必填
     */
    public function setShiftsDate($shiftsDate){
        $this->values['shiftsDate'] = $shiftsDate;
    }
}
