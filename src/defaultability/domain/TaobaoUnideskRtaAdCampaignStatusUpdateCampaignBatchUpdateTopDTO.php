<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCampaignStatusUpdateCampaignBatchUpdateTopDTO {

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        计划组ids
     **/
    private $ids;

    /**
        状态，-1：删除，0：暂停，1：启用
     **/
    private $status;


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

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

