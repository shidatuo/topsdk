<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAdAdgroupDeleteAdgroupTopDeleteDTO;

class TaobaoUnideskRtaAdAdgroupDeleteRequest {

    /**
        入参
     **/
    private $adgroupTopDeleteDto;


    public function getAdgroupTopDeleteDto() : TaobaoUnideskRtaAdAdgroupDeleteAdgroupTopDeleteDTO{
        return $this->adgroupTopDeleteDto;
    }

    public function setAdgroupTopDeleteDto(TaobaoUnideskRtaAdAdgroupDeleteAdgroupTopDeleteDTO $adgroupTopDeleteDto){
        $this->adgroupTopDeleteDto = $adgroupTopDeleteDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.ad.adgroup.delete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adgroupTopDeleteDto)) {
            $requestParam["adgroup_top_delete_dto"] = TopUtil::convertStruct($this->adgroupTopDeleteDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

