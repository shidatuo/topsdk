<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdCreativeGetCreativeTopQueryDTO;

class TaobaoUnideskRtaAdCreativeGetRequest {

    /**
        查询参数
     **/
    private $creativeTopQueryDto;


    public function getCreativeTopQueryDto() : TaobaoUnideskRtaAdCreativeGetCreativeTopQueryDTO{
        return $this->creativeTopQueryDto;
    }

    public function setCreativeTopQueryDto(TaobaoUnideskRtaAdCreativeGetCreativeTopQueryDTO $creativeTopQueryDto){
        $this->creativeTopQueryDto = $creativeTopQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.creative.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->creativeTopQueryDto)) {
            $requestParam["creative_top_query_dto"] = TopUtil::convertStruct($this->creativeTopQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

