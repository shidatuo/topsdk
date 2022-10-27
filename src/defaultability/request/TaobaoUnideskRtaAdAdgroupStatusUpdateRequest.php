<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdAdgroupStatusUpdateAdgroupBatchUpdateTopDTO;

class TaobaoUnideskRtaAdAdgroupStatusUpdateRequest {

    /**
        入参
     **/
    private $adgroupBatchUpdateTopDto;


    public function getAdgroupBatchUpdateTopDto() : TaobaoUnideskRtaAdAdgroupStatusUpdateAdgroupBatchUpdateTopDTO{
        return $this->adgroupBatchUpdateTopDto;
    }

    public function setAdgroupBatchUpdateTopDto(TaobaoUnideskRtaAdAdgroupStatusUpdateAdgroupBatchUpdateTopDTO $adgroupBatchUpdateTopDto){
        $this->adgroupBatchUpdateTopDto = $adgroupBatchUpdateTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.adgroup.status.update";
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

