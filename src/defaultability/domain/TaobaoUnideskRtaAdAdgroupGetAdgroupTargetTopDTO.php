<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupGetAdgroupTargetTopDTO {

    /**
        行为兴趣
     **/
    private $interest_action;

    /**
        过滤已转化用户，0(默认)：不限；1：广告组2：广告计划；3：本账户；4：公司主体；5：APP
     **/
    private $hide_if_converted;

    /**
        地域定向
     **/
    private $area;

    /**
        网络运营商，-1：不限，1：移动，2：联通，3：电信
     **/
    private $net_carrier;

    /**
        职业，1：大学生，2：教师，3：IT，4：公务员，5：金融，6：医务人员
     **/
    private $career;

    /**
        性别，-1：不限，1：女，2：男
     **/
    private $gender;

    /**
        智能放量，1：年龄，2：性别，3：地域，4：行为兴趣，5：学历
     **/
    private $auto_extend_targets;

    /**
        平台
     **/
    private $platform;

    /**
        网络，-1：不限，0：Wi-Fi，1：移动网络，2：2G，3：3G，4：4G
     **/
    private $network;

    /**
        设备-品牌/价格
     **/
    private $device;

    /**
        头条特有定向
     **/
    private $toutiao;

    /**
        年龄
     **/
    private $age;


    public function getInterestAction() : TaobaoUnideskRtaAdAdgroupGetInterestActionDTO{
        return $this->interest_action;
    }

    public function setInterestAction(TaobaoUnideskRtaAdAdgroupGetInterestActionDTO $interestAction){
        $this->interest_action = $interestAction;
    }

    public function getHideIfConverted() : int{
        return $this->hide_if_converted;
    }

    public function setHideIfConverted(int $hideIfConverted){
        $this->hide_if_converted = $hideIfConverted;
    }

    public function getArea() : TaobaoUnideskRtaAdAdgroupGetAreaDTO{
        return $this->area;
    }

    public function setArea(TaobaoUnideskRtaAdAdgroupGetAreaDTO $area){
        $this->area = $area;
    }

    public function getNetCarrier() : array{
        return $this->net_carrier;
    }

    public function setNetCarrier(array $netCarrier){
        $this->net_carrier = $netCarrier;
    }

    public function getCareer() : array{
        return $this->career;
    }

    public function setCareer(array $career){
        $this->career = $career;
    }

    public function getGender() : int{
        return $this->gender;
    }

    public function setGender(int $gender){
        $this->gender = $gender;
    }

    public function getAutoExtendTargets() : array{
        return $this->auto_extend_targets;
    }

    public function setAutoExtendTargets(array $autoExtendTargets){
        $this->auto_extend_targets = $autoExtendTargets;
    }

    public function getPlatform() : array{
        return $this->platform;
    }

    public function setPlatform(array $platform){
        $this->platform = $platform;
    }

    public function getNetwork() : array{
        return $this->network;
    }

    public function setNetwork(array $network){
        $this->network = $network;
    }

    public function getDevice() : TaobaoUnideskRtaAdAdgroupGetDeviceDTO{
        return $this->device;
    }

    public function setDevice(TaobaoUnideskRtaAdAdgroupGetDeviceDTO $device){
        $this->device = $device;
    }

    public function getToutiao() : TaobaoUnideskRtaAdAdgroupGetToutiaoAdgroupTargetTopDTO{
        return $this->toutiao;
    }

    public function setToutiao(TaobaoUnideskRtaAdAdgroupGetToutiaoAdgroupTargetTopDTO $toutiao){
        $this->toutiao = $toutiao;
    }

    public function getAge() : TaobaoUnideskRtaAdAdgroupGetAgeDTO{
        return $this->age;
    }

    public function setAge(TaobaoUnideskRtaAdAdgroupGetAgeDTO $age){
        $this->age = $age;
    }


}

