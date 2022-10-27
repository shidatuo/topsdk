<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCampaignUpdateCampaignTopDTO {

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        计划组名称
     **/
    private $name;

    /**
        预算
     **/
    private $budget;

    /**
        计划组id
     **/
    private $id;


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

    public function getBudget() : TaobaoUnideskRtaAdCampaignUpdateBudgetTopDTO{
        return $this->budget;
    }

    public function setBudget(TaobaoUnideskRtaAdCampaignUpdateBudgetTopDTO $budget){
        $this->budget = $budget;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }


}

