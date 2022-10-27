<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupBudgetSuggestAdgroupTopDTO {

    /**
        投放， 1 - 加速投放；2 - 平滑投放；3-优先低成本（投放时间范围只可为全天；预算不可为不限或空）
     **/
    private $smooth;

    /**
        预算
     **/
    private $budget;

    /**
        计划组id
     **/
    private $campaign_id;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        投放周期
     **/
    private $cast_time;

    /**
        付费出价
     **/
    private $pricing;


    public function getSmooth() : int{
        return $this->smooth;
    }

    public function setSmooth(int $smooth){
        $this->smooth = $smooth;
    }

    public function getBudget() : TaobaoUnideskRtaAdAdgroupBudgetSuggestBudgetTopDTO{
        return $this->budget;
    }

    public function setBudget(TaobaoUnideskRtaAdAdgroupBudgetSuggestBudgetTopDTO $budget){
        $this->budget = $budget;
    }

    public function getCampaignId() : int{
        return $this->campaign_id;
    }

    public function setCampaignId(int $campaignId){
        $this->campaign_id = $campaignId;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getCastTime() : TaobaoUnideskRtaAdAdgroupBudgetSuggestCastTimeTopDTO{
        return $this->cast_time;
    }

    public function setCastTime(TaobaoUnideskRtaAdAdgroupBudgetSuggestCastTimeTopDTO $castTime){
        $this->cast_time = $castTime;
    }

    public function getPricing() : TaobaoUnideskRtaAdAdgroupBudgetSuggestAdgroupPricingTopDTO{
        return $this->pricing;
    }

    public function setPricing(TaobaoUnideskRtaAdAdgroupBudgetSuggestAdgroupPricingTopDTO $pricing){
        $this->pricing = $pricing;
    }


}

