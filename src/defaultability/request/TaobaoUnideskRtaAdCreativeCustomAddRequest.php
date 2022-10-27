<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdCreativeCustomAddCreativeGroupTopDTO;

class TaobaoUnideskRtaAdCreativeCustomAddRequest {

    /**
        入参
     **/
    private $creativeGroupTopDto;

    /**
        请求id，用于幂等唯一key，新建创意建议填写
     **/
    private $requestId;


    public function getCreativeGroupTopDto() : TaobaoUnideskRtaAdCreativeCustomAddCreativeGroupTopDTO{
        return $this->creativeGroupTopDto;
    }

    public function setCreativeGroupTopDto(TaobaoUnideskRtaAdCreativeCustomAddCreativeGroupTopDTO $creativeGroupTopDto){
        $this->creativeGroupTopDto = $creativeGroupTopDto;
    }

    public function getRequestId() : string{
        return $this->requestId;
    }

    public function setRequestId(string $requestId){
        $this->requestId = $requestId;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.creative.custom.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->creativeGroupTopDto)) {
            $requestParam["creative_group_top_dto"] = TopUtil::convertStruct($this->creativeGroupTopDto);
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

