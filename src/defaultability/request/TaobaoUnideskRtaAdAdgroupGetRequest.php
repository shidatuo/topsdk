<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdAdgroupGetAdgroupTopQueryDTO;

class TaobaoUnideskRtaAdAdgroupGetRequest {

    /**
        查询参数
     **/
    private $adgroupTopQueryDto;


    public function getAdgroupTopQueryDto() : TaobaoUnideskRtaAdAdgroupGetAdgroupTopQueryDTO{
        return $this->adgroupTopQueryDto;
    }

    public function setAdgroupTopQueryDto(TaobaoUnideskRtaAdAdgroupGetAdgroupTopQueryDTO $adgroupTopQueryDto){
        $this->adgroupTopQueryDto = $adgroupTopQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.adgroup.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adgroupTopQueryDto)) {
            $requestParam["adgroup_top_query_dto"] = TopUtil::convertStruct($this->adgroupTopQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

