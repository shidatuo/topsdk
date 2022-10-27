<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupUpdateCastTimeTopDTO {

    /**
        时段，24*7 位 0 或 1 组成的字符串，小时粒度； 从 周一 0 点开始到周日 24 点结束，0 不投放，1 投放; 禁止全部为 0，不传或者全部为 1，表示全时段投放
     **/
    private $time_series;

    /**
        投放周期类型，0：从今天起长期投放，1：设置开始和结束日期
     **/
    private $time_type;

    /**
        投放周期，开始时间
     **/
    private $start_time;

    /**
        投放周期，结束时间
     **/
    private $end_time;


    public function getTimeSeries() : string{
        return $this->time_series;
    }

    public function setTimeSeries(string $timeSeries){
        $this->time_series = $timeSeries;
    }

    public function getTimeType() : int{
        return $this->time_type;
    }

    public function setTimeType(int $timeType){
        $this->time_type = $timeType;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }


}

