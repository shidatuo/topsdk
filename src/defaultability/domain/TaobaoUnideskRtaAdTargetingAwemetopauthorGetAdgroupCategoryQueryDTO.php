<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdTargetingAwemetopauthorGetAdgroupCategoryQueryDTO {

    /**
        类目id
     **/
    private $category_id;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        行为场景，1：关注，2：评论，3：点赞，4：分享
     **/
    private $scene;


    public function getCategoryId() : string{
        return $this->category_id;
    }

    public function setCategoryId(string $categoryId){
        $this->category_id = $categoryId;
    }

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

