<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoUnideskRtaToolsIndustryGetIndustryTopDTO {

    /**
        名称
     **/
    private $name;

    /**
        id
     **/
    private $id;

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

    public function getParentId() : string{
        return $this->parent_id;
    }

    public function setParentId(string $parentId){
        $this->parent_id = $parentId;
    }


}

