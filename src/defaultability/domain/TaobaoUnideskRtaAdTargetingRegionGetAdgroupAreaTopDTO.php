<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdTargetingRegionGetAdgroupAreaTopDTO {

    /**
        地域名称
     **/
    private $name;

    /**
        地域id
     **/
    private $id;

    /**
        地域所在层级，1：省级，2：市级，3：区县级
     **/
    private $region_level;

    /**
        父级id
     **/
    private $parent_id;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getRegionLevel() : int{
        return $this->region_level;
    }

    public function setRegionLevel(int $regionLevel){
        $this->region_level = $regionLevel;
    }

    public function getParentId() : string{
        return $this->parent_id;
    }

    public function setParentId(string $parentId){
        $this->parent_id = $parentId;
    }


}

