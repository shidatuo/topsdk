<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdCampaignAddCampaignTopDTO;

class TaobaoUnideskRtaAdCampaignAddRequest {

    /**
        入参
     **/
    private $campaignTopDto;


    public function getCampaignTopDto() : TaobaoUnideskRtaAdCampaignAddCampaignTopDTO{
        return $this->campaignTopDto;
    }

    public function setCampaignTopDto(TaobaoUnideskRtaAdCampaignAddCampaignTopDTO $campaignTopDto){
        $this->campaignTopDto = $campaignTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.campaign.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->campaignTopDto)) {
            $requestParam["campaign_top_dto"] = TopUtil::convertStruct($this->campaignTopDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

