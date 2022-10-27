<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsMaterialVideocoverSuggestMaterialSuggestResultTopDTO {

    /**
        素材url
     **/
    private $url;

    /**
        图片宽度
     **/
    private $width;

    /**
        图片高度
     **/
    private $height;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getWidth() : int{
        return $this->width;
    }

    public function setWidth(int $width){
        $this->width = $width;
    }

    public function getHeight() : int{
        return $this->height;
    }

    public function setHeight(int $height){
        $this->height = $height;
    }


}

