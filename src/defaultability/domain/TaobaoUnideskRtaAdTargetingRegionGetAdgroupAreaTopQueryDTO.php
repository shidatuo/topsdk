<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdTargetingRegionGetAdgroupAreaTopQueryDTO {

    /**
        广告主id
     **/
    private $advertiser_id;


    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }


}

