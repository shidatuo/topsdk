<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAssetsCreativecomponentGetCreativeComponentTopQueryDTO;

class TaobaoUnideskRtaAssetsCreativecomponentGetRequest {

    /**
        查询参数
     **/
    private $creativeComponentTopQueryDto;


    public function getCreativeComponentTopQueryDto() : TaobaoUnideskRtaAssetsCreativecomponentGetCreativeComponentTopQueryDTO{
        return $this->creativeComponentTopQueryDto;
    }

    public function setCreativeComponentTopQueryDto(TaobaoUnideskRtaAssetsCreativecomponentGetCreativeComponentTopQueryDTO $creativeComponentTopQueryDto){
        $this->creativeComponentTopQueryDto = $creativeComponentTopQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.assets.creativecomponent.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->creativeComponentTopQueryDto)) {
            $requestParam["creative_component_top_query_dto"] = TopUtil::convertStruct($this->creativeComponentTopQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

