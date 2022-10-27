<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdCampaignAddToutiaoCampaignTopDTO {

    /**
        营销链路，1-行动转化，2-品牌认知
     **/
    private $marketing_purpose;


    public function getMarketingPurpose() : int{
        return $this->marketing_purpose;
    }

    public function setMarketingPurpose(int $marketingPurpose){
        $this->marketing_purpose = $marketingPurpose;
    }


}

