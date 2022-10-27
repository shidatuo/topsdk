<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdTargetingAwemecategoryGetAdgroupCategoryQueryDTO {

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        行为场景，1：关注，2：评论，3：点赞，4：分享
     **/
    private $scene;


    public function getAdvertiserId() : int{
        return $this->advertiser_id;
    }

    public function setAdvertiserId(int $advertiserId){
        $this->advertiser_id = $advertiserId;
    }

    public function getScene() : array{
        return $this->scene;
    }

    public function setScene(array $scene){
        $this->scene = $scene;
    }


}

