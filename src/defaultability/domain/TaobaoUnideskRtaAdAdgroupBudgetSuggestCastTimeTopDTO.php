<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupBudgetSuggestCastTimeTopDTO {

    /**
        投放周期类型，0：从今天起长期投放，1：设置开始和结束日期
     **/
    private $time_type;


    public function getTimeType() : int{
        return $this->time_type;
    }

    public function setTimeType(int $timeType){
        $this->time_type = $timeType;
    }


}

