<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdAdgroupAddAdgroupTopDTO;

class TaobaoUnideskRtaAdAdgroupAddRequest {

    /**
        入参
     **/
    private $adgroupTopDto;

    /**
        请求id，用于幂等唯一key，创建计划建议填写
     **/
    private $requestId;


    public function getAdgroupTopDto() : TaobaoUnideskRtaAdAdgroupAddAdgroupTopDTO{
        return $this->adgroupTopDto;
    }

    public function setAdgroupTopDto(TaobaoUnideskRtaAdAdgroupAddAdgroupTopDTO $adgroupTopDto){
        $this->adgroupTopDto = $adgroupTopDto;
    }

    public function getRequestId() : string{
        return $this->requestId;
    }

    public function setRequestId(string $requestId){
        $this->requestId = $requestId;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.adgroup.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adgroupTopDto)) {
            $requestParam["adgroup_top_dto"] = TopUtil::convertStruct($this->adgroupTopDto);
        }

        if (!TopUtil::checkEmpty($this->requestId)) {
            $requestParam["request_id"] = TopUtil::convertBasic($this->requestId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

