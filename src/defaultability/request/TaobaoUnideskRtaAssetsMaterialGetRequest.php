<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAssetsMaterialGetMaterialTopQueryDTO;

class TaobaoUnideskRtaAssetsMaterialGetRequest {

    /**
        查询参数
     **/
    private $materialTopQueryDto;


    public function getMaterialTopQueryDto() : TaobaoUnideskRtaAssetsMaterialGetMaterialTopQueryDTO{
        return $this->materialTopQueryDto;
    }

    public function setMaterialTopQueryDto(TaobaoUnideskRtaAssetsMaterialGetMaterialTopQueryDTO $materialTopQueryDto){
        $this->materialTopQueryDto = $materialTopQueryDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.assets.material.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->materialTopQueryDto)) {
            $requestParam["material_top_query_dto"] = TopUtil::convertStruct($this->materialTopQueryDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

