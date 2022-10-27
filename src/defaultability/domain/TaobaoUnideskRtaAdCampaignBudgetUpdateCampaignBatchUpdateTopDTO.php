<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCampaignBudgetUpdateCampaignBatchUpdateTopDTO {

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        计划组ids
     **/
    private $ids;

    /**
        预算
     **/
    private $budget;


    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getIds() : array{
        return $this->ids;
    }

    public function setIds(array $ids){
        $this->ids = $ids;
    }

    public function getBudget() : TaobaoUnideskRtaAdCampaignBudgetUpdateBudgetTopDTO{
        return $this->budget;
    }

    public function setBudget(TaobaoUnideskRtaAdCampaignBudgetUpdateBudgetTopDTO $budget){
        $this->budget = $budget;
    }


}

