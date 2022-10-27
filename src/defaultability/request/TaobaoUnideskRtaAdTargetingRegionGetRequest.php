<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdTargetingRegionGetAdgroupAreaTopQueryDTO;

class TaobaoUnideskRtaAdTargetingRegionGetRequest {

    /**
        查询入参
     **/
    private $adgroupAreaTopQueryDto;


    public function getAdgroupAreaTopQueryDto() : TaobaoUnideskRtaAdTargetingRegionGetAdgroupAreaTopQueryDTO{
        return $this->adgroupAreaTopQueryDto;
    }

    public function setAdgroupAreaTopQueryDto(TaobaoUnideskRtaAdTargetingRegionGetAdgroupAreaTopQueryDTO $adgroupAreaTopQueryDto){
        $this->adgroupAreaTopQueryDto = $adgroupAreaTopQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.targeting.region.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adgroupAreaTopQueryDto)) {
            $requestParam["adgroup_area_top_query_dto"] = TopUtil::convertStruct($this->adgroupAreaTopQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

