<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdAdgroupBudgetUpdateAdgroupBatchUpdateTopDTO;

class TaobaoUnideskRtaAdAdgroupBudgetUpdateRequest {

    /**
        入参
     **/
    private $adgroupBatchUpdateTopDto;


    public function getAdgroupBatchUpdateTopDto() : TaobaoUnideskRtaAdAdgroupBudgetUpdateAdgroupBatchUpdateTopDTO{
        return $this->adgroupBatchUpdateTopDto;
    }

    public function setAdgroupBatchUpdateTopDto(TaobaoUnideskRtaAdAdgroupBudgetUpdateAdgroupBatchUpdateTopDTO $adgroupBatchUpdateTopDto){
        $this->adgroupBatchUpdateTopDto = $adgroupBatchUpdateTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.adgroup.budget.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adgroupBatchUpdateTopDto)) {
            $requestParam["adgroup_batch_update_top_dto"] = TopUtil::convertStruct($this->adgroupBatchUpdateTopDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

