<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAssetsMaterialShareMaterialShareTopDTO;

class TaobaoUnideskRtaAssetsMaterialShareRequest {

    /**
        入参
     **/
    private $materialShareTopDto;


    public function getMaterialShareTopDto() : TaobaoUnideskRtaAssetsMaterialShareMaterialShareTopDTO{
        return $this->materialShareTopDto;
    }

    public function setMaterialShareTopDto(TaobaoUnideskRtaAssetsMaterialShareMaterialShareTopDTO $materialShareTopDto){
        $this->materialShareTopDto = $materialShareTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.assets.material.share";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->materialShareTopDto)) {
            $requestParam["material_share_top_dto"] = TopUtil::convertStruct($this->materialShareTopDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

