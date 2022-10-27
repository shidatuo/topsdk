<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdAdgroupPricingUpdateAdgroupBatchUpdateTopDTO;

class TaobaoUnideskRtaAdAdgroupPricingUpdateRequest {

    /**
        入参
     **/
    private $adgroupBatchUpdateTopDto;


    public function getAdgroupBatchUpdateTopDto() : TaobaoUnideskRtaAdAdgroupPricingUpdateAdgroupBatchUpdateTopDTO{
        return $this->adgroupBatchUpdateTopDto;
    }

    public function setAdgroupBatchUpdateTopDto(TaobaoUnideskRtaAdAdgroupPricingUpdateAdgroupBatchUpdateTopDTO $adgroupBatchUpdateTopDto){
        $this->adgroupBatchUpdateTopDto = $adgroupBatchUpdateTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.adgroup.pricing.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adgroupBatchUpdateTopDto)) {
            $requestParam["adgroup_batch_update_top_dto"] = TopUtil::convertStruct($this->adgroupBatchUpdateTopDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

