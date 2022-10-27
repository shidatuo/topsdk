<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupBudgetUpdateAdgroupBatchUpdateTopDTO {

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        计划ids
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

    public function getBudget() : TaobaoUnideskRtaAdAdgroupBudgetUpdateBudgetTopDTO{
        return $this->budget;
    }

    public function setBudget(TaobaoUnideskRtaAdAdgroupBudgetUpdateBudgetTopDTO $budget){
        $this->budget = $budget;
    }


}

