<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdCampaignGetCampaignTopQueryDTO;

class TaobaoUnideskRtaAdCampaignGetRequest {

    /**
        查询参数
     **/
    private $campaignTopQueryDto;


    public function getCampaignTopQueryDto() : TaobaoUnideskRtaAdCampaignGetCampaignTopQueryDTO{
        return $this->campaignTopQueryDto;
    }

    public function setCampaignTopQueryDto(TaobaoUnideskRtaAdCampaignGetCampaignTopQueryDTO $campaignTopQueryDto){
        $this->campaignTopQueryDto = $campaignTopQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.campaign.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->campaignTopQueryDto)) {
            $requestParam["campaign_top_query_dto"] = TopUtil::convertStruct($this->campaignTopQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

