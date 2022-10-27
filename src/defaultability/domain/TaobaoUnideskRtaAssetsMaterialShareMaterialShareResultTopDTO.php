<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsMaterialShareMaterialShareResultTopDTO {

    /**
        图片ID
     **/
    private $image_id;

    /**
        视频ID
     **/
    private $video_id;

    /**
        推送失败原因
     **/
    private $fail_reason;

    /**
        文件类型，1：图片，2：视频
     **/
    private $type;

    /**
        广告主ID，素材归属的广告主
     **/
    private $advertiser_id;

    /**
        要推送到的广告主ID
     **/
    private $target_advertiser_id;


    public function getImageId() : string{
        return $this->image_id;
    }

    public function setImageId(string $imageId){
        $this->image_id = $imageId;
    }

    public function getVideoId() : string{
        return $this->video_id;
    }

    public function setVideoId(string $videoId){
        $this->video_id = $videoId;
    }

    public function getFailReason() : string{
        return $this->fail_reason;
    }

    public function setFailReason(string $failReason){
        $this->fail_reason = $failReason;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getTargetAdvertiserId() : int{
        return $this->target_advertiser_id;
    }

    public function setTargetAdvertiserId(int $targetAdvertiserId){
        $this->target_advertiser_id = $targetAdvertiserId;
    }


}

