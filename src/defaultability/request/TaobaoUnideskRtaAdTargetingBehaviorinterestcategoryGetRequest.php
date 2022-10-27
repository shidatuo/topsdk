<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdTargetingBehaviorinterestcategoryGetAdgroupCategoryQueryDTO;

class TaobaoUnideskRtaAdTargetingBehaviorinterestcategoryGetRequest {

    /**
        查询入参
     **/
    private $adgroupCategoryQueryDto;


    public function getAdgroupCategoryQueryDto() : TaobaoUnideskRtaAdTargetingBehaviorinterestcategoryGetAdgroupCategoryQueryDTO{
        return $this->adgroupCategoryQueryDto;
    }

    public function setAdgroupCategoryQueryDto(TaobaoUnideskRtaAdTargetingBehaviorinterestcategoryGetAdgroupCategoryQueryDTO $adgroupCategoryQueryDto){
        $this->adgroupCategoryQueryDto = $adgroupCategoryQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.targeting.behaviorinterestcategory.get";
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

