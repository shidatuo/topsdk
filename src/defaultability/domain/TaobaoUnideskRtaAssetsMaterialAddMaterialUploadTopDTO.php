<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsMaterialAddMaterialUploadTopDTO {

    /**
        文件类型，1：图片，2：视频
     **/
    private $type;

    /**
        素材url
     **/
    private $url;

    /**
        广告主ID
     **/
    private $advertiser_id;

    /**
        素材名称
     **/
    private $name;


    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


}

