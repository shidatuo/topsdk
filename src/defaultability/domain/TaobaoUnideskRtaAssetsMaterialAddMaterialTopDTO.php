<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsMaterialAddMaterialTopDTO {

    /**
        创建时间
     **/
    private $gmt_create;

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
        视频时长，单位秒
     **/
    private $duration;

    /**
        文件大小，单位byte
     **/
    private $size;

    /**
        图片或视频宽度
     **/
    private $width;

    /**
        素材名称
     **/
    private $name;

    /**
        素材id
     **/
    private $id;

    /**
        图片或视频高度
     **/
    private $height;

    /**
        视频首帧图片url
     **/
    private $poster;


    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

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

    public function getDuration() : int{
        return $this->duration;
    }

    public function setDuration(int $duration){
        $this->duration = $duration;
    }

    public function getSize() : int{
        return $this->size;
    }

    public function setSize(int $size){
        $this->size = $size;
    }

    public function getWidth() : int{
        return $this->width;
    }

    public function setWidth(int $width){
        $this->width = $width;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getHeight() : int{
        return $this->height;
    }

    public function setHeight(int $height){
        $this->height = $height;
    }

    public function getPoster() : string{
        return $this->poster;
    }

    public function setPoster(string $poster){
        $this->poster = $poster;
    }


}

