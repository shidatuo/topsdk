<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdTargetingBehaviorinterestkeywordGetAdgroupCategoryQueryDTO {

    /**
        行为天数，1：7天，2：15天，3：30天，4：60天，5：90天，6：180天，7：365天
     **/
    private $days;

    /**
        请求类型 1=行为类目词（scene、days必填） 2=兴趣类目词（无scene、days）
     **/
    private $type;

    /**
        名称查询
     **/
    private $value;

    /**
        广告主id
     **/
    private $advertiser_id;

    /**
        行为场景，1：电商行为场景，2：咨询行为场景，3：app行为场景
     **/
    private $scene;


    public function getDays() : int{
        return $this->days;
    }

    public function setDays(int $days){
        $this->days = $days;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getValue() : string{
        return $this->value;
    }

    public function setValue(string $value){
        $this->value = $value;
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

