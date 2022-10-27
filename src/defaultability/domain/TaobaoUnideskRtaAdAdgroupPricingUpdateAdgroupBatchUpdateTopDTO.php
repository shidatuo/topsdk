<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupPricingUpdateAdgroupBatchUpdateTopDTO {

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        计划ids
     **/
    private $ids;

    /**
        付费出价
     **/
    private $pricing;


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

    public function getPricing() : TaobaoUnideskRtaAdAdgroupPricingUpdateAdgroupPricingTopDTO{
        return $this->pricing;
    }

    public function setPricing(TaobaoUnideskRtaAdAdgroupPricingUpdateAdgroupPricingTopDTO $pricing){
        $this->pricing = $pricing;
    }


}

