<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaToolsIndustryGetIndustryTopQueryDTO;

class TaobaoUnideskRtaToolsIndustryGetRequest {

    /**
        查询入参
     **/
    private $industryTopQueryDto;


    public function getIndustryTopQueryDto() : TaobaoUnideskRtaToolsIndustryGetIndustryTopQueryDTO{
        return $this->industryTopQueryDto;
    }

    public function setIndustryTopQueryDto(TaobaoUnideskRtaToolsIndustryGetIndustryTopQueryDTO $industryTopQueryDto){
        $this->industryTopQueryDto = $industryTopQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.tools.industry.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->industryTopQueryDto)) {
            $requestParam["industry_top_query_dto"] = TopUtil::convertStruct($this->industryTopQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

