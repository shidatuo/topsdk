<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupUpdateAdgroupTopDTO {

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
        定向
     **/
    private $target;

    /**
        投放周期
     **/
    private $cast_time;

    /**
        名称
     **/
    private $name;

    /**
        付费出价
     **/
    private $pricing;

    /**
        计划id
     **/
    private $id;


    public function getSmooth() : int{
        return $this->smooth;
    }

    public function setSmooth(int $smooth){
        $this->smooth = $smooth;
    }

    public function getBudget() : TaobaoUnideskRtaAdAdgroupUpdateBudgetTopDTO{
        return $this->budget;
    }

    public function setBudget(TaobaoUnideskRtaAdAdgroupUpdateBudgetTopDTO $budget){
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

    public function getTarget() : TaobaoUnideskRtaAdAdgroupUpdateAdgroupTargetTopDTO{
        return $this->target;
    }

    public function setTarget(TaobaoUnideskRtaAdAdgroupUpdateAdgroupTargetTopDTO $target){
        $this->target = $target;
    }

    public function getCastTime() : TaobaoUnideskRtaAdAdgroupUpdateCastTimeTopDTO{
        return $this->cast_time;
    }

    public function setCastTime(TaobaoUnideskRtaAdAdgroupUpdateCastTimeTopDTO $castTime){
        $this->cast_time = $castTime;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPricing() : TaobaoUnideskRtaAdAdgroupUpdateAdgroupPricingTopDTO{
        return $this->pricing;
    }

    public function setPricing(TaobaoUnideskRtaAdAdgroupUpdateAdgroupPricingTopDTO $pricing){
        $this->pricing = $pricing;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }


}

