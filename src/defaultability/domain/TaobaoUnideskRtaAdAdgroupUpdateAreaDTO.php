<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdAdgroupUpdateAreaDTO {

    /**
        地域值
     **/
    private $city;

    /**
        城市目标人群，1：正在该地区的用户，2：居住在该地区的用户，3：到该地区旅行的用户，4：该地区内的所有用户
     **/
    private $city_target;

    /**
        地域定向类型，-1:不限，1：指定地区
     **/
    private $type;


    public function getCity() : array{
        return $this->city;
    }

    public function setCity(array $city){
        $this->city = $city;
    }

    public function getCityTarget() : int{
        return $this->city_target;
    }

    public function setCityTarget(int $cityTarget){
        $this->city_target = $cityTarget;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

