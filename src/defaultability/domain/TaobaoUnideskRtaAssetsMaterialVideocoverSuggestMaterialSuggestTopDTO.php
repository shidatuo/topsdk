<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAssetsMaterialVideocoverSuggestMaterialSuggestTopDTO {

    /**
        广告主ID
     **/
    private $advertiser_id;

    /**
        视频ID
     **/
    private $video_id;


    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getVideoId() : string{
        return $this->video_id;
    }

    public function setVideoId(string $videoId){
        $this->video_id = $videoId;
    }


}

