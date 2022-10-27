<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdCampaignStatusUpdateCampaignBatchUpdateTopDTO;

class TaobaoUnideskRtaAdCampaignStatusUpdateRequest {

    /**
        入参
     **/
    private $campaignBatchUpdateTopDto;


    public function getCampaignBatchUpdateTopDto() : TaobaoUnideskRtaAdCampaignStatusUpdateCampaignBatchUpdateTopDTO{
        return $this->campaignBatchUpdateTopDto;
    }

    public function setCampaignBatchUpdateTopDto(TaobaoUnideskRtaAdCampaignStatusUpdateCampaignBatchUpdateTopDTO $campaignBatchUpdateTopDto){
        $this->campaignBatchUpdateTopDto = $campaignBatchUpdateTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.campaign.status.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->campaignBatchUpdateTopDto)) {
            $requestParam["campaign_batch_update_top_dto"] = TopUtil::convertStruct($this->campaignBatchUpdateTopDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

