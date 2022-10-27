<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAssetsMaterialVideocoverSuggestMaterialSuggestTopDTO;

class TaobaoUnideskRtaAssetsMaterialVideocoverSuggestRequest {

    /**
        入参
     **/
    private $materialSuggestTopDto;


    public function getMaterialSuggestTopDto() : TaobaoUnideskRtaAssetsMaterialVideocoverSuggestMaterialSuggestTopDTO{
        return $this->materialSuggestTopDto;
    }

    public function setMaterialSuggestTopDto(TaobaoUnideskRtaAssetsMaterialVideocoverSuggestMaterialSuggestTopDTO $materialSuggestTopDto){
        $this->materialSuggestTopDto = $materialSuggestTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.assets.material.videocover.suggest";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->materialSuggestTopDto)) {
            $requestParam["material_suggest_top_dto"] = TopUtil::convertStruct($this->materialSuggestTopDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

