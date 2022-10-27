<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdCampaignDeleteCampaignTopDeleteDTO;

class TaobaoUnideskRtaAdCampaignDeleteRequest {

    /**
        入参
     **/
    private $campaignTopDeleteDto;


    public function getCampaignTopDeleteDto() : TaobaoUnideskRtaAdCampaignDeleteCampaignTopDeleteDTO{
        return $this->campaignTopDeleteDto;
    }

    public function setCampaignTopDeleteDto(TaobaoUnideskRtaAdCampaignDeleteCampaignTopDeleteDTO $campaignTopDeleteDto){
        $this->campaignTopDeleteDto = $campaignTopDeleteDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.campaign.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->campaignTopDeleteDto)) {
            $requestParam["campaign_top_delete_dto"] = TopUtil::convertStruct($this->campaignTopDeleteDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

