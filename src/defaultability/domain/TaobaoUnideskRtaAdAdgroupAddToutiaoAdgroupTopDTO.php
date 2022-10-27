<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupAddToutiaoAdgroupTopDTO {

    /**
        店铺停留时长（秒）
     **/
    private $shop_stay_time;

    /**
        是否继承优质计划：1-是 0-否，默认否
     **/
    private $auto_inherit_switch;

    /**
        创意投放资源位
     **/
    private $adzone;


    public function getShopStayTime() : int{
        return $this->shop_stay_time;
    }

    public function setShopStayTime(int $shopStayTime){
        $this->shop_stay_time = $shopStayTime;
    }

    public function getAutoInheritSwitch() : int{
        return $this->auto_inherit_switch;
    }

    public function setAutoInheritSwitch(int $autoInheritSwitch){
        $this->auto_inherit_switch = $autoInheritSwitch;
    }

    public function getAdzone() : TaobaoUnideskRtaAdAdgroupAddAdgroupAdzoneDTO{
        return $this->adzone;
    }

    public function setAdzone(TaobaoUnideskRtaAdAdgroupAddAdgroupAdzoneDTO $adzone){
        $this->adzone = $adzone;
    }


}

