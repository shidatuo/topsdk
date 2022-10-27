<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetToutiaoAdgroupTargetTopDTO {

    /**
        新用户，-1：不限，1：一个月内，2：一个月到三个月，3：三个月以上
     **/
    private $user_activate_type;

    /**
        流量精选包，-1：不限，2：游戏精选流量包
     **/
    private $superior_popularity_type;

    /**
        抖音达人定向
     **/
    private $aweme_fan_behavior;


    public function getUserActivateType() : array{
        return $this->user_activate_type;
    }

    public function setUserActivateType(array $userActivateType){
        $this->user_activate_type = $userActivateType;
    }

    public function getSuperiorPopularityType() : int{
        return $this->superior_popularity_type;
    }

    public function setSuperiorPopularityType(int $superiorPopularityType){
        $this->superior_popularity_type = $superiorPopularityType;
    }

    public function getAwemeFanBehavior() : TaobaoUnideskRtaAdAdgroupGetAwemeFanBehaviorDTO{
        return $this->aweme_fan_behavior;
    }

    public function setAwemeFanBehavior(TaobaoUnideskRtaAdAdgroupGetAwemeFanBehaviorDTO $awemeFanBehavior){
        $this->aweme_fan_behavior = $awemeFanBehavior;
    }


}

