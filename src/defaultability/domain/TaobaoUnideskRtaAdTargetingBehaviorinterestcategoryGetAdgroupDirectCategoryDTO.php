<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdTargetingBehaviorinterestcategoryGetAdgroupDirectCategoryDTO {

    /**
        数量
     **/
    private $num;

    /**
        类目名称
     **/
    private $name;

    /**
        类目ID
     **/
    private $id;


    public function getNum() : string{
        return $this->num;
    }

    public function setNum(string $num){
        $this->num = $num;
    }

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


}

