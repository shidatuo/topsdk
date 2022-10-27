<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupBudgetSuggestAdgroupBuddgetSuggestTopDTO {

    /**
        建议出价最小值，单位分
     **/
    private $min_smart_bid;

    /**
        建议日预算最大值，单位分
     **/
    private $max_budget;

    /**
        建议出价最大值，单位分
     **/
    private $max_smart_bid;

    /**
        建议日预算最小值，单位分
     **/
    private $min_budget;

    /**
        建议出价，单位分
     **/
    private $suggest_budget;


    public function getMinSmartBid() : int{
        return $this->min_smart_bid;
    }

    public function setMinSmartBid(int $minSmartBid){
        $this->min_smart_bid = $minSmartBid;
    }

    public function getMaxBudget() : int{
        return $this->max_budget;
    }

    public function setMaxBudget(int $maxBudget){
        $this->max_budget = $maxBudget;
    }

    public function getMaxSmartBid() : int{
        return $this->max_smart_bid;
    }

    public function setMaxSmartBid(int $maxSmartBid){
        $this->max_smart_bid = $maxSmartBid;
    }

    public function getMinBudget() : int{
        return $this->min_budget;
    }

    public function setMinBudget(int $minBudget){
        $this->min_budget = $minBudget;
    }

    public function getSuggestBudget() : int{
        return $this->suggest_budget;
    }

    public function setSuggestBudget(int $suggestBudget){
        $this->suggest_budget = $suggestBudget;
    }


}

