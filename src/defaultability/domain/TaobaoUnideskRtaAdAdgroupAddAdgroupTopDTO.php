<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupAddAdgroupTopDTO {

    /**
        头条特有参数
     **/
    private $toutiao;

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
        落地页
     **/
    private $landing_page;

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
        投放形式，1：激励视频，2：原生，3：开机图，4：知+内容
     **/
    private $cast_show_type;

    /**
        名称
     **/
    private $name;

    /**
        付费出价
     **/
    private $pricing;


    public function getToutiao() : TaobaoUnideskRtaAdAdgroupAddToutiaoAdgroupTopDTO{
        return $this->toutiao;
    }

    public function setToutiao(TaobaoUnideskRtaAdAdgroupAddToutiaoAdgroupTopDTO $toutiao){
        $this->toutiao = $toutiao;
    }

    public function getSmooth() : int{
        return $this->smooth;
    }

    public function setSmooth(int $smooth){
        $this->smooth = $smooth;
    }

    public function getBudget() : TaobaoUnideskRtaAdAdgroupAddBudgetTopDTO{
        return $this->budget;
    }

    public function setBudget(TaobaoUnideskRtaAdAdgroupAddBudgetTopDTO $budget){
        $this->budget = $budget;
    }

    public function getCampaignId() : int{
        return $this->campaign_id;
    }

    public function setCampaignId(int $campaignId){
        $this->campaign_id = $campaignId;
    }

    public function getLandingPage() : TaobaoUnideskRtaAdAdgroupAddLandingPageTopDTO{
        return $this->landing_page;
    }

    public function setLandingPage(TaobaoUnideskRtaAdAdgroupAddLandingPageTopDTO $landingPage){
        $this->landing_page = $landingPage;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getTarget() : TaobaoUnideskRtaAdAdgroupAddAdgroupTargetTopDTO{
        return $this->target;
    }

    public function setTarget(TaobaoUnideskRtaAdAdgroupAddAdgroupTargetTopDTO $target){
        $this->target = $target;
    }

    public function getCastTime() : TaobaoUnideskRtaAdAdgroupAddCastTimeTopDTO{
        return $this->cast_time;
    }

    public function setCastTime(TaobaoUnideskRtaAdAdgroupAddCastTimeTopDTO $castTime){
        $this->cast_time = $castTime;
    }

    public function getCastShowType() : int{
        return $this->cast_show_type;
    }

    public function setCastShowType(int $castShowType){
        $this->cast_show_type = $castShowType;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPricing() : TaobaoUnideskRtaAdAdgroupAddAdgroupPricingTopDTO{
        return $this->pricing;
    }

    public function setPricing(TaobaoUnideskRtaAdAdgroupAddAdgroupPricingTopDTO $pricing){
        $this->pricing = $pricing;
    }


}

