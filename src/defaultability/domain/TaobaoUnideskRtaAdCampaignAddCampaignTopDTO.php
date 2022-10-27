<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCampaignAddCampaignTopDTO {

    /**
        营销目标，1：应用推广 3：电商店铺推广 4：销售线索收集
     **/
    private $type;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        计划组名称
     **/
    private $name;

    /**
        头条特有参数
     **/
    private $toutiao;

    /**
        预算
     **/
    private $budget;


    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getToutiao() : TaobaoUnideskRtaAdCampaignAddToutiaoCampaignTopDTO{
        return $this->toutiao;
    }

    public function setToutiao(TaobaoUnideskRtaAdCampaignAddToutiaoCampaignTopDTO $toutiao){
        $this->toutiao = $toutiao;
    }

    public function getBudget() : TaobaoUnideskRtaAdCampaignAddBudgetTopDTO{
        return $this->budget;
    }

    public function setBudget(TaobaoUnideskRtaAdCampaignAddBudgetTopDTO $budget){
        $this->budget = $budget;
    }


}

