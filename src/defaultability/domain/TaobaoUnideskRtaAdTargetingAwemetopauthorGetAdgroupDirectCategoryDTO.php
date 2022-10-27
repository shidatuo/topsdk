<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaAdTargetingAwemetopauthorGetAdgroupDirectCategoryDTO {

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

    /**
        扩展数量字段（如粉丝数量）
     **/
    private $ext_num;


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

    public function getExtNum() : string{
        return $this->ext_num;
    }

    public function setExtNum(string $extNum){
        $this->ext_num = $extNum;
    }


}

