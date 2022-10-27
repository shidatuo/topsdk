<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdAdgroupBudgetSuggestAdgroupTopDTO;

class TaobaoUnideskRtaAdAdgroupBudgetSuggestRequest {

    /**
        入参
     **/
    private $adgroupTopDto;


    public function getAdgroupTopDto() : TaobaoUnideskRtaAdAdgroupBudgetSuggestAdgroupTopDTO{
        return $this->adgroupTopDto;
    }

    public function setAdgroupTopDto(TaobaoUnideskRtaAdAdgroupBudgetSuggestAdgroupTopDTO $adgroupTopDto){
        $this->adgroupTopDto = $adgroupTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.adgroup.budget.suggest";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adgroupTopDto)) {
            $requestParam["adgroup_top_dto"] = TopUtil::convertStruct($this->adgroupTopDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

