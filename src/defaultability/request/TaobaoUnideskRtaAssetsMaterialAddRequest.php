<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAssetsMaterialAddMaterialUploadTopDTO;

class TaobaoUnideskRtaAssetsMaterialAddRequest {

    /**
        素材信息
     **/
    private $materialUploadTopDto;

    /**
        请求id，用于幂等唯一key
     **/
    private $requestId;


    public function getMaterialUploadTopDto() : TaobaoUnideskRtaAssetsMaterialAddMaterialUploadTopDTO{
        return $this->materialUploadTopDto;
    }

    public function setMaterialUploadTopDto(TaobaoUnideskRtaAssetsMaterialAddMaterialUploadTopDTO $materialUploadTopDto){
        $this->materialUploadTopDto = $materialUploadTopDto;
    }

    public function getRequestId() : string{
        return $this->requestId;
    }

    public function setRequestId(string $requestId){
        $this->requestId = $requestId;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.assets.material.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->materialUploadTopDto)) {
            $requestParam["material_upload_top_dto"] = TopUtil::convertStruct($this->materialUploadTopDto);
        }

        if (!TopUtil::checkEmpty($this->requestId)) {
            $requestParam["request_id"] = TopUtil::convertBasic($this->requestId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

