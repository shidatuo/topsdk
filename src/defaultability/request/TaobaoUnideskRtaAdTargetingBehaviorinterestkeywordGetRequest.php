<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdTargetingBehaviorinterestkeywordGetAdgroupCategoryQueryDTO;

class TaobaoUnideskRtaAdTargetingBehaviorinterestkeywordGetRequest {

    /**
        查询入参
     **/
    private $adgroupCategoryQueryDto;


    public function getAdgroupCategoryQueryDto() : TaobaoUnideskRtaAdTargetingBehaviorinterestkeywordGetAdgroupCategoryQueryDTO{
        return $this->adgroupCategoryQueryDto;
    }

    public function setAdgroupCategoryQueryDto(TaobaoUnideskRtaAdTargetingBehaviorinterestkeywordGetAdgroupCategoryQueryDTO $adgroupCategoryQueryDto){
        $this->adgroupCategoryQueryDto = $adgroupCategoryQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.targeting.behaviorinterestkeyword.get";
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

