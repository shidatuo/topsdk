<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoUnideskRtaAssetsCreativecomponentAddCreativeComponentTopDTO;

class TaobaoUnideskRtaAssetsCreativecomponentAddRequest {

    /**
        组件详细信息
     **/
    private $creativeComponentTopDto;


    public function getCreativeComponentTopDto() : TaobaoUnideskRtaAssetsCreativecomponentAddCreativeComponentTopDTO{
        return $this->creativeComponentTopDto;
    }

    public function setCreativeComponentTopDto(TaobaoUnideskRtaAssetsCreativecomponentAddCreativeComponentTopDTO $creativeComponentTopDto){
        $this->creativeComponentTopDto = $creativeComponentTopDto;
    }


    public function getApiName() : string {
        return "taobao.unidesk.rta.assets.creativecomponent.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->creativeComponentTopDto)) {
            $requestParam["creative_component_top_dto"] = TopUtil::convertStruct($this->creativeComponentTopDto);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

