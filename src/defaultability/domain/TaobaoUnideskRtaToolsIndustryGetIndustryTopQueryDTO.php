<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaToolsIndustryGetIndustryTopQueryDTO {

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

