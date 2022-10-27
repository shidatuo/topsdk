<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupAddAwemeFanBehaviorDTO {

    /**
        关键词
     **/
    private $keywords;

    /**
        互动天数，1：15天，2：30天，3：60天
     **/
    private $aweme_fan_days;

    /**
        行为场景，1：关注，2：评论，3：点赞，4：分享
     **/
    private $aweme_fan_scene;

    /**
        抖音达人账号类目
     **/
    private $aweme_fan_categories;


    public function getKeywords() : array{
        return $this->keywords;
    }

    public function setKeywords(array $keywords){
        $this->keywords = $keywords;
    }

    public function getAwemeFanDays() : int{
        return $this->aweme_fan_days;
    }

    public function setAwemeFanDays(int $awemeFanDays){
        $this->aweme_fan_days = $awemeFanDays;
    }

    public function getAwemeFanScene() : array{
        return $this->aweme_fan_scene;
    }

    public function setAwemeFanScene(array $awemeFanScene){
        $this->aweme_fan_scene = $awemeFanScene;
    }

    public function getAwemeFanCategories() : array{
        return $this->aweme_fan_categories;
    }

    public function setAwemeFanCategories(array $awemeFanCategories){
        $this->aweme_fan_categories = $awemeFanCategories;
    }


}

