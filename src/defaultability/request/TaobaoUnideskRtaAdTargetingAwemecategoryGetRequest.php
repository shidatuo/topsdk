<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdTargetingAwemecategoryGetAdgroupCategoryQueryDTO;

class TaobaoUnideskRtaAdTargetingAwemecategoryGetRequest {

    /**
        查询入参
     **/
    private $adgroupCategoryQueryDto;


    public function getAdgroupCategoryQueryDto() : TaobaoUnideskRtaAdTargetingAwemecategoryGetAdgroupCategoryQueryDTO{
        return $this->adgroupCategoryQueryDto;
    }

    public function setAdgroupCategoryQueryDto(TaobaoUnideskRtaAdTargetingAwemecategoryGetAdgroupCategoryQueryDTO $adgroupCategoryQueryDto){
        $this->adgroupCategoryQueryDto = $adgroupCategoryQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.targeting.awemecategory.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adgroupCategoryQueryDto)) {
            $requestParam["adgroup_category_query_dto"] = TopUtil::convertStruct($this->adgroupCategoryQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

