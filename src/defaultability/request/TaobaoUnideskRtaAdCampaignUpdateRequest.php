<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdCampaignUpdateCampaignTopDTO;

class TaobaoUnideskRtaAdCampaignUpdateRequest {

    /**
        入参
     **/
    private $campaignTopDto;


    public function getCampaignTopDto() : TaobaoUnideskRtaAdCampaignUpdateCampaignTopDTO{
        return $this->campaignTopDto;
    }

    public function setCampaignTopDto(TaobaoUnideskRtaAdCampaignUpdateCampaignTopDTO $campaignTopDto){
        $this->campaignTopDto = $campaignTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.campaign.update";
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

