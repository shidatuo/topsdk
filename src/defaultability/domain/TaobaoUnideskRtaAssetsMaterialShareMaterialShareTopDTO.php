<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsMaterialShareMaterialShareTopDTO {

    /**
        要推送到的广告主IDs，一次最多50个
     **/
    private $target_advertiser_ids;

    /**
        广告主ID，素材归属的广告主
     **/
    private $advertiser_id;

    /**
        视频IDs，图片和视频必须二选一，一次最多10个
     **/
    private $video_ids;

    /**
        图片IDs，图片和视频必须二选一，一次最多10个
     **/
    private $image_ids;

    /**
        文件类型，1：图片，2：视频
     **/
    private $type;


    public function getTargetAdvertiserIds() : array{
        return $this->target_advertiser_ids;
    }

    public function setTargetAdvertiserIds(array $targetAdvertiserIds){
        $this->target_advertiser_ids = $targetAdvertiserIds;
    }

    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getVideoIds() : array{
        return $this->video_ids;
    }

    public function setVideoIds(array $videoIds){
        $this->video_ids = $videoIds;
    }

    public function getImageIds() : array{
        return $this->image_ids;
    }

    public function setImageIds(array $imageIds){
        $this->image_ids = $imageIds;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

